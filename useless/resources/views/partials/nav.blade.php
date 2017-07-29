<nav class="navbar navbar-toggleable-md main-nav bg-faded fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="{{ url('/') }}" class="navbar-brand logo"><i class="fa fa-mobile" aria-hidden="true"></i> UCP</a>
            </a>

  <div class="collapse navbar-collapse links" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <div class="dropdown pull-left">
            <a class="dropdown-toggle" data-toggle="dropdown">Categories</a> 
            <?php echo App\Category::customUrl('/c/{slug}')->ulAttr('class', 'dropdown-menu')->renderAsHtml(); ?>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav my-2 my-lg-0 links">
        @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/p/ucphotos/create') }}">Upload</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/user/' . auth()->user()->id ) }}">My Posts</a>
            </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Register</a>
        </li>
        @endif
    </ul>
</nav>