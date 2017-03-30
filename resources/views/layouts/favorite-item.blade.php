<div class="panel panel-default book-item">
    <div class="panel-body">
        <a href="">
            <center>
                <img class="book-image reponsive" src="{{ asset($book->book->image) }}" alt="{{ $book->book->title }}">
            </center>
        </a>
    </div>
    <div class="panel-heading">
        <a href="">
            <h5>{{ $book->book->title }}</h5>
        </a>
    </div>
</div>
