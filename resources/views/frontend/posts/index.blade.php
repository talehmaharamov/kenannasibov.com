@extends('master.frontend')
@section('content')
    <div role="main" class="main">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="blog-posts single-post">
                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ms-0">
                                <a href="{{ route('frontend.post',$post->id) }}">
                                    <img src="{{ asset($post->photo) }}"
                                         class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt=""/>
                                </a>
                            </div>

                            <div class="post-date ms-0">
                                <span class="day">{{ $post->created_at->format('d') }}</span>
                                <span class="month">{{ $post->created_at->format('M') }}</span>
                            </div>

                            <div class="post-content ms-0">

                                <h2 class="font-weight-semi-bold">
                                    <a>
                                        {{ $post->translate(app()->getLocale())->title }}
                                    </a>
                                </h2>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i>{{ \App\Models\User::find($post->user_id)->name }}</span>
                                    <span><i class="far fa-folder"></i> <a
                                            href="#">{{ \App\Models\Category::find($post->category_id)->translate(app()->getLocale())->name }}</a> </span>
                                    <span><i class="far fa-eye"></i>{{ $post->view_count }}</span>

                                </div>

                                <p> {!! $post->translate(app()->getLocale())->content !!} </p>
                            </div>
                        </article>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
