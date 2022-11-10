$(document).ready(function () {

    window.addEventListener('delete-student', () => {
        swal({
            title: "Delete This Student?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                Livewire.emit('deleteConfirmed');
            }
        });
    });

    $('.fees').on('keyup', function () {
        $('.net-fees').val($(this).val());
    });

    $('.discount').on('keyup', function () {
        $('.net-fees').val($('.fees').val() - $(this).val())
    });

});