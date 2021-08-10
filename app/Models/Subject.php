<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'route'
    ];

    public function Exam()
    {
        return $this->belongsTo(Exam::class);
    }
    use HasFactory;
}
