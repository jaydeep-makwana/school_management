$(document).ready(function () {
    window.addEventListener('delete-transaction', () => {
        swal({
            title: "Delete this Transaction?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                Livewire.emit('deleteConfirmed');
            }
        });
    });


    window.addEventListener('open-modal', () => {
        $('#feesDetails').modal('show');
    });

    window.addEventListener('close-modal', () => {
        $('#feesDetails').modal('hide');
    });


});
