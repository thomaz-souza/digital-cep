<?php

namespace DigitalCEP;


class Search
{
    private $url =  "https://viacep.com.br/ws/";

    public function getAddressFromZipCode(string $zipcode)
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

        $get = file_get_contents($this->url . $zipcode . "/json");

        return (array) json_decode($get);
    }
}
// https://viacep.com.br/ws/01001000/json/