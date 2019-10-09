<?php

namespace App\Repositories;

use App\Models\Pharmacy;

class productRepository
{
    protected $pharmacy;
    public $host = 'https://sec.winpharma.com';
    public $urlStock = '/webpasserelle/stock/';
    public $urlCommand = '/webpasserelle/demande/';
    public $port = 443;

    public function __construct(Pharmacy $pharmacy)
    {
        $this->pharmacy = $pharmacy;
    }

    public  function dataEncode($data)
    {
        $result = false;
        $result = gzencode($data, 9);

        return $result;
    }

    public  function dataDecode($data)
    {
        $result = false;
        $result = gzinflate(substr($data, 10, -8));
        dd($result);
        return $result;
    }

    public function sendCurl($host, $url, $port, $login, $password, $data)
    {
        $header  = array(
            "Content-Type: application/x-www-form-urlencoded",
            "Connection: close",
            "Accept-Encoding: gzip"
        );
        $content = 'login=' . $login . '&password=' . $password . '&data=' . base64_encode($data);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $host . $url);
        curl_setopt($ch, CURLOPT_PORT, $port);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

        $result  = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

    public function QueryStock($num_pharma, $login, $password)
    {
        $xmltext = '<?xml version="1.0" encoding="UTF-8"?><beldemande></beldemande>';

        $xml = simplexml_load_string($xmltext);
        $xml->addAttribute("date", date('Y-m-d'));
        $xml->addAttribute("version", "1.1");
        $xml->addAttribute("format", "REQUEST");
        $node = $xml->addChild("request");
        $node->addAttribute("type", "SSTOCK");
        $node->addAttribute("num_pharma", $num_pharma);
        $xmlData = $xml->asXML();

        $encodedData = $this->dataEncode($xmlData);


        $encodedResponse = $this->sendCurl($this->host, $this->urlStock, $this->port, $login, $password, $encodedData);

        $response = $this->dataDecode($encodedResponse);



        return $response;
    }


    public function QueryCommand($num_pharma, $products, $login, $password)
    {
        $xmltext = '<?xml version="1.0" encoding="UTF-8"?><beldemande></beldemande>';

        $xml = simplexml_load_string($xmltext);
        $xml->addAttribute("date", date('Y-m-d'));
        $xml->addAttribute("version", "1.1");
        $xml->addAttribute("type", "SUCCESS");
        $infact = $xml->addChild("infact");
        $vente = $infact->addChild("vente");
        $vente->addAttribute("num_pharma", $num_pharma);
        $vente->addAttribute("numero_vente", $num_pharma);
        $client = $vente->addChild("client");
        $client->addAttribute("client_id", "1");
        $client->addChild("nom", "Dupont");
        $client->addChild("prenom", "Pierre");
        $client->addChild("datenaissance", "1995-05-31");
        $adresse = $client->addChild("adresse_facturation");
        $adresse->addChild("rue1", "RAS");
        $adresse->addChild("rue2", "RAS");
        $adresse->addChild("code_postal", "56640");
        $adresse->addChild("ville", "RAS");
        $adresse->addChild("pays", "RAS");
        $adresse->addChild("tel", "699999999");
        $adresse->addChild("portable", "698989808");
        $adresse->addChild("email", "pierredupont@gmail.com");
        $vente->addChild("date_vente", now());

        foreach ($products as $item) {
            # code...
            $produits = $vente->addChild("lignevente");
            $produits->addChild("codeproduit", $item->codeproduit);
            $produits -> addChild("designation", $item -> designation);
            $produits -> addChild("quantite", $item -> quantite);
            $produits -> addChild("prix_brut", $item -> prix_brut);
            $produits -> addChild("remise", $item -> remise);
            $produits -> addChild("prix_net", $item -> prix_net);
            $produits -> addChild("tauxtva", $item -> tauxtva);
        }
        $xmlData = $xml->asXML();

        $encodedData = $this->dataEncode($xmlData);

        $encodedResponse = $this->sendCurl($this->host, $this->urlStock, $this->port, $login, $password, $encodedData);

        $response = $this->dataDecode($encodedResponse);

        return $response;
    }
}
