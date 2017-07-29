@extends ('layouts.master')

@section ('content')
<div class="content fuelux">
    <div class="container file-upload">
        <div class="row">
            <div class="col-sm-8">
                <div class="padding-md-bottom">
                    <h1 class="text-strong">Useless Cellphone Photos</h1>
                    <h3>Share dumb photos taking up space on your phone</h3>
                    <p>Inspired by <strong>Bill Burr's Monday Morning Podcast</strong>, this site has been built for you to share any of the dumb photos you have accumulated on your cellphone.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @if (count($posts))
                <div class="col-sm-12">
                    <div class="grid infinitescroll">
                        @foreach ($posts as $index => $post)
                            @include ('partials.post-roll')
                        @endforeach
                        <p class="page-load-status">Loading</p>
                        <p class="infinite-scroll-last">End of content</p>
                    </div>
                </div>
            @else
                @include ('partials.no-post')
            @endif
        </div>
    </div>
</div>

@stop