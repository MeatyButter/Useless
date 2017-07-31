<aside class="post-sidebar-container">
	<ul class="sidebar-group list-unstyled">
		@if (count($related_post))
			@foreach( $related_post as $post )
				<li class="sidebar-group-item">
					<div class="sidebar-img pull-left">
						<a href="/p/ucphoto/{{ $post['id'] }}">
							<img src="{{ get_img_src($post['post_img'], 'side-310-150') }}" class="img-fluid">
						</a>
					</div>
					<div class="sidebar-text pull-left">
						<a href="/p/ucphoto/{{ $post['id'] }}" class="sidebar-title"><h4>{{ $post['title'] }}</h4></a>
						<p><a href="/c/{{ $post['category']['slug'] }}">{{ $post['category']['name'] }}</a></p>
						<p class="text-muted">{{ $post['points'] }} Points</p>
					</div>
				</li>
			@endforeach
		@else
			<li class="sidebar-group-item">
				No Posts Here
			</li>
		@endif
	</ul>
</aside>