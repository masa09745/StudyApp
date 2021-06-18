<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'file_path'
    ];

    public function Subject()
    {
        $this->belongsTo(Subject::class);
    }
    use HasFactory;
}
