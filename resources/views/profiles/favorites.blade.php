@extends('pages.member-info')

@section('profile_content')
    
    <h2>{{ trans('app.favorite') }}</h2>

    @foreach ($favorites as $book)

        @include ('layouts.favorite-item')
        
    @endforeach

    <div class="col-md-12">{{ isset($favorites) ? $favorites->links() : '' }}</div>

@endsection
