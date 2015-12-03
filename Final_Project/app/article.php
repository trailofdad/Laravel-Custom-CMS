<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model {

    protected $fillable = [

        'title',
        'description',
        'html',
        'created_by',
        'creation_date',
        'modified_by',
        'modified_date'
    ];

}
