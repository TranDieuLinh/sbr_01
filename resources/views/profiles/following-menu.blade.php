<h3>{{ trans('app.following') }}</h3>
<div class="list-group">

    @foreach ($member->followers as $follower)
        <a href="{{ route('member.show', $follower->following->id) }}" class="list-group-item">
            {{ $follower->following->name }}
            @if (isset($user) && ($follower->following->id) != $user->id)
                <small class="total">
                    @if(isset($follower->new_reviews))
                        {{ $follower->new_reviews }} {{ trans('profile.new_review') }}
                    @endif
                </small>
            @endif
        </a>
    @endforeach

</div>
