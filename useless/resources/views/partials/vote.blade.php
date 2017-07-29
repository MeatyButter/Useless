@if (Auth::check())
	<a href="#" class="btn btn-xs vote-post" data-post="{{$post->id}}" data-vote="1"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
	<a href="#" class="btn btn-xs vote-post" data-post="{{$post->id}}" data-vote="0"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
@else
	<a href="#" class="btn btn-xs" data-toggle="modal" data-target="#signup-modal"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
	<a href="#" class="btn btn-xs vote-modal" data-toggle="modal" data-target="#signup-modal"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
@endif