<?php

namespace App\Http\Controllers;

use App\HTTP\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * instance of WeatherService
     * @var WeatherService
     */
    private WeatherService $oWeatherService;

    /**
     * construct method for the class
     * 
     * @param WeatherService $oWeatherService
     */
    public function __construct(WeatherService $oWeatherService)
    {
        $this->oWeatherService = $oWeatherService;
    }

    /**
     * method to get the weather of a give city
     * @param string $sCity
     * 
     * @return array
     */
    public function getWeatherCity(string $sCity) : array
    {
        return $this->oWeatherService->getWeatherCity($sCity);
    }
}

?>