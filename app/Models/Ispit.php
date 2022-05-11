<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ispit extends Model
{
    use HasFactory;
    protected $guarded=[''];
    public function prijava(){
        return $this->hasMany(Prijava::class);
    }
}
