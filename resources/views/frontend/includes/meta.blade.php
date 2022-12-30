<title>@yield('title')Dırnıs Xeyriyyə Cəmiyyəti</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@if(Route::currentRouteName() == 'frontend.post' or Route::currentRouteName() == 'frontend.selectedPost')
    @foreach($tags as $tag)
        @if($tag->attribute_name != 'keywords' and $tag->attribute_name != 'description')
            <meta {{$tag->attribute}}="{{ $tag->attribute_name }}" content="{{ $tag->content }}">
        @endif
    @endforeach
@yield('meta')
@else
    @foreach($tags as $tag)
        <meta {{$tag->attribute}}="{{ $tag->attribute_name }}" content="{{ $tag->content }}">
    @endforeach
@endif

