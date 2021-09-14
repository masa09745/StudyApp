<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text',
        'answer',
        'explanation',
        'subject_id'
    ];

    use HasFactory;

    public function Subject()
    {
       return $this->belongsTo(Subject::class);
    }

    public function Choices()
    {
        return $this->hasMany(Choice::class);
    }
}
