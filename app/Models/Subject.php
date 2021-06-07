<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
    ];

    public function Exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function Questions()
    {
        return $this->hasMany(Question::class);
    }

    use HasFactory;
}
