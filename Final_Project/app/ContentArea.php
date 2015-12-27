<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class contentArea extends Model {

    protected $table = 'contentAreas';

    protected $fillable = [

        'name',
        'alias',
        'description',
        'created_by',
        'modified_by',
        'display_order'
    ];

}
