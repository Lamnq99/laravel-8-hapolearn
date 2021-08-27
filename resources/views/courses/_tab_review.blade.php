
<div class="container-fluid review-container">
    <div class="row total-review-container">
        <p class="total-review-txt">{{ $reviews->count() }} Reviews</p>
    </div>
    <hr>
    <div class="row show-star">
        <div class="col-lg-4 col-star-left">
            <div class="avg-txt text-center">
                <p>{{ $avgRating }}</p>
            </div>
            <div class="avg-star text-center star-show">
                @for ($i = 0; $i < $avgRating; $i++)
                    <i class="fas fa-star checked"></i>
                @endfor
                @for ($i = 0; $i < 5 - $avgRating; $i++)
                    <i class="fas fa-star"></i>
                @endfor
            </div>
            <div class="total-rating text-center">
                <p>{{ $reviews->count() }} rating</p>
            </div>
        </div>
        <div class="col-lg-8 col-star-right">
            <div class="rating-chart-container">
                <div class="row rating-chart justify-content-around">
                    <div class="col-lg-2 pr-0 text-center align-self-center number-start">5 star</div>
                    <div class="col-lg-9 p-0 text-center align-self-center">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: {{ $reviews->count() > 0 ? ($course->fiveStar / $reviews->count()) * 100 : 0 }}%"
                                aria-valuenow="{{ $reviews->count() > 0 ? ($course->fiveStar / $reviews->count()) * 100 : 0 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-1 pl-0 text-center align-self-center total-star-rating">{{ $course->fiveStar }}
                    </div>
                </div>
                <div class="row rating-chart justify-content-around">
                    <div class="col-lg-2 pr-0 text-center align-self-center number-start">4 star</div>
                    <div class="col-lg-9 p-0 text-center align-self-center">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: {{ $reviews->count() > 0 ? ($course->fourStar / $reviews->count()) * 100 : 0 }}%"
                                aria-valuenow="{{ $reviews->count() > 0 ? ($course->fourStar / $reviews->count()) * 100 : 0 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-1 pl-0 text-center align-self-center total-star-rating">{{ $course->fourStar }}
                    </div>
                </div>
                <div class="row rating-chart justify-content-around">
                    <div class="col-lg-2 pr-0 text-center align-self-center number-start">3 star</div>
                    <div class="col-lg-9 p-0 text-center align-self-center">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: {{ $reviews->count() > 0 ? ($course->threeStar / $reviews->count()) * 100 : 0 }}%"
                                aria-valuenow="{{ $reviews->count() > 0 ? ($course->threeStar / $reviews->count()) * 100 : 0 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-1 pl-0 text-center align-self-center total-star-rating">{{ $course->threeStar }}
                    </div>
                </div>
                <div class="row rating-chart justify-content-around">
                    <div class="col-lg-2 pr-0 text-center align-self-center number-start">2 star</div>
                    <div class="col-lg-9 p-0 text-center align-self-center">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: {{ $reviews->count() > 0 ? ($course->twoStar / $reviews->count()) * 100 : 0 }}%"
                                aria-valuenow="{{ $reviews->count() > 0 ? ($course->twoStar / $reviews->count()) * 100 : 0 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-1 pl-0 text-center align-self-center total-star-rating">{{ $course->twoStar }}
                    </div>
                </div>
                <div class="row rating-chart justify-content-around">
                    <div class="col-lg-2 pr-0 text-center align-self-center number-start">1 star</div>
                    <div class="col-lg-9 p-0 text-center align-self-center">
                        <div class="progress">
                            <div class="progress-bar bg-success index-chart" role="progressbar"
                                style="width: {{ $reviews->count() > 0 ? ($course->oneStar / $reviews->count()) * 100 : 0 }}%"
                                aria-valuenow="{{ $reviews->count() > 0 ? ($course->oneStar / $reviews->count()) * 100 : 0 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-1 pl-0 text-center align-self-center total-star-rating">{{ $course->oneStar }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row show-cmt-container">
        <div class="col-lg-12 show-all-reviews">
            <p>Show all reviews <i class="fas fa-sort-down"></i></p>
        </div>
        @foreach ($reviews as $review)
            <div class="col-lg-12 show-comment-user">
                <div class="row comment-header justify-content-start align-items-center">
                    <div class="ava-user-cmt text-center">
                        <img src="{{ asset('storage/avatar_user/' . $review->img_path) }}" alt="avatar user">
                    </div>
                    <div class="name-user-cmt text-center">
                        <p>{{ $review->name }}</p>
                    </div>
                    <div class="star-user-rating text-center">
                        @for ($i = 0; $i < $review->rate; $i++)
                            <i class="fas fa-star checked"></i>
                        @endfor
                        @for ($i = 0; $i < 5 - $review->rate; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <div class="time-user-cmt text-center">
                        <p>{{ $review->created_at }}</p>
                    </div>
                </div>
                <div class="row comment-body justify-content-start align-items-center">
                    <p>{{ $review->content }}</p>
                </div>
                {{-- reply --}}
                {{-- <div class="row reply-comment-container justify-content-end align-items-center">
                    <div class="col-lg-11">
                        <hr>
                        <div class="comment-header row reply-comment-main align-items-center">
                            <div class="ava-user-cmt text-center">
                                <img src="{{ asset('images/cucu.png') }}" alt="avatar user">
                            </div>
                            <div class="name-user-cmt text-center">
                                <p>Lam Ngo Que</p>
                            </div>
                            <div class="time-user-cmt text-center">
                                <p>August 4, 2020 at 1:30 pm</p>
                            </div>
                        </div>
                        <div class="row pl-0 comment-body reply-comment-body">
                            <p>
                                Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis
                                rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna
                            </p>
                        </div>
                    </div>
                </div>
                <hr> --}}
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12 leave-review-txt">
            <p>Leave a Review</p>
        </div>

        <div class="col-lg-12 input-review-container">
            <form action="/addreview/{{ $course->id }}" method="get" id="form-review">
                @csrf
                <label class="label-input-review" for="input-review-course">Message</label>
                <textarea name="review" id="input-review-course" class="form-control" rows="10"></textarea>
                <div class="row m-0">
                    <div class="align-self-center vote-txt">
                        <p>Vote</p>
                    </div>
                    <div class="align-self-center input-star-rating rate">
                        <input class="rate" type="radio" name="rate" id="star-five" value="5"><label
                            for="star-five">5
                            stars</label>
                        <input class="rate" type="radio" name="rate" id="star-four" value="4"><label
                            for="star-four">4
                            stars</label>
                        <input class="rate" type="radio" name="rate" id="star-three" value="3"><label
                            for="star-three">3
                            stars</label>
                        <input class="rate" type="radio" name="rate" id="star-two" value="2"><label
                            for="star-two">2
                            stars</label>
                        <input class="rate" type="radio" name="rate" id="star-one" value="1"><label
                            for="star-one">1
                            stars</label>
                    </div>
                    <div class="align-self-center">
                        <span class="err-review">Bạn cần điền đầy đủ trước khi gửi !</span>
                    </div>
                </div>
                <input type="hidden" name="courseId" id="course-id" value="{{ $course->id }}">
                <input type="hidden" name="lessonId" id="lesson-id" value="">
                <input type="hidden" name="userId" id="user-id" value="{{ Auth::id() }}">
                <div class="row m-0 btn-send-review justify-content-end">
                    <input type="submit" id="btn-send-review" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>
