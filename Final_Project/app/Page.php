<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class page extends Model {


    protected $table = 'pages';

    protected $fillable = [

        'name',
        'alias',
        'description',
        'created_by',
        'creation_date',
        'modified_by',
        'modified_date'
    ];

    protected $dates = ['creation_date'];


    public function scopePublished($query) {
        $query->where('creation_date','<=', carbon::now());

    }

    public function scopeUnpublished($query) {
        $query->where('creation_date','>', carbon::now());

    }


    public function setPublishedAtAttribute($date){
        $this->attributes['creation_date'] = Carbon::parse($date);
    }

    public function getPublishedAtAttribute($date)
    {
        return new Carbon($date);
    }

}
