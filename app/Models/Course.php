<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'img_path',
        'learners',
        'times',
        'quizzes',
        'tag',
        'price',
        'description'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id');
    }

    public function getNumberLessonAttribute()
    {
        return $this->lessons()->count();
    }

    public function scopeInforLessons($query, $id)
    {
        $query->join('lessons', 'courses.id', '=', 'lessons.course_id')
<<<<<<< HEAD
            ->select('lessons.*')
            ->where('lessons.course_id', '=', $id);
=======
        ->select('lessons.*')
        ->where('lessons.course_id', '=', $id);
>>>>>>> forgot-password
    }

    public function getCourseTimeAttribute()
    {
        $totalTimeCourse = $this->lessons()->sum('time');
        $hour = round($totalTimeCourse / config('constants.hour'));

        return $hour;
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')->withTimestamps();
    }

    public function getNumberUserStudentAttribute()
    {
        return $this->users()->where('role', User::ROLE['student'])->count();
    }

    public function scopeMentorOfCourse($query, $id)
    {
        $query->leftJoin('course_user', 'courses.id', 'course_user.course_id')
            ->leftJoin('users', 'course_user.user_id', 'users.id')
            ->where('users.role', User::ROLE['mentor'])
            ->where('course_user.course_id', $id);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'course_tag', 'course_id', 'tag_id');
    }

    public function scopeTagsCourse($query, $id)
    {
        $query->leftJoin('course_tag', 'courses.id', 'course_tag.course_id')
            ->leftJoin('tags', 'course_tag.tag_id', 'tags.id')
            ->where('course_tag.course_id', $id);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'course_id');
    }

    public function getOneStarAttribute()
    {
        return $this->feedback()->where('rate', '=', 1)->count();
    }

    public function getTwoStarAttribute()
    {
        return $this->feedback()->where('rate', '=', 2)->count();
    }

    public function getThreeStarAttribute()
    {
        return $this->feedback()->where('rate', '=', 3)->count();
    }

    public function getFourStarAttribute()
    {
        return $this->feedback()->where('rate', '=', 4)->count();
    }

    public function getFiveStarAttribute()
    {
        return $this->feedback()->where('rate', '=', 5)->count();
    }

    public function scopeFilter($query, $data)
    {
        if (isset($data['key'])) {
            $query->where('title', 'like', '%' . $data['key'] . '%')
                ->orWhere('description', 'like', '%' . $data['key'] . '%');
        }

        if (isset($data['sort'])) {
            if ($data['sort'] == config('constants.options.newest')) {
                $query->orderByDesc('id');
            } else {
                $query->orderBy('id');
            }
        }

        if (isset($data['mentor'])) {
            $query->whereHas('users', function ($subquery) use ($data) {
                $subquery->where('user_id', $data['mentor']);
            });
        }

        if (isset($data['learner'])) {
            if ($data['learner'] == config('constants.options.ascending')) {
                $query->withCount([
                    'users' => function ($subquery) {
                        $subquery->where('role', User::ROLE['student']);
                    }
                ])->orderBy('users_count');
            } elseif ($data['learner'] == config('constants.options.decrease')) {
                $query->withCount([
                    'users' => function ($subquery) {
                        $subquery->where('role', User::ROLE['student']);
                    }
                ])->orderByDesc('users_count');
            }
        }

        if (isset($data['times'])) {
            if ($data['times'] == config('constants.options.ascending')) {
                $query->addSelect(['time' => Lesson::selectRaw('sum(time) as total')
                    ->whereColumn('course_id', 'courses.id')])
                    ->orderBy('time');
            } elseif ($data['times'] == config('constants.options.decrease')) {
                $query->addSelect(['time' => Lesson::selectRaw('sum(time) as total')
                    ->whereColumn('course_id', 'courses.id')])
                    ->orderByDesc('time');
            }
        }

        if (isset($data['lessons'])) {
            if ($data['lessons'] == config('constants.options.ascending')) {
                $query->withCount(['lessons'])->orderBy('lessons_count')->get();
            } elseif ($data['lessons'] == config('constants.options.decrease')) {
                $query->withCount(['lessons'])->orderByDesc('lessons_count')->get();
            }
        }

        if (isset($data['tags'])) {
            $query->whereHas('tags', function ($subquery) use ($data) {
                $subquery->where('tag_id', $data['tags']);
            });
        }

        if (isset($data['review'])) {
            if ($data['review'] == config('constants.options.ascending')) {
                $query->addSelect(['rating' => Feedback::selectRaw('avg(rate) as total')
                    ->whereColumn('course_id', 'courses.id')])
                    ->orderBy('rating');
            } elseif ($data['review'] == config('constants.options.decrease')) {
                $query->addSelect(['rating' => Feedback::selectRaw('avg(rate) as total')
                    ->whereColumn('course_id', 'courses.id')])
                    ->orderByDesc('rating');
            }
        }
    }

    public function scopeShowOtherCourses($query, $courseId)
    {
<<<<<<< HEAD
        $query->where('id', '<>', $courseId)->limit(5);
=======
            $query->where('id', '<>', $courseId)->limit(5);
>>>>>>> forgot-password
    }
}
