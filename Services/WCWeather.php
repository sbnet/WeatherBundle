<?php
/**
 * This service uses Weather Channel API : https://www.wunderground.com/weather/api
 *
 * You have to define the API access key in app/config/parameters.yml :
 *  sbnet_weather.wc.key: <your key>
 *
 */
namespace  Sbnet\WeatherBundle\Services;

class WCWeather extends WeatherDriver implements WeatherDriverInterface
{
    private $apiUrl = "http://api.wunderground.com/api/";
    protected $key = "";

    function __construct($key)
    {
        $this->key = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    private function makeUrl($adr)
    {
        $url = $this->apiUrl
            .$adr
            ."/".$this->getKey()."/";

        return $url;
    }

    public function getForecastByCoord($lat, $lon)
    {
    }
}
