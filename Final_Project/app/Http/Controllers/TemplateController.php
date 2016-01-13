<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TemplateRequest;
use Request;
use App\Template;
use Auth;


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
	public function store(TemplateRequest $request)
	{
        $request['created_by'] = Auth::id();
        Template::create($request->all());
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
	public function update($id, TemplateRequest $request)
	{
        $request['modified_by'] = Auth::id();
        $template = Template::findOrFail($id);
        $template->update($request->all());
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
