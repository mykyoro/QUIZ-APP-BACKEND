<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function title()
    {
        return $this->belongsTo('App\Title');
    }
}
