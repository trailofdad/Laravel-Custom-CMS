<?php namespace App\Http\Controllers;

use App\ContentArea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContentAreaRequest;
use Illuminate\Support\Facades\Auth;
use Request;


class ContentAreaController extends Controller {

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
        $contentAreas = ContentArea::get()->all();
        return view('contentAreas.index', compact('contentAreas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('contentAreas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ContentAreaRequest $request)
	{
        $request['created_by'] = Auth::id();
        ContentArea::create($request->all());
        \Session::flash('flash_message', 'Content Area Created');
        return redirect('contentAreas');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $contentArea = ContentArea::findOrFail($id);
        return view('contentAreas.show', compact('contentArea'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $contentArea = ContentArea::findOrFail($id);
        return view('contentAreas.edit', compact('contentArea'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ContentAreaRequest $request)
	{
        $request['modified_by'] = Auth::id();
        $contentArea = ContentArea::findOrFail($id);
        $contentArea->update($request->all());
        \Session::flash('flash_message', 'Content Area Updated');
        return redirect('contentAreas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $contentArea = ContentArea::findOrFail($id);

        $contentArea->delete();
        \Session::flash('flash_message', 'Content Area Deleted');
        return redirect()->route('contentAreas.index');
	}

}
