<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachFile extends Model
{
    use HasFactory;

    public function assignment(){
        return $this->belongsTo(Assignment::class);
    }
}
