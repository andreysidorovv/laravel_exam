<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uses extends Model
{
    protected $fillable = ['thing_id', 'place_id', 'user_id', 'amount'];

    public function thing()
    {
        return $this->belongsTo(Thing::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
