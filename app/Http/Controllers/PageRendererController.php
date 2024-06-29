<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageRendererController extends Controller
{
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
        $aPageDetails['cities'] = config('constants.cities');
        $aPageDetails['weatherPageSelected'] = true;
        return view('Weather.WeatherPage', $aPageDetails);
    }
}
