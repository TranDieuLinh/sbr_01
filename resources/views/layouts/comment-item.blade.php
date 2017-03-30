<p class="col-md-12">

    @if (isset($user))
        <p>
            <div class="col-md-1">
                <img src="{{ asset($user->avatar) }}" class="small_avatar">
            </div>
            <div class="col-md-11">
                <input type="text" name="comment" class="enter_comment form-control" placeholder="write comment ...">
            </div>
        </p>
    @endif
    
</p>

@foreach ($review->comments as $comment)
    <p class="col-md-12">
        <p>
            <div class="col-md-1">
                 <a href="">
                    <img src="{{ asset($review->user->avatar) }}" class="small_avatar">
                 </a>
            </div> 
            <div class="col-md-11">
                <a href="">{{ $comment->user->name }}</a>
                {{ $comment->content }}
            </div>
        </p>
    </p>
@endforeach
