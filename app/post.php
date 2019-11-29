<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class post extends Model
    {

        public function category()
        {
            return $this->belongsTo(category::class);
        }

        public function autor()
        {
            return $this->belongsTo(autor::class);
        }

    }
