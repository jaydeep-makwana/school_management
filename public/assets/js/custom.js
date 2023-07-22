$(document).ready(function () {

    window.addEventListener('delete-course', () => {
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

    function showProfile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile_image').show();
                $('#profile_image').attr('src', e.target.result);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#profileImage').change(function () {
        showProfile(this);
    });

    function showLogo(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#logo_image').show();
                $('#logo_image').attr('src', e.target.result);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#logoImage').change(function () {
        showLogo(this);
    });

    function showFavicon(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#favicon_image').show();
                $('#favicon_image').attr('src', e.target.result);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#faviconImage').change(function () {
        showFavicon(this);
    });

});
