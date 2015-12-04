<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class contentArea extends Model {

    protected $fillable = [

        'name',
        'alias',
        'description',
        'created_by',
        'display_order'
    ];

}
