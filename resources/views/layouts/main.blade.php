<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Page @show</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('blocks.header')

    <div class="content">
        @yield('content')
    </div>

    @include('blocks.footer')
</body>
</html>