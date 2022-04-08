<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    public function attachFiles(){
       return $this->hasMany(AttachFile::class);
    }
    public function lectures(){
        return $this->hasMany(Lecture::class);
    }

    public function assignmentStudents(){
        return $this->hasMany(AssignmentStudent::class);
    }
}
