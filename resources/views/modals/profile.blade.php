<div id="profileModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile</h4>
      </div>
      <div class="modal-body">
        <p>Update Profile</p>
        @include ('partials.errors')
        <form method="POST" action="{{ URL::to('user/' . $user->id . '/edit') }}"  enctype="multipart/form-data">
            <div class="form-group">
                <label>Profile Image:</label>
                <input type="file" name="image" id="image" class="form-control-file" onchange="readURL(this);" >

                <img id="blah" class="pull-right img-fluid img-round" src="{{ $user->img_profile }}" alt="your image" height="125" width="125" />
            </div>
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
            {{ method_field('PUT') }}
            <input type="submit" value="Update">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>