<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission_User extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permission_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'permission_id',
    ];

}