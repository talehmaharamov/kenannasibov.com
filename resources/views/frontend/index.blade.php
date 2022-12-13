@extends('master.frontend')
@section('content')
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="block category-listing">
                    <h3 class="news-title"><span>@lang('messages.news')</span></h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="post-block-wrapper post-grid-view clearfix">
                            <div class="post-thumbnail">
                                <a href="single-post.html">
                                    <img class="img-fluid" width="850px" height="565" src="{{asset('frontend/images/news/download.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="post-content">
                                <a class="post-category" href="post-category-2.html">Google</a>

                                <h2 class="post-title mt-3">
                                    <a href="single-post.html">Intel’s new smart glasses actually look good</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">an hour ago</span>
                                    <span class="post-author">by
                                        <a href="author.html">John Snow</a>
                                    </span>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sunt minus,
                                    perferendis deleniti
                                    facere asperiores voluptatum consequuntur fugiat? Ipsam, sit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="post-block-wrapper post-grid-view clearfix">
                            <div class="post-thumbnail">
                                <a href="single-post.html">
                                    <img class="img-fluid" src="{{asset('frontend/images/news/news-13.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="post-content">
                                <a class="post-category" href="post-category-2.html">Marc</a>

                                <h2 class="post-title mt-3">
                                    <a href="single-post.html">An Asteroid Is Passing Earth Today: Here's How to</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="posted-time">an hour ago</span>
                                    <span class="post-author">by
                                        <a href="author.html">John Snow</a>
                                    </span>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo veritatis odio
                                    nesciunt enim?
                                    Eos, aut. Ducimus delectus cupiditate quidem facere?
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="pagination-wrapper" class="pagination-wrapper">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-spinner mr-2"></i></span>
                                <span class="">@lang('backend.load-more')</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="featured-posts">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-md-3 mr-lg-3">
                    <div class="item" style="background-image:url({{asset('frontend/images/news/img-2.jpg')}})">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-primary">Entertainment</a>
                            <h2 class="slider-post-title">
                                <a href="single-post.html">Here's How To Get Free Pizza On</a>
                            </h2>
                            <div class="post-meta mt-2">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>19 hours ago</span>
                                <span class="post-author">
                                    by
                                    <a href="author.html">Rodinho Summon</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-lg-3">
                    <div class="item" style="background-image:url({{asset('frontend/images/news/img-2.jpg')}})">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-danger">game</a>
                            <h2 class="slider-post-title">
                                <a href="single-post.html">Call Of Duty: Black Ops 4 Releasing</a>
                            </h2>
                            <div class="post-meta mt-2">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>19 hours ago</span>
                                <span class="post-author">
                                    <span> by </span>
                                    <a href="author.html">Rodinho Summon</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-lg-4">
                <div class="featured-slider mr-lg-3">
                    <div class="item" style="background-image:url({{asset('frontend/images/news/img-2.jpg')}})">
                        <div class="post-content">
                            <a href="#" class="post-cat bg-danger">game</a>
                            <h2 class="slider-post-title">
                                <a href="single-post.html">Call Of Duty: Black Ops 4 Releasing</a>
                            </h2>
                            <div class="post-meta mt-2">
                                <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>19 hours ago</span>
                                <span class="post-author">
                                    <span> by </span> dsad
                                    <a href="author.html">Rodinho Summon</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection