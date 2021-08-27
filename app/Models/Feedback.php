<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "feedbacks";

    protected $fillable = [
        'user_id',
        'course_id',
        'lesson_id',
        'content',
        'rate'
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function scopeFeedbacksOfCourse($query, $courseId)
    {
        $query->leftJoin('users', 'feedbacks.user_id', 'users.id')
        ->where('course_id', '=', $courseId);
    }

    public function lessons()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
