<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Icon;
class Linksocial extends Model
{
    use HasFactory;
    protected $table= "linksocials";
    protected $fillable= ["name","link"];


    public function icon(){
       
        return $this->hasOne(Icon::class);
    }
}
