@extends('master.frontend')
@section('content')
    <div role="main" class="main">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="blog-posts">
                        <div class="row">
                            @foreach($allPosts as $post)
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image"
                                             style="background-image: url({{ asset($post->photo) }})">
                                            <a href="{{ route('frontend.post',$post->id) }}">
                                                <img src="{{ asset($post->photo) }}"
                                                     class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                     alt="{{ $post->translate(app()->getLocale())->title }}">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('frontend.post',$post->id) }}">{{ $post->translate(app()->getLocale())->title }}</a>
                                            </h2>
                                            <div class="post-meta">
                                        <span>
                                            <i class="far fa-user"></i>
                                            {{ \App\Models\User::find($post->user_id)->name }}
                                        </span>
                                                <span>
                                            <i class="far fa-folder"></i>
                                            <a href="#">{{ \App\Models\Category::find($post->category_id)->translate(app()->getLocale())->name }}</a>
                                        </span>
                                                <span>
                                            <i class="far fa-eye"></i>
                                            {{ $post->view_count }}
                                        </span>
                                                <span class="d-block mt-2">
                                            <a href="{{ route('frontend.post',$post->id) }}"
                                               class="btn btn-xs btn-light text-1 text-uppercase">
                                                @lang('backend.read-more')
                                            </a>
                                        </span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="pagination float-end">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
