<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class PageRendererController extends Controller
{
    /**
     * List of Cities
     * 
     * @var array
     */
    private array $aCities = [];

    /**
     * Render Home page
     * 
     * @return View
     */
    public function showHomePage() : View
    {
        return view('Home.HomePage', array('homePageSelected' => true));
    }
    
    /**
     * Render Weather page
     * 
     * @return View
     */
    public function showWeatherPage() : View
    {
        $aPageDetails = array();
        $this->getCities();
        $aPageDetails['weatherPageSelected'] = true;
        return view('Weather.WeatherPage', $aPageDetails);
    }

    /**
     * Set values for $aCities property from constants
     * 
     * @return void
     */
    private function getCities() : void
    {
        $this->aCities = config('constants.cities');
    }
    
    /**
     * Render Weather page
     * 
     * @return View|Redirect
     */
    public function showVenuePage(string $sCategory) : View|RedirectResponse
    {
        $aPageDetails = array();
        $this->getCities();
        $aPageDetails['cities'] = $this->aCities;
        $aPageDetails['venuePageSelected'] = true;
        $aPageDetails['category'] = $sCategory;
        return view('Venue.VenuePage', $aPageDetails);
    }
}
