<?php
namespace GooglePlaces;

use GuzzleHttp\Client;

class PlacesApiClient
{

    /**
     * @var string
     */
    private $apiKey;

    /**
     * PlacesApiClient constructor.
     *
     * @param string$apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param string $placeId
     *
     * @return PlacesResult
     */
    public function getByPlaceId($placeId)
    {
        $client = new Client([
            'timeout'  => 20.0,
            'verify'   => false,
            "headers"  => [
                'Content-Type' => 'application/json'
            ]
        ]);
        $reponseString = $client->get('https://maps.googleapis.com/maps/api/place/details/json?' .
            http_build_query([
                'placeid' => 'ChIJTbbtFtMMaYgRz9VVLJIHmjg',
                'key' => 'AIzaSyDRaP5DdzEvE7aiXTGc4c3u_zaxcf1O8uQ'
            ]))->getBody()->getContents();

        /**
         * @var Response $data
         */
        $data = json_decode($reponseString);

        return $data->result;
    }
}