@if( Auth::check() && auth()->user()->id === $post->user_id )
  <!-- Trigger the modal with a button -->
  <a class="btn btn-xs btn-transparent post-delete" data-toggle="modal" onClick="deletePost('{{ $post->id }}')" data-target="#delete-modal">Delete</a>
@endif