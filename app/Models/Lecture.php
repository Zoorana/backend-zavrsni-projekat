<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function assignment(){
        return $this->belongsTo(Assignment::class);
    }

    public function lectureAttachments(){
        return $this->hasMany(LectureAttachment::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class, 'lecture_student');
    }
}
