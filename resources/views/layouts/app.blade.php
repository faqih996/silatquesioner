<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#answer-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('dashboard') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center' },
                    { data: 'howLong', name: 'howLong', className: 'text-center' },
                    { data: 'objective', name: 'objective', className: 'text-center' },
                    { data: 'goal', name: 'goal', className: 'text-center' },
                    { data: 'confident', name: 'confident', className: 'text-center' },
                    { data: 'action', name: 'action', className: 'text-center' }
                ],
                autofill: true,
                select: true,
                responsive: true,
                buttons: true,
                length: 10,
            });
        });

    </script>
</body>



</html>
