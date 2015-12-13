<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Permission;
use App\User;
use Request;

class UserController extends Controller {


    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = user::get()->all();
        return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $permissionsArray = Permission::lists('permission_id');

        return view('users.create',compact('permissionsArray'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
//        User::create(Request::all());
//        return redirect('users');

        $user = new App\User($request->all());
        $user->FirstName = $request->input('FirstName');
        $user->LastName = $request->input('LastName');
        $user->email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $user->password = $password;
        $user->save();

        if ($request->input('permission_ids') != null) {
            $user->permission()->attach($request->input('permission_ids'));
        }
        return redirect('users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $users = User::findOrFail($id);
        return view('users.show', compact('users'));
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

}
