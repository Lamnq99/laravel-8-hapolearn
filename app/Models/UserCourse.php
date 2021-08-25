<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCourse extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "course_user";

    protected $fillable = [
        'course_id',
        'user_id'
    ];
}
