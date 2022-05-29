@extends('layouts.template')
@section('content')
    @php
    $title = 404;

    @endphp

    <body>

        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <div></div>
                    <h1>404</h1>
                </div>
                <h2>Page not found</h2>
                <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.
                </p>
                <a href="/">home page</a>
            </div>
        </div>

    </body>
@endsection
