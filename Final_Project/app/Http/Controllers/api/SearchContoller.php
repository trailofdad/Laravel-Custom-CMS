<?php namespace App\Http\Controllers;

use App\article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class ApiSearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // Retrieve the user's input and escape it
        $query = e(Input::get('q',''));

        // If the input is empty, return an error response
        if(!$query && $query == '') return Response::json(array(), 400);

        $article = Article::where('published', true)
            ->where('title','like','%'.$query.'%')
            ->orderBy('title','asc')
            ->take(5)
            ->get(array('id','title'))->toArray();


        // Normalize data
        $article  = $this->appendURL($article, 'article');

        // Add type of data to each item of each set of results
        // Merge all data into one array
        $data = array_merge($article);
        return Response::json(array(
            'data'=>$data
        ));


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    private function appendURL($data, $prefix)
    {
        foreach ($data as $key => & $item) {
            $item['url'] = url($prefix.'/'.$item['slug']);
        }
        return $data;
    }


}
