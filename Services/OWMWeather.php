<?php
/**
 * This service uses OpenWeatherMap : http://openweathermap.org/api
 *
 * You have to define the API access key in app/config/parameters.yml :
 *  sbnet_weather.owm.key: <your key>
 *
 */
namespace  Sbnet\WeatherBundle\Services;

class OWMWeather extends WeatherDriver implements WeatherDriverInterface
{
    private $apiUrl = "http://api.openweathermap.org/data/2.5/";

    protected $parameters = "";
    protected $key = "";

    public function __construct($key)
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
              ."&APPID=".$this->getKey();

        if($this->parameters){
            $url .= "&".$this->parameters;
        }

        return $url;
    }

    /**
     *
     * @param string $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * See http://openweathermap.org/forecast5
     *
     * @param float $lat Latitude
     * @param float $lon Longitude
     * @return object
     */
    public function getForecastByCoord($lat, $lon)
    {
        $adr = $this->makeUrl("forecast?lat=$lat&lon=$lon");
        return $this->getJsonFromUrl($adr);
    }

    /**
     * See http://openweathermap.org/forecast5
     *
     * @param string $name For example : {city name},{country code}
     * @return object
     */
    public function getForecastByName($name)
    {
        $adr = $this->makeUrl("forecast?q=$name");
        return $this->getJsonFromUrl($adr);
    }

    /**
     * See http://openweathermap.org/forecast5
     *
     * @param int $id City id
     * @return object
     */
    public function getForecastById($id)
    {
        $adr = $this->makeUrl("forecast?id=$id");
        return $this->getJsonFromUrl($adr);
    }
}
