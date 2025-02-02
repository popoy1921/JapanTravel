<p>
<b>What are in the UI and UX:</b>
<br>1. Made a very simple and intuitive application. All access points are seen in the navigation bar.
<br>2. The application has a responsive design that can help travellers to access it their phones.
<br>3. All possible meaningful data are given on the weather tab. It shows amount of rain or snow depending on the weather.
<br>4. The application provides a link to the address of venues that are available on the list that could help them navigate using google maps. 
</p>

<p>
<b>Reasons that the code is good:</b>
<br>1. For code, I have segregated the WEB and API routes.
<br>2. Request to 3rd party API are made through the backend for security of the sensitive information such as the added .env values
<br>3. Optimize the use of config files by creating constants.php we can access the constants that will be used through out the application
<br>4. Used a base api service class to handle requests. This is to make a uniform response throughout the application
</p>

<p>
<b>HOW TO SETUP:</b>
<br>1. Setup your environment atleast should have the following:
<br>- node
<br>- composer
<br>- XAMPP
<br>2. Run `git clone https://github.com/popoy1921/JapanTravel.git` to clone the repository by running the command 
<br>3. Run `php artisan key:generate` to create applicatio key for the application
<br>4. Run 'composer install' to install laravel dependencies.
<br>5. Run 'npm install' to install node dependencies.
<br>6. Rename '.env.example' to '.env', then add the following values:
<br>```
<br>OPEN_WEATHER_MAP_APP_KEY = "2cc342e8412329df76b9c83cfc525ea6"
<br>OPEN_WEATHER_MAP_API_BASE_URL = "https://api.openweathermap.org/data/2.5/"
<br>FOUR_SQUARE_API_BASE_KEY = "fsq3vi7PYZLP1uScy/pWC5o16C9PtSBAZgmmVM2/+5Fxf8A="
<br>FOUR_SQUARE_API_BASE_URL = "https://api.foursquare.com/v3/places"
<br>```
<br>6. In a terminal 1 run 'npm run dev' for vite assets.
<br>7. In a terminal 2 run 'php artisan serve'.
<br>8. Access the application throught the browser by accessing 'http://127.0.0.1:8000/'
<br>
<br>Enjoy traversing the application :D
</p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   J a p a n T r a v e l 
 
 