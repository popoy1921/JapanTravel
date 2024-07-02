<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/axios.js', 'resources/js/venue.js'])
    <title>Japan Travel: Venues</title>
</head>
<body>
    @include('Common.NavigationBar')
    @include('Venue.VenueBody')
</body>
</html>