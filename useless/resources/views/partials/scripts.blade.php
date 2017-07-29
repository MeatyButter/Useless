<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/macy.js') }}"></script>
<script src="{{ asset('js/ResizeSensor.min.js') }}"></script>
<script src="{{ asset('js/theia-sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('js/packery.pkgd.min.js') }}"></script>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.js"></script>

<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>


<script src="{{ asset('js/ajax-vote.js') }}"></script>

<script type="text/javascript">

lightGallery(document.getElementById('lightgallery'));
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function() {
    $('.content .col-sm-4.stick').theiaStickySidebar({
      // Settings
      additionalMarginTop: 119
    });
});

var $grid = $('.grid').packery({
  // options
  itemSelector: '.grid-item',
  gutter: 10,
});
var pckry = $grid.data('packery');

var infScroll = new InfiniteScroll( '.grid', {
  // defaults listed

  path: function() {
    return window.location.pathname + '?page=' + ( this.loadCount + 2 );
  },
  outlayer: pckry,
  append: '.grid-item',
  status: '.page-load-status'
});

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
</script>

@if (Auth::check())
  <script type="text/javascript">
    function deletePost(post_id) {
      $('#delete-modal form').attr('action', '/p/ucphoto/' + post_id + '/delete');
    }
  </script>
@endif