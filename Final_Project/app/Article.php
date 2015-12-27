<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class article extends Model {

    protected $fillable = [

        'title',
        'description',
        'html',
        'page',
        'area',
        'created_on',
        'creation_date',
        'modified_by',
        'created_by',
        'modified_at',
        'user_id' //temp
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


    //article is owned to user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
