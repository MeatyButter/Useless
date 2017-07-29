<div class="grid-item grid-sizer">
    <div class="img-container">
        @if( request()->route()->getName() == 'user' )
            @include ('partials.delete')
        @endif
        <div class="img-rating-container img-container-content">
            <div class="img-container-hidden">
                <div class="btn btn-xs btn-transparent img-container-vote">{{ ( $post->countUpVoters() - $post->countDownVoters() ) }}</div>
            </div>
        </div>
        <a class="img-container-hidden" href="/p/ucphoto/{{ $post->id }}" target="_blank"></a>
        <img src="{{ $post->post_img }}" class="img-fluid">
        <div class="img-user-info img-container-content">
            <div class="img-container-hidden">
                <div class="img-container-profile">
                    <a class="pull-left" href="/user/{{ $post->user_id }}" target="_blank"><img src="{{ $post->user->img_profile }}" height="35" width="35"></a>
                    <a class="pull-left" href="/user/{{ $post->user_id }}" target="_blank"><p>{{ $post->user->name }}</p></a>
                </div>
            </div>
        </div>
    </div>
</div>