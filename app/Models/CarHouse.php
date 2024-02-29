<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarHouse extends Model
{
    use HasFactory;

    protected $fillable =  ["name", "phone_number", "email", "sede"];
    public function cars() {
        return $this->hasMany(Car::class);
    }
}
