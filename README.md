# Informations

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/549b4d9d-c714-4b5f-bf9d-61ea98301bae/big.png)](https://insight.sensiolabs.com/projects/549b4d9d-c714-4b5f-bf9d-61ea98301bae)

This bundle uses :
 * The [OpenWeatherMap API](http://openweathermap.org/api) - This is a work in progress
 * The [Weather Channel API](https://www.wunderground.com/weather/api) - This is planned
 * The cache component available from the Symfony version 3.1

# How to use this bundle

## Just add it to your composer file
```yaml
"sbnet/weatherbundle": "dev-master"
```
And activate it in your app/AppKernel.php file

## Configure your api key
Put your key in the app/config/parameters.yml file

For Open Weather Map
```yaml
sbnet_weather.owm.key: <key>
```
Or for the Weather Channel
```yaml
sbnet_weather.wc.key: <key>
```

## You can use it from your controller
```php
$weather = $this->container->get("sbnet.weather.owm");
$forecast = $weather->getForecastByCoord(43.93332, 4.93333);
```

# Work in progress
## Open Weather Map
* getForecastByCoord()
* getForecastByName()
* ~~getForecastById()~~
* ~~getCurrentByCoord()~~
* ~~getCurrentById()~~
* ~~getCurrentByName()~~
* ~~getIconUrlById()~~

## Weather Channel
This driver will be started when OWM driver will be finished

# License

Copyright (c) 2015 Stephane BRUN

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
