<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    private $cars;
    private $classes = [];

    function __construct()
    {
        // $this -> cars = [
        //     'Ford',
        //     'BMW',
        //     'Mercedes'
        // ];

        $this->cars = Storage::json('cars2.json')["cars"];
        // dd($this->cars);

        foreach($this->cars as $car){
            if (isset($car["class"]) && !in_array($car["class"], $this->classes)){
                $this->classes[] = $car["class"];
            }
        }
        sort($this->classes);
        dd($this->classes);

    }

    function showCars(){

        return view('cars', ['cars' => $this->cars]);
    }
}
