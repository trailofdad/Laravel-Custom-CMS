<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model {

    protected $table = 'Templates';

    protected $fillable = [

        'name',
        'description',
        'active',
        'css',
        'content',
        'created_by',
        'creation_date',
        'modified_by',
        'modified_date'
    ];


}
