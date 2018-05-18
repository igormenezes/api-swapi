<?php

namespace App\Services;

use App\Services\ApiInterface;

class Swapi implements ApiInterface
{
    private static $_url = 'https://swapi.co/api/people/';

    public static function initialize()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::$_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);

        return self::formatResult($json);
    } 
    
    private static function formatResult($json)
    {
        $i = 0;
        $data = json_decode($json);
        $array = [];
        
        foreach($data->results as $values){
            $array[$i]['nome'] = $values->name;
            $array[$i]['altura'] = $values->height;
            $array[$i]['peso'] = $values->mass;
            $array[$i]['cor_cabelo'] = $values->hair_color;
            $array[$i]['cor_pele'] = $values->skin_color;
            $array[$i]['cor_olhos'] = $values->eye_color;
            $array[$i]['sexo'] = $values->gender;
            $i++;
        }

        return $array;
    }
}