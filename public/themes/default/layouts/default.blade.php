<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        <meta name="csrf-token" content="{!! csrf_token() !!}">
         <link rel="icon" href="{{ asset('assets/images/halodoc.png')}}" type="image/x-icon">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
        <script>
            var baseUrl = "{{ url() }}";
        </script>
    </head>
    <body class="nav-md">
        {!! Theme::partial('header') !!}

        <div class="container">
            {!! Theme::content() !!}
        </div>

        {!! Theme::partial('footer') !!}

        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
