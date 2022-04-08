<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// materijali koji su vezani za predavanja
class LectureAttachment extends Model
{
    use HasFactory;

    protected $fillable = ["description", "lecture_id", "file_path"];
    protected $appends = ["download_file_path"];


    public function lecture(){
        return $this->belongsTo(Lecture::class);
    }

    public function getDownloadFilePathAttribute()
    {
        return Storage::url($this->file_path);
    }
}
