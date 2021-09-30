<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soustitrefooter extends Model
{
    use HasFactory;
    protected $table = "soustitrefooters";
    protected $fillable = ["intitule"];
}
