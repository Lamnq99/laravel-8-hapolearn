<header class="header container-fluid p-0">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/hapo_learn.png') }}" class="d-inline-block align-top img-logo"
                    alt="logo-hapo-learn">
            </a>
        </div>
        <div class="btn-navbar">
            <button class="navbar-toggler btn-menu-header" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <img src="{{ asset('images/close_header.png') }}" class="img-close-header .hidden-icon" alt="close">
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
                    @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn-header" href="#" data-toggle="modal"
                            data-target="#myModal">Login/Register</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn-header" href="#">Profile</a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn-header" href="/logout">Logout</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

@include('layouts.modal')
