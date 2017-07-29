@extends ('layouts.master')

@section ('content')
<div class="content">
    <div class="container file-upload">
        @if (count($category))
        <div class="row">
            <div class="col-sm-8">
                <div class="padding-md-bottom">
                    <h1 class="text-strong">{{ $category->name }}</h1>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            @if (count($posts))
                <div class="col-sm-12">
                    <div id="gallery-container">
                        @foreach ($posts as $index => $post)
                            @include ('partials.post-roll')
                        @endforeach
                    </div>
                </div>
            @else
                @include ('partials.no-post')
            @endif
        </div>
    </div>
</div>
@stop