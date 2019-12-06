<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    public function post()
    {
        return $this->hasMany(post::class);
    }
}
