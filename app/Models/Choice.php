<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'content',
        'question_id'

    ];

    use HasFactory;

    public function Question()
    {
        return $this->belongsTo(Question::class);
    }
}
