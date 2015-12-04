<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model {

    protected $fillable = [

        'name',
        'description',
        'active_state',
        'content',
        'created_by',
        'creation_date',
        'modified_by',
        'modified_date'
    ];


}
