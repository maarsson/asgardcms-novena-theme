<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css',  theme_assets_path()) }}" type="text/css">
</head>
<body>
    @yield('content')
</body>
<script src="{{ mix('js/app.js', theme_assets_path()) }}"></script>
</html>
