<?php namespace App\Http\Controllers;

use App\Article;
use App\ContentArea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Page;
use Illuminate\Support\Facades\Auth;
use Request;
use App\User;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function __construct()
    {
        $this->middleware('admin');
    }

	public function index()
	{
        $articles = Article::get()->all();
        return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $pages = Page::oldest()->lists('name','id');
        $contentAreas= ContentArea::oldest()->lists('name','id');
        return view('articles.create', compact('pages','contentAreas'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return Response
     */
	public function store(ArticleRequest $request)
	{
        $request['created_by'] = Auth::id();
//        $request['modified_by'] = Auth::id();
        $article = new Article($request->all());

        Auth::user()->articles()->save($article);
        \Session::flash('flash_message', 'Article Created');
//        Article::create(Request::all());
        return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $article = Article::findOrFail($id);
        $article->created_by = User::where('id', $article->created_by)->get()->first()->first_name;
        $article->modified_by = User::where('id', $article->modified_by)->get()->first()->first_name;
        $article->area = ContentArea::where('id', $article->area)->get()->first()->name;
        return view('articles.show', compact('article'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $request['modified_by'] = Auth::id();
        $article = Article::findOrFail($id);
        $pages = Page::oldest()->lists('name','id');
        $contentAreas= ContentArea::oldest()->lists('name','id');
        return view('articles.edit', compact('article','pages','contentAreas'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ArticleRequest $request)
	{
        $request['modified_by'] = Auth::id();
        $article = Article::findOrFail($id);
        $article->update($request->all());
//change this to update request all and it now takes the modified by for articles.
        \Session::flash('flash_message', 'Article Edited');
        return redirect('articles');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $article = Article::findOrFail($id);

        $article->delete();
        \Session::flash('flash_message', 'Article Deleted');

        return redirect()->route('articles.index');
	}

//    private function createArticle(ArticleRequest $request)
//    {
//        $article = \Auth::user()->articles()->create($request->all());
//        return $article;
//    }

}
