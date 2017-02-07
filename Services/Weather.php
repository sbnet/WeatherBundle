<?php
namespace  Sbnet\WeatherBundle\Services;

class Weather
{
    protected $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    /**
     *
     */
    public function getForecastByCoord($lat, $lon)
    {
        return $this->driver->getForecastByCoord($lat, $lon);
    }
}
