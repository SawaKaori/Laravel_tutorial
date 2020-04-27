<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\pet;

class SampleController extends Controller
{
    public function index(){

        $flower_list  = [
            [
                "name" => "himawari",
                "price" => 100
            ],
            [
                "name" => "rose",
                "price" => 200
            ],
            [
                "name" => "yuri",
                "price" => 250
            ],
        ];

        $total = 0;
        foreach($flower_list as $flower) {
            $total += $flower["price"];
        }


        return view('sample', ['flower_list' => $flower_list, 'total' => $total]);
    }

    public function select(){

        $pochi = pet::find(1);

        return view('select',["pochi" => $pochi]);
    }
}
