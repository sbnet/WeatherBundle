<?php
namespace  Sbnet\WeatherBundle\Services;

class Weather
{
    protected $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    public function setParameters($parameters)
    {
        return $this->driver->setParameters($parameters);
    }

    public function getForecastByCoord($lat, $lon)
    {
        return $this->driver->getForecastByCoord($lat, $lon);
    }

    public function getForecastByName($name)
    {
        return $this->driver->getForecastByName($name);
    }

    public function getForecastById($id)
    {
        return $this->driver->getForecastById($id);
    }
}
