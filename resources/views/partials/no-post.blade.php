<div class="col-sm-6">
    <img src="{{ url('no-posts.jpg') }}" class="img-fluid">
</div>
<div class="col-sm-6">
	<h2>Looks like there are no posts yet</h2>
	@if (Auth::check())
        <p>Get this started and <a href="{{ url('/p/ucphotos/create') }}">Upload</a> one!</p>
    @else
        <p>
	        <a href="{{ url('/login') }}">Login</a> or <a href="{{ url('/register') }}">Register</a> and get this started!
        </p>
    @endif
</div>