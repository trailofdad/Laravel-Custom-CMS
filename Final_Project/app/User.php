<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'FirstName',
        'LastName',
        'email',
        'password',
        'created_by',
        'modified_by',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function articles()
    {
        return $this->hasMany('App\Article', 'created_by', 'modified_by');

    }

    public function pages()
    {
        return $this->hasMany('App\Page', 'created_by', 'modified_by');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'created_by', 'modified_by');
    }

    public function templates()
    {
        return $this->hasMany('App\CSS_Template', 'created_by', 'modified_by');
    }

    public function areas()
    {
        return $this->hasMany('App\Content_Area', 'created_by', 'modified_by');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    public function isAdministration() {
        $permissions=$this->permissions()->get();
        foreach ($permissions as $permission){
            if ($permission -> permission_description == "Administrator" ){
                return true;
            }

        }
        return false;
    }


    public function isEditor() {
        $permissions=$this->permissions()->get();
        foreach ($permissions as $permission){
            if ($permission -> permission_description == "Editor"){
                return true;
            }

        }
        return false;

    }
    public function isWriter() {
        $permissions=$this->permissions()->get();
        foreach ($permissions as $permission){
            if ($permission -> permission_description == "Writer"){
                return true;
            }

        }
        return false;

    }
}
