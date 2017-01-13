<?php

namespace Sbnet\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SbnetWeatherBundle:Default:index.html.twig');
    }
}
