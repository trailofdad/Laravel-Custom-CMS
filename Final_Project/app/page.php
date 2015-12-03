<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model {

    protected $fillable = [

        'name',
        'alias',
        'description',
        'created_by',
        'creation_date',
        'modified_by',
        'modified_date'
    ];

}
