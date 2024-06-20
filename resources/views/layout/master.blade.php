<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>

    {{-- style --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.7/af-2.7.0/b-3.0.2/b-colvis-3.0.2/b-html5-3.0.2/r-3.0.2/sc-2.4.2/sb-1.7.1/sp-2.3.1/sl-2.0.1/sr-1.4.1/datatables.min.css"
        rel="stylesheet">
    </head>

<body>
    @include('layout.nav')

    <main class="py-4">
        @yield('content')
    </main>

    @include('layout.footer')


    {{-- scripts --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script
        src="https://cdn.datatables.net/v/bs5/dt-2.0.7/af-2.7.0/b-3.0.2/b-colvis-3.0.2/b-html5-3.0.2/r-3.0.2/sc-2.4.2/sb-1.7.1/sp-2.3.1/sl-2.0.1/sr-1.4.1/datatables.min.js">
    </script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
        $('.select-multiple').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
        $('.select').select2();
        });
    </script>
    <script>
        new DataTable('#table-baru');
    </script>
</body>

</html>
