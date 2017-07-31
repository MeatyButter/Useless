$(document).ready(function(){

    var url = "/ajax-crud/public/tasks";

    $('.vote-post').click(function(){
        var vote = $(this),
            post = vote.data('post'),
            url = '/p/ucphoto/' + post + '/votes',
            data = {
                '_method' : 'PUT',
                'vote': vote.data('vote')
            };

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                var counter =$('.vote-counter[data-post="' + post + '"]');
                counter.html(data['total']);
                console.log(counter);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});