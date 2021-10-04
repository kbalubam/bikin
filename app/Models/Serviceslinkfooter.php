<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceslinkfooter extends Model
{
    use HasFactory;
    protected $table = "serviceslinkfooters";
    protected $fillable = ["name","link"];

    
}
