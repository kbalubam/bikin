<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use App\Models\Linksocial;
class Icon extends Model
{
    use HasFactory;
    protected $table = 'icons';

    protected $fillable = ['name'];
    
    


    public function contact(){
        return $this->hasOne(Contact::class);

    }
    public function linksocial(){
        return $this->belongsTo(Linksocial::class);

    }
}
