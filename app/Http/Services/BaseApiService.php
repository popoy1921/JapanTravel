<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class BaseApiService
{
    /**
     * Base url that will be used for the requests
     * @var string
     */
    protected string $sBaseUrl;
    
    /**
     * Array that serves as header for the request
     * @var array
     */
    protected array  $aHeaders = [];

    /**
     * Call get request
     * @param string $endpoint
     * @param null|array $queryParams
     * 
     * @return array
     */
    protected function executeGetRequest(string $endpoint, ?array $aQueryParams = []): array
    {
        try {
            $oResponse = Http::withHeaders($this->aHeaders)->get($this->constructUrl($endpoint), $aQueryParams);
            return array(
                'data'  => json_decode($oResponse, true),
                'code'  => '200'
            );
        } catch (RequestException $oException) {
            // Handle any issues encountered by the 
            return $this->createErrorMessage($oException->response['message'], 540);
        }
    }

    /**
     * Method to create
     * @param string $endpoint
     * 
     * @return string
     */
    protected function constructUrl(string $endpoint): string
    {
        return "{$this->sBaseUrl}/" . ltrim($endpoint, '/');
    }

    /**
     * Create an array for error message
     *
     * @param string $sMessage
     * @param integer $iStatusCode
     * @return array
     */
    protected function createErrorMessage(string $sMessage, int $iStatusCode)
    {
        return [
            'errors' => [
                'message' => $sMessage
            ],
            'code' => $iStatusCode
        ];
    }
}