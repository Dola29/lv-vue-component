<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
	
    protected $fillable = [
        'description'
    ];

    public function getSinceAttribute()
    {
        return $this->created_at->diffForHumans();
    }

}
