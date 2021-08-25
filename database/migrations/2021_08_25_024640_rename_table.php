<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('user_courses', 'course_user');
        Schema::rename('tag_courses', 'course_tag');
        Schema::rename('user_lessons', 'lesson_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('course_user', 'user_courses');
        Schema::rename('course_tag', 'tag_courses');
    }
}
