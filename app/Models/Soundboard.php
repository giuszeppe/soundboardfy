<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soundboard extends Model
{
    use HasFactory;

    public function artist()
    {
        return $this->belongsTo(Artist::class);    
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'soundboards_users');    
    }
    public function user()
    {
        return $this->belongsTo(User::class);    
    }
}
