<?php
namespace  Sbnet\WeatherBundle\Services;

interface WeatherDriverInterface
{
    public function getForecastByCoord($lat, $lon);
    public function getForecastByName($name);
}
