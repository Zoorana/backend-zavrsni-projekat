<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subcategorys(){
        return $this->hasMany(Subcategory::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
