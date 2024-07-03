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
     * Get list of Hotel venues
     * @param string $sCity
     * 
     * @return array
     */
    public function getHotelList(string $sCity) : array
    {
        return $this->oVenueService->getVenueList($sCity, config('constants.fourSquareHotelCatId'));
    }

    /**
     * Get list of Restaurant venues
     * @param string $sCity
     * 
     * @return array
     */
    public function getRestaurantList(string $sCity) : array
    {
        return $this->oVenueService->getVenueList($sCity, config('constants.fourSquareRestaurantCatId'));
    }

    /**
     * Get list of Attraction venues
     * @param string $sCity
     * 
     * @return array
     */
    public function getAttractionList(string $sCity) : array
    {
        return $this->oVenueService->getVenueList($sCity, config('constants.fourSquareAttractionCatId'));
    }
}

?>