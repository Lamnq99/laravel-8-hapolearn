<?php

namespace App\Http\Controllers;

use App\Models\Course;
<<<<<<< HEAD
use App\Models\Feedback;
=======
>>>>>>> forgot-password
use App\Models\Document;
use App\Models\Lesson;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id')->paginate(config('constants.pagination'));
        $mentors = User::mentor()->get();
        $tags = Tag::all();

        return view('courses.index', compact('courses', 'mentors', 'tags'));
    }

    public function search(Request $request)
    {
        if ($request->has('key')) {
            $keyword = $request->get('key');
        } else {
            $keyword = '';
        }

        $mentors = User::mentor()->get();
        $tags = Tag::all();
        $courses = Course::filter($request->all())->paginate(config('constants.pagination'));

        return view('courses.index', compact('courses', 'mentors', 'tags', 'keyword'));
    }

    public function detail($id)
    {
        $course = Course::find($id);
        $tags = Course::tagsCourse($id)->get();
        $otherCourses = Course::showOtherCourses($course->id)->get();
        $mentors = Course::mentorOfCourse($id)->get();
        $lessons = Course::inforLessons($id)->paginate(config('constants.pagination_lessons'));
        $isJoined = UserCourse::joined($id)->first() ? true : false;
<<<<<<< HEAD
        $reviews  = Feedback::feedbacksOfCourse($course->id)->get();
        $totalRate  = Feedback::feedbacksOfCourse($course->id)->sum('rate');
        $avgRating = $reviews->count() > 0 ? round($totalRate / $reviews->count()) : 0;
=======
>>>>>>> forgot-password
        $documentsLearned = Document::documentLearned($lessons->first()->id)->get();
        $totalDocuments = Lesson::documentsOfLesson($lessons->first()->id)->get();
        $learnedPart = $documentsLearned->count() / $totalDocuments->count();
        //dd($totalDocuments);

<<<<<<< HEAD
        return view('courses.course_detail', compact('course', 'lessons', 'tags', 'otherCourses', 'mentors', 'isJoined', 'learnedPart', 'totalDocuments', 'reviews', 'totalRate', 'avgRating'));
=======
        return view('courses.course_detail', compact('course', 'lessons', 'tags', 'otherCourses', 'mentors', 'isJoined', 'learnedPart', 'totalDocuments'));
>>>>>>> forgot-password
    }

    public function join($id)
    {
        $course = Course::find($id);
        $course->users()->attach(Auth::id());

        return redirect()->route('coursedetail', [$id]);
    }

    public function leave($id)
    {
        $course = Course::find($id);
<<<<<<< HEAD
        $course->users()->detach(Auth::user()->id);
=======
        $course->users()->detach(Auth::id());
>>>>>>> forgot-password

        return redirect()->route('allcourses');
    }
}
