<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['status', 'reservated_at'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
