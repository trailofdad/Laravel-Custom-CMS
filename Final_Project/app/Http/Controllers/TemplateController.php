<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Template;


class TemplateController extends Controller {


    public function __construct()
    {
        $this->middleware('admin');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $templates = Template::get()->all();
        return view('templates.index', compact('templates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('templates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        Template::create(Request::all());
        \Session::flash('flash_message', 'Template Created');
        return redirect('templates');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $template = Template::findOrFail($id);
        return view('templates.show', compact('template'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $template = Template::findOrFail($id);
        return view('templates.edit', compact('template'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $template = Template::findOrFail($id);
        $template->update(Request::all());
        \Session::flash('flash_message', 'Template Updated');
        return redirect('templates');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $template = Template::findOrFail($id);

        $template->delete();
        \Session::flash('flash_message', 'Template Deleted');
        return redirect()->route('templates.index');
	}

}
