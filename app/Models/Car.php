<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory;

    protected $fillable = ["marca", "modello","alimentazione","prezzo","num_porte","colore","anno","chilometri"];

    public function optionals() {
        return $this->belongsToMany(Optional::class);
    }

}
