@extends('pages.member-info')

@section('profile_content')

    @include('layouts.top-video')
    
    <h2>{{ trans('app.all_review') }}</h2>

    @foreach ($reviews as $review)

        @include ('layouts.review-item')

    @endforeach

@endsection
