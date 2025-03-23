<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['title', 'address', 'description', 'phone', 'geolocation'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
}
