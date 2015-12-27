<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

//    protected $fillable = [
//
//        'name'
//    ];

    public function User()
    {
        return $this->belongsToMany('App\User');
    }
}
