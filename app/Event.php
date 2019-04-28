<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

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
    protected $fillable = ['title', 'subtitle', 'content', 'date', 'time', 'Venue', 'cover_image', 'user_id', 'programme'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function register()
    {
        return $this->belongsToMany('App\register');
    }
    
}
