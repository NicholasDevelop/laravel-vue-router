<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Import TailWind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">

    <script>
        tailwind.config = {
          theme: {
            extend: {
                container: {
                    center: true,
                },
                colors: {
                    clifford: '#da373d',
                }
            }
          }
        }
      </script>


</head>
<body>
    <div id="root">
        
    </div>

    <script src="{{ asset('js/front.js') }}"></script>
</body>
</html>
