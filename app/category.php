<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function post()
    {
        return $this->hasMany(post::class);
    }
}
