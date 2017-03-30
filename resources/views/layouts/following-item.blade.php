<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            <a href="{{ route('member.show', $follower->following->id) }}">
                {{ $follower->following->name }}
                <small class="total">

                    @if (isset($user) && ($follower->following->id) != $user->id)
                        {{ $follower->new_reviews }} {{ trans('profile.new_review') }}
                    @endif
                    
                </small>
            </a>
        </h3>
        <h4>
            {{ trans('app.number_review') }} {{ $follower->following->reviews->count() }}
        </h4>
    </div>
    <div class="panel-body">
        <div>
            <div class="col-md-4">
                <a href="{{ route('member.show', $follower->following->id) }}">
                    <img class="img-thumbnail avatar" src="{{ asset($follower->following->avatar) }}" alt="{{ $follower->following->name }}">
                </a>
            </div>
            <div class="col-md-8">
                <h3>{{ trans('app.about') }} {{ $follower->following->name }}</h3>
                <p>
                    {!! str_limit($follower->following->about, $limit = config('view.limit_about'), $end = '...') !!}
                </p>
            </div>                          
        </div>
    </div>
</div>
