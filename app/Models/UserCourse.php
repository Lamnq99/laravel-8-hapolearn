<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class UserCourse extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "course_user";

    protected $fillable = [
        'course_id',
        'user_id'
    ];

    public function scopeJoined($query, $id)
    {
        if (Auth::check()) {
            $query->where('user_id', '=', Auth::user()->id)
                ->where('course_id', '=', $id);
        }
    }
}
