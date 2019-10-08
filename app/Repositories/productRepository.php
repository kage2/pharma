<?php

namespace App\Repositories;

use App\Models\Pharmacy;

class productRepository
{
    protected $pharmacy;
    public $host = 'https://sec.winpharma.com';
    public $url = '/webpasserelle/stock/';
    public $port = 443;

    public function __construct(Pharmacy $pharmacy)
    {
        $this->pharmacy = $pharmacy;
    }

    public  function dataEncode($data) {
        $result = false;
        $result = gzencode($data, 9);
        return $result;
    }

    public  function dataDecode($data) {
        $result = false;
        $result = gzinflate(substr($data, 10, -8));
        return $result;
    }

    public function sendCurl($host, $url, $port, $login, $password, $data) {
        $header  = array(
            'Content-Type: application/x-www-form-urlencoded' ,
            'Connexion: close',
            'Accept-Encoding: gzip'
        );
        $content = 'login='.$login.'&password='.$password.'&data='.base64_decode($data);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $host.$url);
        curl_setopt($ch, CURLOPT_PORT, $port);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_PORT, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

        $result  = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

    public function Query($num_pharma, $login, $password) {
        $xmltext = '<?xml version="1.0" encoding="UTF-8"?><beldemande></beldemande>';

        $xml = simplexml_load_string($xmltext);
        $xml -> addAttribute("date", date('Y-m-d'));
        $xml ->addAttribute("version", "1.1");
        $xml -> addAttribute("format", "REQUEST");
        $node = $xml -> addChild("request");
        $node -> addAttribute("type", "SSTOCK");
        $node -> addAttribute("num_pharma", $num_pharma);
        $xmlData = $xml -> asXML();

        $encodedData = dataEncode($xmlData);

        $encodedResponse = sendCurl($this->host, $this->url, $this->port, $login, $password, $encodedData);

        $response = dataDecode($encodedResponse);

        return $response;
    }

}

