<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $pages = Page::get()->all();
        return view('pages.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        Page::create(Request::all());
        return redirect('pages');
	}

    /**
     * Display the specified resource.
     *
     * @param Page $page
     * @return Response
     * @internal param int $id
     */
	public function show($id)
	{
        $page = Page::findOrFail($id);
        return view('pages.show', compact('page'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $page = Page::findOrFail($id);
        return view('pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $page = Page::findOrFail($id);
        $page->update(Request::all());
        return redirect('pages');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $page = Page::findOrFail($id);

        $page->delete();

        return redirect()->route('pages.index');
	}

}
