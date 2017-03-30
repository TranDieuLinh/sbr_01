@extends('pages.member-info')

@section('profile_content')
    <h2>{{ trans('profile.all_following') }}</h2>

    @foreach ($member->followers as $follower)

        @include ('layouts.following-item')

    @endforeach

@endsection
