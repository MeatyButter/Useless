<div id="signup-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hey there!</h4>
      </div>
      <div class="modal-body">
        <p>You need to have an account to vote! If you need an account, register below.</p>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="control-label">Name</label>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="control-label">E-Mail Address</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="control-label">Password</label>
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group">
              <label for="password-confirm" class="control-label">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary">
                  Register
              </button>
          </div>
      </form>
      <p>Already have an account? <a href="{{ URL::to('/login') }}">Click here</a> to login.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>