<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Optional extends Model
{
    use HasFactory;

    protected $fillable = ["name","price","type"];

    public function cars() {
        return $this->belongsTo(Car::class);
    }
}

