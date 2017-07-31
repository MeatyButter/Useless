@extends ('layouts.master')

@section ('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="post-container">
                    <div class="post-header">
                        <h1>{{ $post->title }}</h1>
                        <hr>
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="vote-counter" data-post="{{ $post->id }}">{{ ( $post->countUpVoters() - $post->countDownVoters() ) }}</span> points</li>
                            <li class="list-inline-item">{{ count( $post->comments ) }} Comments</li>
                        </ul>
                        @include ('partials.vote')
                    </div>
                    <div class="post-img-container">
                        <div id="lightgallery">
                            <a href="{{ $post->post_img }}">  
                                <img src="{{ get_img_src($post->post_img, '730') }}" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                @include ('partials.comments')
            </div>
            <div class="col-sm-4 stick">
                @include ('partials.sidebar')
            </div>
        </div>
    </div>
</div>
@stop