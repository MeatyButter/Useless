@if (Auth::check())
	@include ('modals.delete')
@else
	@include ('modals.signup')
@endif

@if ( Auth::check() && auth()->user()->id === Auth::id() && request()->route()->getName() == 'user' )
	@include ('modals.profile')
@endif