<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
