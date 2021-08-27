<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview(Request $request, $id)
    {
        $review = new Feedback();
        $review['user_id'] = $request->userId;
        $review['course_id'] = $request->courseId;
        $review['lesson_id'] = $request->lessonId;
        $review['content'] = $request->review;
        $review['rate'] = $request->rate;
        $review->save();

        return redirect()->route('coursedetail', [$id]);
    }
}
