<?php

namespace Pyrrah\OpenWeatherMapBundle\Controller;

use Pyrrah\OpenWeatherMapBundle\Services\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    /**
     * Passes a request to the OpenWeatherMap API while adding the API key. This enables
     * you to expose the OpenWeatherMap API on your own domain.
     *
     * @Route("{name}.{format}", requirements={"name"=".+", "format"="(json|xml)"})
     * @Template()
     */
    public function apiAction($name, $format, Request $request)
    {
        $parameters = array();
        foreach ($request->query as $key => $value) {
            $parameters[$key] = $value;
        }
        foreach ($request->request as $key => $value) {
            $parameters[$key] = $value;
        }

        $parameters['mode'] = $format;

        /** @var Client $client */
        $client = $this->get('pyrrah.openweathermap.client');
        $response = $client->query($name, $parameters);

        return new Response($response->getContent(), $response->getStatusCode(), array('Content-Type' => $response->getHeader('Content-Type')));
    }
}
