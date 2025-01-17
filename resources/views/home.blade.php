@extends('layouts.app')

@section('content')
<section class="banner container-fluid p-0">
    <div class="bg-banner"></div>
    <div class="banner-contents">
        <p class="learn-any">Learn anytime, Anywhere</p>
        <p class="at-hapo">at HapoLearn<img class="img-owl" src="{{ asset('images/cucu.png') }}" alt="owl">!</p>
        <p class="method-study">Interactive lessons, "on-the-go"<br>practice, peer support. </p>
        <a href="#" class="btn-start-learning">
            <span class="txt-start-learning">Start Learning Now !</span>
        </a>
    </div>
</section>

<div class="background-grey container-fluid"></div>
<section class="courses container">
    <div class="row row-courses">
        <div class="col-sm-4 col-courses">
            <div class="card">
                <div class="bg-html">
                    <img src="{{ asset('images/html.png') }}" alt="HTML" class="img-html">
                </div>
                <div class="card-body">
                    <h4 class="card-title">HTML/CSS/js Tutorial</h4>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                        had coded quite a bit, but never touched anything in regards to web development.
                    </p>
                    <a href="#" class="btn btn-take-course">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-courses">
            <div class="card">
                <div class="bg-laravel">
                    <img src="{{ asset('images/laravel.png') }}" alt="LARAVEL" class="img-laravel">
                </div>
                <div class="card-body">
                    <h4 class="card-title">LARAVEL Tutorial</h4>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                        had coded quite a bit, but never touched anything in regards to web development.
                    </p>
                    <a href="#" class="btn btn-take-course">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-courses">
            <div class="card">
                <div class="bg-php">
                    <img src="{{ asset('images/php.png') }}" alt="PHP" class="img-php">
                </div>
                <div class="card-body">
                    <h4 class="card-title">PHP Tutorial</h4>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                        had coded quite a bit, but never touched anything in regards to web development.
                    </p>
                    <a href="#" class="btn btn-take-course">Take This Course</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="other-courses container">
    <div class="col-sm-12 container-title">
        <h1 class="txt-container-title">Other courses</h1>
    </div>
    <div class="row row-other-courses">
        <div class="col-sm-4 col-courses">
            <div class="card">
                <div class="bg-css">
                    <img src="{{ asset('images/css.png') }}" alt="CSS" class="img-css">
                </div>
                <div class="card-body">
                    <h4 class="card-title">CSS Tutorial</h4>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                        had coded quite a bit, but never touched...</p>
                    <a href="#" class="btn btn-take-course">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-courses">
            <div class="card">
                <div class="bg-ruby">
                    <img src="{{ asset('images/rails.png') }}" alt="RUBY" class="img-ruby">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Ruby on rails Tutorial</h4>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                        had coded quite a bit, but never touched...</p>
                    <a href="#" class="btn btn-take-course">Take This Course</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-courses">
            <div class="card">
                <div class="bg-java">
                    <img src="{{ asset('images/java.png') }}" alt="Java" class="img-java">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Java Tutorial</h4>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                        had coded quite a bit, but never touched...</p>
                    <a href="#" class="btn btn-take-course">Take This Course</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 all-courses">
        <a href="#" class="btn-all-courses">View All Our Courses
            <i class="fas fa-arrow-right fa-sm arrow-icon"></i>
        </a>
    </div>
</section>

<section class="container-fluid why-hapo">
    <div class="img-laptop"></div>
    <div class="row-why-hapo">
        <div class="col-why-hapo col-left">
            <p class="txt-why-hapo">Why HapoLearn?</p>
            <p class="txt-content">
                <span><i class="fas fa-check-circle"></i></span>
                Interactive lessons, "on-the-go" practice, peer support.
            </p>
            <p class="txt-content">
                <span><i class="fas fa-check-circle"></i></span>
                Interactive lessons, "on-the-go" practice, peer support.
            </p>
            <p class="txt-content">
                <span><i class="fas fa-check-circle"></i></span>
                Interactive lessons, "on-the-go" practice, peer support.
            </p>
            <p class="txt-content">
                <span><i class="fas fa-check-circle"></i></span>
                Interactive lessons, "on-the-go" practice, peer support.
            </p>
            <p class="txt-content">
                <span><i class="fas fa-check-circle"></i></span>
                Interactive lessons, "on-the-go" practice, peer support.
            </p>
        </div>
        <div class="col-why-hapo col-right">
            <img src="{{ asset('images/laptop-mobile.png') }}" alt="img">
        </div>
    </div>
</section>

<section class="container-fluid feedback">
    <div class="row row-feedback-title">
        <p class="feedback-title">Feedback</p>
    </div>
    <div class="row row-feedback-sub">
        <p class="feedback-sub">What other students turned professionals have to say about us
            <br>after learning with us and reaching their goals
        </p>
    </div>
    <div id="demo" class="carousel slide slide-feedback-con" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row row-feedback">
                    <a class="fas fa-chevron-circle-left fa-2x icon-feedback" href="#demo" role="button"
                        data-slide="next"></a>
                    <div class="col-feedback col-feedback-left">
                        <div class="feedback-content-con">
                            <p class="feedback-content">“A wonderful course on how to start. Eddie beautifully
                                conveys all essentials of a becoming a good Angular developer.
                                Very glad to have taken this course. Thank you Eddie Bryan.”
                            </p>
                            <img src="{{ asset('images/icon-down.png') }}" class="img-down" alt="img">
                        </div>
                    </div>
                    <div class="col-feedback col-feedback-right">
                        <div class="row feedback-content-con">
                            <p class="feedback-content">“A wonderful course on how to start. Eddie beautifully
                                conveys all essentials of a becoming a good Angular developer.
                                Very glad to have taken this course. Thank you Eddie Bryan.”
                            </p>
                            <img src="{{ asset('images/icon-down.png') }}" class="img-down" alt="img">
                        </div>
                    </div>
                    <a class="fas fa-chevron-circle-right fa-2x icon-feedback" href="#demo" role="button"
                        data-slide="prev"></a>
                </div>
                <div class="row row-user">
                    <div class="col-6 row user-feedback  col-feedback-left">
                        <div class="col-ava-user">
                            <img src="{{ asset('images/ava_feedback.png') }}" class="ava-feedback" alt="ava-feedback">
                        </div>
                        <div class="col-info-user">
                            <p class="user-name-feedback">Hoang Anh Nguyen</p>
                            <p class="course-name-feedback">PHP</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <div class="col-6 row user-feedback">
                        <div class="col-ava-user">
                            <img src="{{ asset('images/ava_feedback.png') }}" class="ava-feedback" alt="ava-feedback">
                        </div>
                        <div class="col-info-user">
                            <p class="user-name-feedback">Hoang Anh Nguyen</p>
                            <p class="course-name-feedback">Python</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row row-feedback">
                    <a class="fas fa-chevron-circle-left fa-2x icon-feedback" href="#demo" role="button"
                        data-slide="next"></a>
                    <div class="col-feedback col-feedback-left">
                        <div class="feedback-content-con">
                            <p class="feedback-content">“A wonderful course on how to start. Eddie beautifully
                                conveys all essentials of a
                                becoming a good Angular developer. Very glad to have taken this course. Thank you
                                Eddie Bryan.”
                            </p>
                            <img src="{{ asset('images/icon-down.png') }}" class="img-down" alt="img">
                        </div>
                    </div>
                    <div class="col-feedback col-feedback-right">
                        <div class="row feedback-content-con">
                            <p class="feedback-content">“A wonderful course on how to start. Eddie beautifully
                                conveys all essentials of a
                                becoming a good Angular developer. Very glad to have taken this course. Thank you
                                Eddie Bryan.”
                            </p>
                            <img src="{{ asset('images/icon-down.png') }}" class="img-down" alt="img">
                        </div>
                    </div>
                    <a class="fas fa-chevron-circle-right fa-2x icon-feedback" href="#demo" role="button"
                        data-slide="prev"></a>
                </div>
                <div class="row row-user">
                    <div class="col-6 row user-feedback  col-feedback-left">
                        <div class="col-ava-user">
                            <img src="{{ asset('images/ava_feedback.png') }}" class="ava-feedback" alt="ava-feedback">
                        </div>
                        <div class="col-info-user">
                            <p class="user-name-feedback">Hoang Anh Nguyen</p>
                            <p class="course-name-feedback">PHP</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    </div>
                    <div class="col-6 row user-feedback">
                        <div class="col-ava-user">
                            <img src="{{ asset('images/ava_feedback.png') }}" class="ava-feedback" alt="ava-feedback">
                        </div>
                        <div class="col-info-user">
                            <p class="user-name-feedback">Hoang Anh Nguyen</p>
                            <p class="course-name-feedback">Python</p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid become-member">
    <div class="become-member-main">
        <p class="become-member-content">Become a member of our<br>growing community!</p>
    </div>
    <div class="btn-mem">
        <a href="#" class="btn-start-learning">Start Learning Now!</a>
    </div>
</section>

<section class="statistic container-fluid">
    <div class="row row-statistic-title">
        <p class="statistic-title">Statistic</p>
    </div>
    <div class="row row row-statistic-index">
        <div class="col-sm-4 col-statistic-index">
            <p class="statistic-courses">Courses</p>
            <p class="statistic-index">1,586</p>
        </div>
        <div class="col-sm-4 col-statistic-index">
            <p class="statistic-courses">Lessons</p>
            <p class="statistic-index">2,689</p>
        </div>
        <div class="col-sm-4 col-statistic-index">
            <p class="statistic-courses">Learners</p>
            <p class="statistic-index">16,882</p>
        </div>
    </div>
</section>

@endsection
