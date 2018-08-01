<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>D-N-D</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body class="container-fluid d-flex padding-0">
        <div class="home-header">
            @include('header');
        </div>
        <div class="col-md-3 col-lg-3">
            @include('leftnavigation');
        </div>

        <div class="col-md-6 col-lg-6">
            Content
        </div>

        <div class="editor-section col-md-3 col-lg-3">
            @include('editorsection');
        </div>
        <div class="home-footer">
            @include('footer');
        </div>
    </body>
</html>
