<?php

namespace App\Entities;

class Duck
{
    public function getAll()
    {
        return [
            0 => [
                "name" => "luis",
                "color" => "blue",
                "is_duck" => false
            ],
            1 => [
                "name" => "rafael",
                "color" => "yellow",
                "is_duck" => true
            ],
            2 => [
                "name" => "marilza",
                "color" => "yellow",
                "is_duck" => true
            ],
            3 => [
                "name" => "biroliro",
                "color" => "pink",
                "is_duck" => false
            ],
            4 => [
                "name" => "roberto",
                "color" => "green",
                "is_duck" => false
            ],
            5 => [
                "name" => "rosilda",
                "color" => "red",
                "is_duck" => false
            ],
        ];
    }
}
