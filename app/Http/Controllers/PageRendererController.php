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
        return view('Home.HomePage');
    }
}
