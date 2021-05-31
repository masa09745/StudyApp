<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'subject',
    ];

    public function Exams()
    {
        return $this->belongsToMany('App\Models\Exam')->withTimestamps();
    }

    use HasFactory;
}
