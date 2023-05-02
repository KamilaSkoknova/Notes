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
        <div class="d-flex justify-content-end">
            @if (Route::has('login'))
                <div class="me-4 mt-2">
                    @auth
                        <a href="{{ route('notes.index') }}" class="">My notes</a>
                    @else
                        <a href="{{ route('login') }}" class="me-2 white-color">Log in</a><span class="primary-color"> | </span>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ms-2 white-color">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="container">
            <div class="frontpage">
                <div class="row">
                    <div class="col-12">
                        <div class="frontpage__text d-flex justify-content-center flex-column">
                            <div class="frontpage__text-header">
                                <h1 class="">Write it down</h1>
                            </div>
                            <div class="frontpage__text-details">
                                <h2>The best place to&nbsp;easy store your&nbsp;thoughts,&nbsp;ideas, or&nbsp;imporant reminders.</h2>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
     <script src="{{ asset('build/assets/scripts.js') }}"></script>
    </body>
</html>
