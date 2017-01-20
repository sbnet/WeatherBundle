<?php
/**
 * MUST use mock objects : https://phpunit.de/manual/current/en/test-doubles.html
 */
namespace Sbnet\WeatherBundle\Tests;

use Sbnet\WeatherBundle\Services;

class WeatherTest extends \PHPUnit_Framework_TestCase
{
    public function testGetForecastByCoord()
    {
        // Create a stub for the Services\OWMWeather class.
        $OWMDriver = $this->createMock(Services\OWMWeather::class);

        // Configure the getForecastByCoord method
        $json = json_decode(file_get_contents(__DIR__."/MockData/getForecastByCoord.json"));
        $OWMDriver->method('getForecastByCoord')
                  ->willReturn($json);
        $weather = new Services\Weather($OWMDriver);

        $this->assertEquals(40, $weather->getForecastByCoord(43.93332, 4.93333)->cnt);
        $this->assertEquals(3026242, $weather->getForecastByCoord(43.93332, 4.93333)->city->id);
        $this->assertEquals("Clear", $weather->getForecastByCoord(43.93332, 4.93333)->list[0]->weather[0]->main);
        $this->assertEquals("01n", $weather->getForecastByCoord(43.93332, 4.93333)->list[0]->weather[0]->icon);
    }
}
