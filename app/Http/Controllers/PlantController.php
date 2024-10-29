<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function index(){
        $plants = Plant::all();
        return view("plants.index",compact("plants"));
    }
}