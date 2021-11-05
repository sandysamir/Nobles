$(() => {

    $(document).on('click', '.delete_btn', function (e) {
        e.preventDefault();
            var book_id =  $(this).attr('delete_book');  
            console.log('done');

            $.ajax({
                type: 'get',
                url : config.routes.zone,
                data: {
                    '_token':config.data.csrf,
                    'id':book_id },
                success: function (data) {
        
                 if (data.status == true) {
                     console.log('deleted');
                      $('.BookingRow'+data.id).remove();  
                                      }
                    if (data.status == false) {
                     console.log('false');
        
                                      }
        }, error: function (reject) {}
        });

});

});
