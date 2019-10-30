@extends('layouts.default', ['$title' => 'About'])

@section('content')

    <div class="container">

        <h2>What is {{ config('app.name') }}?</h2>

        <p>config('app.name') is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a>.</p>

        <div class="row">

            <div class="clo-md-6">

                <p class="alert alert-warning">

                    <strong><i class="fa fa-exclamation-triangle"></i> This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purposes.</strong>

                </p>

            </div>

        </div>

        <p>Feel free to help to improve the <a href="#">source code</a>.</p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which {{ config('app.name') }} was inspired :).</p>
        <p>More info <a href="https://larama.com/p/about">Here</a>.</p>

        <hr>

        <h2>Wiich tools and services are used in {{ config('app.name') }}   ?</h2>
        <p>Basically it's built on laravel &amp; Bootstrap. but there's a bunch os services used for
            email and other sections.
        </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amason S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Anthony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>

    </div>

@endsection
