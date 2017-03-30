@foreach ($books as $book)

    @foreach ($book->reviews as $review)

        @include ('layouts.review-item')

    @endforeach

@endforeach
