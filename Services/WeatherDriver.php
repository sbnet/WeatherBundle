<?php
namespace  Sbnet\WeatherBundle\Services;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

abstract class WeatherDriver
{
    /**
     * Get json data from an url
     * It uses the symfony cache system introduced in version 3.1
     *
     * @param string $url
     * @return object Return the forecast data
     */
    public function getJsonFromUrl($url)
    {
        $cache = new FilesystemAdapter();
        $cjson = $cache->getItem(md5('sbnet.weatherbundle.'.$url));

        if (!$cjson->isHit()) {
            $cjson->expiresAfter(7200); // 2 hours

            $ch = curl_init();

            // Disable SSL verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Set the url
            curl_setopt($ch, CURLOPT_URL, $url);

            // Execute
            $result = curl_exec($ch);

            // Closing
            curl_close($ch);
            $cjson->set($result);
            $cache->save($cjson);
        }

        return json_decode($cjson->get());
    }
}
