<?php
/**
 * This service uses OpenWeatherMap : http://openweathermap.org/api
 *
 * You have to define the API access key in app/config/parameters.yml :
 *  sbnet_weather.owm.key: <your key>
 *
 */
namespace  Sbnet\WeatherBundle\Services;

class OWMWeather extends Weather
{
    private $apiUrl = "http://api.openweathermap.org/data/2.5/";
    private $params = "units=metric&lang=fr";

    private function makeUrl($adr)
    {
        $url = $this->apiUrl
            .$adr
            ."&APPID=".$this->getKey()
            ."&".$this->params;
        return $url;
    }

    public function getForecastByCoord($lat, $lon)
    {
        $adr = $this->makeUrl("forecast?lat=$lat&lon=$lon");
        return $this->getJsonFromUrl($adr);
    }
}
