@extends ('layouts.master')

@section ('content')
<div class="user-container">
    <div class="container file-upload">
        <div class="row">
            <div class="col-sm-12">
                <div class="post-header-user text-center padding-md">
                    @if ( Auth::check() && auth()->user()->id === $user->id )
                        <div class="edit-profile">
                            <a class="btn btn-info btn-xs btn-profile" data-toggle="modal" data-target="#profileModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </div>
                    @endif
                    <img src="{{ $user->img_profile }}" class="profile-img">
                    <h1>{{ $user->name }}</h1>
                    <h5>Member since {{ $user->created_at->diffForHumans() }}</h5>
                </div>
                <div class="post-container padding-md">
                    <div class="post-content">
                        @if (count($user->posts()))
                            <div class="grid">
                                @foreach ($user->posts()->paginate(9) as $index => $post)
                                    @include ('partials.post-roll')
                                @endforeach
                            </div>
                        @else
                            <div class="no-posts">
                                <h3>There are no posts to view</h3>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop