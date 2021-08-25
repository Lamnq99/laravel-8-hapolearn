<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagCourse extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "course_tag";

    protected $fillable = [
        'course_id',
        'tag_id'
    ];
}
