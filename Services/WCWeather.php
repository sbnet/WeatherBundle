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
    protected $apiUrl;
    protected $key;
    protected $parameters;

    public function __construct($key, $apiUrl = "http://api.wunderground.com/api/")
    {
        $this->key = $key;
        $this->apiUrl = $apiUrl;
    }

    public function getKey()
    {
        return $this->key;
    }

    /**
     *
     * @param string $parameters
     */
    public function setParameters($parameters)
    {
        $this->$parameters = $parameters;
    }

    public function getForecastByCoord($lat, $lon)
    {
        return false;
    }

    public function getForecastByName($name)
    {
        return false;
    }

    public function getForecastById($id)
    {
        return false;
    }
}
