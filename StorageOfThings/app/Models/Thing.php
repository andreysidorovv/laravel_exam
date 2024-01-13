<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = ['name', 'description', 'wrnt', 'master'];
    
    public function places()
    {
        return $this->belongsToMany(Place::class, 'uses', 'thing_id', 'place_id')->withPivot('user_id', 'amount');
    }
}