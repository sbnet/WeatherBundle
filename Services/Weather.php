<?php
namespace  Sbnet\WeatherBundle\Services;

abstract class Weather
{
  private $key = "";

  function __construct($key) {
    $this->key = $key;
  }

  public function getKey() {
    return $this->key;
  }
}
