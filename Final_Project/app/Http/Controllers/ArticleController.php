<?php namespace App\Http\Controllers;

use App\Article;
use App\ContentArea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Page;
use Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function _construct(){


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
	 * @return Response
	 */
	public function store()
	{
        Article::create(Request::all());
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
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $article = Article::findOrFail($id);
        $article->update(Request::all());
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

        return redirect()->route('articles.index');
	}

//    private function createArticle(ArticleRequest $request)
//    {
//        $article = \Auth::user()->articles()->create($request->all());
//        return $article;
//    }

}
