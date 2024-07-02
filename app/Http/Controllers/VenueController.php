<?php

namespace App\Http\Controllers;

use App\HTTP\Services\VenueService;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    /**
     * instance of VenueService
     * @var VenueService
     */
    private VenueService $oVenueService;

    /**
     * construct method for the class
     * 
     * @param WeatherService $oWeatherService
     */
    public function __construct(VenueService $oVenueService)
    {
        $this->oVenueService = $oVenueService;
    }

    /**
     * method to get the weather of a give city
     * @param string $sCity
     * 
     * @return array
     */
    public function getVenueCity(string $sCity) : array
    {
        return $this->oVenueService->getVenueCity($sCity);
    }
}

// https://foursquare.com/oauth2/authenticate?client_id=ASWYANKJAOYK1G5PWGV1BI1K0IQ2COMIJZSSDB1B2KGP0GNB&response_type=code&redirect_uri=http://127.0.0.1:8000/

?>