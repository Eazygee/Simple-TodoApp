<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    @toastr_css

    <script src="{{asset('js/app.js') }}" defer></script>
    <title>TodoApp</title>
</head>
<body>
    @yield('content')
</body>
@jquery
@toastr_js
@toastr_render
</html>