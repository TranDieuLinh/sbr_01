@extends('pages.member-info')

@section('profile_content')

    <h2>{{ trans('app.about') }} {{ $member->name }}</h2>

    <p>
        {!! $member->about !!}
    </p>

@endsection
