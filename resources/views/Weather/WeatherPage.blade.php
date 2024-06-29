<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/axios.js', 'resources/js/weather.js'])
    <title>Japan Travel: Weather</title>
</head>
<body>
    @include('Common.NavigationBar')
    @include('Weather.WeatherBody')
</body>
</html>