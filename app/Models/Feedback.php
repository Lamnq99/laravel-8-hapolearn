<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'lesson_id',
        'content',
        'rate'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_id', 'feedback_id');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_id', 'feedback_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id', 'feedback_id');
    }
}
