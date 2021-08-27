<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Feedback;
use App\Models\Lesson;
use App\Models\UserCourse;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function search(Request $request, $id)
    {
        $course = Course::find($id);
        $tags = Course::tagsCourse($id)->get();
        $otherCourses = Course::showOtherCourses($course->id)->get();
        $mentors = Course::mentorOfCourse($id)->get();
        $lessons = Lesson::search($request->all())->paginate(config('constants.pagination_lessons'));
        $isJoined = UserCourse::joined($id)->first() ? true : false;
        $reviews  = Feedback::feedbacksOfCourse($course->id)->get();
        $totalRate  = Feedback::feedbacksOfCourse($course->id)->sum('rate');
        $avgRating = round($totalRate / $reviews->count());

        $keyword = $request->has('key_detail_course') ? request()->get('key_detail_course') : null;

        return view('courses.course_detail', compact('course', 'lessons', 'tags', 'otherCourses', 'mentors', 'keyword', 'isJoined', 'reviews', 'totalRate', 'avgRating'));
    }
}
