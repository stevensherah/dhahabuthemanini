<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'body', 'cover_image', 'user_id'];

    public static function products()
    {
        return static::selectRaw('title');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function event()
    {
        return $this->belongsToMany('App\event');
    }
    public function gallery()
    {
        return $this->belongsToMany('App\gallery');
    }
    public function testimonial()
    {
        return $this->belongsToMany('App\testimonial');
    }
    public function new()
    {
        return $this->belongsToMany('App\new');
    }
    
}