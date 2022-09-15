$(document).ready(function () {


    $('.delete-student').on('click', function () {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                let id = $(this).data('id');
                $.ajax({
                    url: 'delete-student/' + id,
                    type: 'GET',
                    success: function (response) {
                        $('#studentRow' + id).remove();
                    },
                });
            }
        });

    });

    $('.fees').on('keyup', function () {
        $('.net-fees').val($(this).val());
    })
    
    $('.discount').on('keyup', function () {
        $('.net-fees').val($('.fees').val() - $(this).val())
    })

});