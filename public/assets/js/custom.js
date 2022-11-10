$(document).ready(function () {

    window.addEventListener('delete-course',() => {
        swal({
            title: "Delete this Course?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                Livewire.emit('deleteConfirmed');
            }
        });

    });
});