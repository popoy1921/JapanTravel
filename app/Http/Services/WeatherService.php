<?php

namespace App\HTTP\Services;

use App\Http\Services\BaseApiService;

/**
 * Class that would handle any logic for Store
 */
class WeatherService extends BaseApiService
{
    /**
     * construct method of the class assigning base url for cons
     */
    public function __construct()
    {
        $this->sBaseUrl = (env('OPEN_WEATHER_MAP_API_BASE_URL'));
    }

    /**
     * get List of all stores
     * 
     * @return array
     */
    public function getWeatherCity(string $sCity) : array
    {
        if (in_array($sCity, config('constants.cities')) === false) {
            return array(
                'code'    => '511',
                'message' => 'City indicated is not supported by the application.' 
            );
        }
        $aQueryParams = array(
            'q'     => $sCity,
            'units' => config('constants.unitCelsius'),
            'appid' => env('OPEN_WEATHER_MAP_APP_KEY')
        );
        return $this->executeGetRequest('weather', $aQueryParams);
    }
}

?>