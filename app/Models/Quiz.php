<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quizData'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_quiz', 'quiz_id', 'user_id');
    }
}
