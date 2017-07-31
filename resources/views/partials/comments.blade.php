<div class="comments-container">
    <div class="comments-form">
        <h3>{{ count($post->comments) }} Comments</h3>
        <hr>
        @if (Auth::check())
            @include ('partials.errors')
            <form method="POST" action="{{ URL::to('ucphoto/' . $post->id . '/comment') }}">
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Leave a comment..."></textarea>
                </div>
                <hr>
                <input type="submit" class="btn btn-primary">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
        @else
            <p>You need to <a href="{{ url('/register') }}">register</a> or <a href="{{ url('/login') }}">login</a> to comment.</p>
        @endif
    </div>
    <div class="comments-list">
        <div class="list-group">
            @if ( count($post->comments) )
                @foreach ( $post->comments as $comment )
                    <li class="list-group-item">
                        <div>
                            <a href="/user/{{ $comment->user->id }}"><img src="{{ $comment->user->img_profile }}" height="50" width="50"></a>
                        </div>
                        <div>
                            <p class="text-strong"><a href="/user/{{ $comment->user->id }}">{{ $comment->user->name }}</a><span class="text-muted"> - {{ $comment->created_at->diffForHumans() }}</span></p>
                            <p>{{ $comment->body }}</p>
                        </div>
                    </li>
                @endforeach
            @else
                <li class="list-group-item">
                    There are no comments yet!
                </li>
            @endif
        </div>
    </div>
</div>