<title>@yield('title') - Dırnıs Xeyriyyə Cəmiyyəti</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@foreach($tags as $tag)
    <meta {{$tag->attribute}}="{{ $tag->attribute_name }}" content="{{ $tag->content }}">
@endforeach
