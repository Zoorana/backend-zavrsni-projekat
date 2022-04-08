<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// zamisljeno je da u tabeli students budu i kandidati i polaznici koje admin unosi
// polaznike bismo odvojili boolean-om admission_assignment koji bi oznacavao da li je kandidat polozio prijemni, tj. da li je postao polaznik

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'faculty',
        'year_of_study',
        'department',
        'CV',
        'comment'
    ];

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_student');
    }

    public function lectures(){
        return $this->belongsToMany(Lecture::class, 'lecture_student');
    }

    public function assignmentStudents(){
        return $this->hasMany(AssignmentStudent::class);
    }

    //   ukupan broj svih prijavljenih kandidata
    public function getStudentCountAttribute()
    {
        return Student::query()->count();
    }

    //   ukupan broj zaposlenih polaznika sa svih obuka
    public function getHiredStudentsAttribute()
    {
        return Student::query()->where("hired", '=', true)->count();
    }
}
