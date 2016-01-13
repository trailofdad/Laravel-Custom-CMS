<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class contentArea extends Model {

    protected $table = 'content_areas';

    protected $fillable = [

        'name',
        'alias',
        'description',
        'orderBy',
        'created_by',
        'modified_by',
        'display_order'
    ];

}
