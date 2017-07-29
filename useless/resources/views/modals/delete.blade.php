<div id="delete-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Post</h4>
      </div>
      <div class="modal-body">
        <p>Are you usre you want to delete this?</p>
        <form method="POST" action>
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
            {{ method_field('DELETE') }}
            <input type="submit" value="Yes!">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>