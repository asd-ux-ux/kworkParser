<?php
namespace Kwork;

class KworkParser
{
    public function parse()
    {
        $httpClient = new \GuzzleHttp\Client();
        $response = $httpClient->get('https://books.toscrape.com/');
        $htmlString = (string) $response->getBody();

        return $htmlString;
    }
}