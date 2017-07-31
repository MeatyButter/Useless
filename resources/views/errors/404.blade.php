@extends ('layouts.master')

@section ('content')
<div class="content" style="background: #a8c8b9">
    <div class="container file-upload">
        <div class="row">
            <div class="col-sm-8">
	            <img src="{{ url('404.jpg') }}" class="img-fluid">
            </div>
            <div class="404-message text-center" style="margin-top: 250px;">
            	<h2>Page Not Found</h2>
            	<p>The page you are looking for is not here.</p>
            	<p><a href="/">Take me home</a></p>
            	<a href="http://www.freepik.com/free-vector/employee-angry-at-the-office_901998.htm">Designed by Freepik</a>
            </div>
        </div>
    </div>
</div>
@stop