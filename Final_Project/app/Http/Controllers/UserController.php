<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
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
	public function store(UserRequest $request)
	{
//        User::create(Request::all());
//        return redirect('users');
        $request['password'] = bcrypt($request->input('password'));
        User::create($request->all());
//        $user->FirstName = $request->input('FirstName');
//        $user->LastName = $request->input('LastName');
//        $user->email = $request->input('email');
//
//        $user->password = $password;
//        $user->save();

        if ($request->input('permission_ids') != null) {
            User::all()->last()->permission()->attach($request->input('permission_ids'));
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
        $permissionsArray = Permission::lists('permission_id');
        $user = User::findOrFail($id);
//        $permissions = Permission::oldest()->lists('name','id');
        return view('users.edit', compact('user', 'permissionsArray'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserRequest $request)
	{
        $request['password'] = bcrypt($request->input('password'));
        $request->update(Request::all());
        return view('users.index');
	}

	/**
	 * Remove the specified resource from storage
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
