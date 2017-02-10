<?php
namespace  Sbnet\WeatherBundle\Services;

interface WeatherDriverInterface
{
    public function setParameters($parameters);
    public function getForecastByCoord($lat, $lon);
    public function getForecastByName($name);
    public function getForecastById($id);
}
