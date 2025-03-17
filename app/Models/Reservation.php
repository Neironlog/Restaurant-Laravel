<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

}
