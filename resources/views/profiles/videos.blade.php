@extends('pages.member-info')

@section('profile_content')

    <h2>{{ trans('app.all_video') }}</h2>

    @foreach ($videos as $video)

        @include ('layouts.video-item')

    @endforeach
    
@endsection
