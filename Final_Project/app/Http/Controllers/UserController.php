<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Permission;
use App\Permission_User;
use App\User;
use Illuminate\Support\Facades\Auth;
use Request;

class UserController extends Controller {


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
        $permissionsArray = Permission::lists('permission_description','permission_id');

        return view('users.create',compact('permissionsArray'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
//
        $request['created_by'] = Auth::id();
        $request['password'] = bcrypt($request->input('password'));
        User::create($request->all());
        $permissions = $request->get('permission_ids');
//        dd ($permissions);
        if ($permissions != null) {
            foreach ($permissions as $permission) {
                Permission_User::create(['user_id' => User::all()->last()->id, 'permission_id' => $permission]);
            }
        }
        \Session::flash('flash_message', 'User Created');
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

        $users->created_by = User::where('id', $users->created_by)->get()->first()->first_name;
        $users->modified_by = User::where('id', $users->modified_by)->get()->first()->first_name;
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
        $permissionsArray = Permission::lists('permission_description','permission_id');
        $user = User::findOrFail($id);
     //        $permissions = Permission::oldest()->lists('name','id');
        $activePermissions = Permission_User::where('user_id', $id)->lists('permission_id');

        return view('users.edit', compact('user', 'permissionsArray','activePermissions', 'style'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserRequest $request)
	{
        $request['modified_by'] = Auth::id();
        $request['password'] = bcrypt($request->input('password'));
        $permissions = $request->get('permission_ids');
        Permission_User::where('user_id', $id)->delete();
        if ($permissions != null) {
        foreach ($permissions as $permission) {
            Permission_User::create([
                'user_id' => $id,
                'permission_id' =>
 $permission,
            ]);}
        }
        $user = User::findOrFail($id);
        $user->update($request->all());
        \Session::flash('flash_message', 'User Modified');

        return redirect('users');
	}//there is a problem here that needs to be fixed, need to make sure permission is proper and then we can build logic and middle wear to
    //restrict access. show might be tosssed.

	/**
	 * Remove the specified resource from storage
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::findOrFail($id);

        $user->delete();
        \Session::flash('flash_message', 'User Deleted');

        return redirect ('users');
	}

}
