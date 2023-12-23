<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['departure_date', 'arrival_date', 'price'];

     // Relationships
     public function seat__allocations(){
         return $this->hasMany(Seat_Allocation::class);
     }
}
