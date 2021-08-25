<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

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
}
