$(document).ready(function (){
    //store wisthlist
    $('.wishlist').on('click',function (e){
        e.preventDefault();
        var that = $(this);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var url = $(this).children().attr('href');
        $.ajax({
            url: url,
            cache: false,
            success: function(data) {
                $('.nb-wishlist').text(data.nb_wisthlist);
                if (data.statut){
                    that.toggleClass('changed');
                }else{
                    that.toggleClass('changed');
                }

            },
        });
    });
    //compte wisthlist
});
