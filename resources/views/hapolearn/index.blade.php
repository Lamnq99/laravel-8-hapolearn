@extends('layouts.app')

@section('content')

<header class="header container-fluid p-0">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img src="images/hapo_learn.png" class="d-inline-block align-top img-logo" alt="logo-hapo-learn">
            </a>
        </div>
        <div class="btn-navbar">
            <button class="navbar-toggler btn-menu-header" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <img src="images/close_header.png" class="img-close-header .hidden-icon" alt="close">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-secondary active btn-header" href="#">Home<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn-header" href="#">All Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn-header" href="#" data-toggle="modal"
                            data-target="#myModal">Login/Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn-header" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="banner container-fluid p-0">
    <div class="bg-banner"></div>
    <div class="banner-contents">
        <p class="learn-any">Learn anytime, Anywhere</p>
        <p class="at-hapo">at HapoLearn<img class="img-owl" src="images/cucu.png" alt="owl">!</p>
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
                    <img src="images/html.png" alt="HTML" class="img-html">
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
                    <img src="images/laravel.png" alt="LARAVEL" class="img-laravel">
                </div>
                <div class="card-body">
                    <h4 class="card-title">LARAVEL Tutorial</h4>
                    <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I
                        had coded quite a bit, but never touched anything in regards to web development.
                    </p>
                    <a href="#" class="btn btn-take-course">Take This Course</a>
                </div>
                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
                    crossorigin="anonymous" />
            </div>
        </div>
        <div class="col-sm-4 col-courses">
            <div class="card">
                <div class="bg-php">
                    <img src="images/php.png" alt="PHP" class="img-php">
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
                    <img src="images/css.png" alt="CSS" class="img-css">
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
                    <img src="images/rails.png" alt="RUBY" class="img-ruby">
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
                    <img src="images/java.png" alt="Java" class="img-java">
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
            <img src="images/laptop-mobile.png" alt="img">
        </div>
    </div>
</section>

<section class="container-fluid feedback">
    <div class="row row-feedback-title">
        <p class="feedback-title">Feedback</p>
    </div>
    <div class="row row-feedback-sub">
        <p class="feedback-sub">What other students turned professionals have to say about us<br>after learning with
            us
            and reaching their goals
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
                                conveys all essentials of a
                                becoming a good Angular developer. Very glad to have taken this course. Thank you
                                Eddie Bryan.”
                            </p>
                            <img src="images/icon-down.png" class="img-down" alt="img">
                        </div>
                    </div>
                    <div class="col-feedback col-feedback-right">
                        <div class="row feedback-content-con">
                            <p class="feedback-content">“A wonderful course on how to start. Eddie beautifully
                                conveys all essentials of a
                                becoming a good Angular developer. Very glad to have taken this course. Thank you
                                Eddie Bryan.”
                            </p>
                            <img src="images/icon-down.png" class="img-down" alt="img">
                        </div>
                    </div>
                    <a class="fas fa-chevron-circle-right fa-2x icon-feedback" href="#demo" role="button"
                        data-slide="prev"></a>
                </div>
                <div class="row row-user">
                    <div class="col-6 row user-feedback  col-feedback-left">
                        <div class="col-ava-user">
                            <img src="images/ava_feedback.png" class="ava-feedback" alt="ava-feedback">
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
                            <img src="images/ava_feedback.png" class="ava-feedback" alt="ava-feedback">
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
                            <img src="images/icon-down.png" class="img-down" alt="img">
                        </div>
                    </div>
                    <div class="col-feedback col-feedback-right">
                        <div class="row feedback-content-con">
                            <p class="feedback-content">“A wonderful course on how to start. Eddie beautifully
                                conveys all essentials of a
                                becoming a good Angular developer. Very glad to have taken this course. Thank you
                                Eddie Bryan.”
                            </p>
                            <img src="images/icon-down.png" class="img-down" alt="img">
                        </div>
                    </div>
                    <a class="fas fa-chevron-circle-right fa-2x icon-feedback" href="#demo" role="button"
                        data-slide="prev"></a>
                </div>
                <div class="row row-user">
                    <div class="col-6 row user-feedback  col-feedback-left">
                        <div class="col-ava-user">
                            <img src="images/ava_feedback.png" class="ava-feedback" alt="ava-feedback">
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
                            <img src="images/ava_feedback.png" class="ava-feedback" alt="ava-feedback">
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

<footer class="container-fluid">
    <div class="content">
        <div class="logo">
            <img class="logo-footer" src="images/hapo_learn_white.png" alt="logo HapoLearn">
            <p class="logo-sub">Interactive lessons, "on-the-go"<br>practice, peer support.</p>
        </div>
        <div class="title-footer">
            <table class="table">
                <tr>
                    <td class="td-left">Home</td>
                    <td>Contact</td>
                </tr>
                <tr>
                    <td class="td-left">Features</td>
                    <td>Terms of Use</td>
                </tr>
                <tr>
                    <td class="td-left">Courses</td>
                    <td>FAQ</td>
                </tr>
                <tr>
                    <td class="td-left">Blog</td>
                </tr>
            </table>
        </div>
        <div class="social-footer">
            <a href="#" onclick="return false" data-toggle="popover" data-trigger="hover" data-placement="bottom"
                data-content="facebook.com/tuyen.dung.haposoft">
                <img class="img-icon" src="images/fb_icon.png" alt="icon-face">
            </a>
            <a href="#" onclick="return false" data-toggle="popover" data-trigger="hover" data-placement="bottom"
                data-content="+84-85-645-9898">
                <img class="img-icon" src="images/phone_icon.png" alt="phone_icon">
            </a>
            <a href="#" onclick="return false" data-toggle="popover" data-trigger="hover" data-placement="bottom"
                data-content="info@haposoft.com">
                <img class="img-icon" src="images/email_icon.png" alt="email_icon">
            </a>
        </div>
    </div>
    <div class="row copyrighted">
        <p class="copyrighted-content">© 2020 HapoLearn, Inc. All rights reserved.</p>
    </div>
</footer>

<img src="images/messenger.png" alt="messenger" class="messenger" id="messenger">
<div class="messenger-box" id="messenger-box">
    <img src="images/close_icon.png" alt="icon" class="icon-close">
    <p class="txt-name">HapoLearn</p>
    <div class="main-chat">
        <img src="images/ava-powl.png" alt="owl" class="ava-owl">
        <p class="txt-chat">HapoLearn xin chào bạn.<br>Bạn có cần chúng tôi hỗ trợ gì không?</p>
    </div>
    <p class="txt-login">
        <i class="fab fa-facebook-messenger fa-lg"></i>
        Đăng nhập bằng messenger
    </p>

    <p class="chat-with-hapo">Chat với HapoLearn trong Messenger</p>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs tabs-login-register" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#register">register</a>
                    </li>
                </ul>
                <img src="images/close-login.png" class="btn-close" alt="close" data-dismiss="modal" aria-label="Close">
            </div>
            <div class="tab-content">
                <div id="login" class="container tab-pane active">
                    {{--  --}}

                    <form class="form-login" action="" method="post" onsubmit="return false">
                        <label class="label-username">Username:</label>
                        <input class="txt-username" type="text"><br><br>
                        <label class="label-password">Password:</label>
                        <input class="txt-password" type="text">
                        <div class="option-login">
                            <div class="form-check box-remember">
                                <input class="form-check-input remember-me-checkbox" type="checkbox" value="true"
                                    id="remember-me">
                                <label class="form-check-label" for="remember-me">Remember me
                            </div>
                            <a href="#" onclick="return false" class="forgot-pass">Forgot password</a>
                        </div>
                        <div>
                            <input type="submit" name="submit" value="login"  class="btn-login">
                        </div>
                    </form>

                    {{--  --}}
                    <div class="login-with">
                        <p>Login with</p>
                    </div>
                    <p class="with-gg"><i class="fab fa-google-plus-g fa-lg icon-gg"></i>Google</p>
                    <p class="with-face"><i class="fab fa-facebook-f fa-lg icon-face"></i></i>Facebook</p>
                </div>
                <div id="register" class="container tab-pane">
                    <form class="form-register" action="" method="post" onsubmit="return false">
                        <label class="label-username">Username:</label>
                        <input class="txt-username" type="text"><br><br>
                        <label class="label-email">Email:</label>
                        <input class="txt-email" type="text"><br><br>
                        <label class="label-password">Password:</label>
                        <input class="txt-password" type="text"><br><br>
                        <label class="label-repassword">Repeat Password:</label>
                        <input class="txt-repassword" type="text">
                        <div>
                            <input type="submit" name="submit" value="register" class="btn-register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
