<?php

namespace App\HTTP\Services;

use App\Http\Services\BaseApiService;

/**
 * Class that would handle any logic for Store
 */
class VenueService extends BaseApiService
{
    /**
     * construct method of the class assigning base url for cons
     */
    public function __construct()
    {
        $this->sBaseUrl = (env('FOUR_SQUARE_API_BASE_URL'));
        $this->aHeaders = array(
            'Accept'        => 'application/json',
            'Authorization' => env('FOUR_SQUARE_API_BASE_KEY')
        );
    }

    /**
     * Get list of venues that are available to 
     * 
     * @return array
     */
    public function getVenueCity(string $sCity) : array
    {
        if (in_array($sCity, config('constants.cities')) === false) {
            return array(
                'code'    => '511',
                'message' => 'City indicated is not supported by the application.' 
            );
        }
        $aQueryParams = array(
            'near'     => $sCity
        );
        return $this->executeGetRequest('search', $aQueryParams);
    }
}

?>