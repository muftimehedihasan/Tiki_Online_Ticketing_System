<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    // Relationships
    public function Seat_Allocation(){
        return $this->hasMany(Seat_Allocation::class);
    }

}
