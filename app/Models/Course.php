<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'planning',
        'category_id',
        'subcategory_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class, 'course_student');
    }

    //    zavrsene obuke
    public function getFinishedCourseCountAttribute()
    {
        return Course::query()
            ->whereDate("end_date", '<', now() )->count();
    }

    //    aktivne obuke
    public function getActiveCourseCountAttribute()
    {
        return Course::query()
            ->whereDate("end_date", '>', now())
            ->whereDate("start_date", '<', now())
            ->count();
    }




}
