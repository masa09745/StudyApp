<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content'
    ];

    use HasFactory;

    public function Subject()
    {
       return $this->belongsTo(Subject::class);
    }
}
