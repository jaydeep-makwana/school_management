<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> @yield('title') </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    @include('layout.header')
    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container-fluid pt-4">

            @yield('content')

        </div>
    </main>
    <!--Main layout-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/admin.js') }}"></script>
    <!-- bootstrap scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
