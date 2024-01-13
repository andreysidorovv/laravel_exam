<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['name', 'description', 'repair', 'work'];

    public function things()
    {
        return $this->belongsToMany(Thing::class, 'uses', 'place_id', 'thing_id')->withPivot('user_id', 'amount');
    }
}
