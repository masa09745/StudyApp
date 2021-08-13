<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text',
        'choice1',
        'choice2',
        'choice3',
        'choice4',
        'explanation',
        'subject_id'
    ];

    use HasFactory;

    public function Subject()
    {
       return $this->belongsTo(Subject::class);
    }
}
