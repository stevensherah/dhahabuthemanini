<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\carbon; 

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($month = $filters['month']){
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }

    public function tags()
    {
        
        return $this->belongsToMany(Tag::class);

    }

}
 