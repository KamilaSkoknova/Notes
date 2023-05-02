<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="language" content="en"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kamila Skokňová" >
        <meta name="keywords" content="">
        <meta name="description" content="">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <link rel="stylesheet" href="{{ asset('build/assets/styles.css') }}">

        <link rel="icon" href="{{ asset('build/img/note.jpg') }}">

        <title>{{ config('app.name') }} | List of Notes</title>
    </head>
    <body class="notes-bg">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        
        <script src="{{ asset('build/assets/scripts.js') }}"></script>
    </body>
</html>