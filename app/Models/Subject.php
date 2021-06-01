<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
    ];

    public function Exams()
    {
        return $this->belongsToMany(Exam::class)->withTimestamps();
    }

    use HasFactory;
}
