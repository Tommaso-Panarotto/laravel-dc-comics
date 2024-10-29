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

    public function show(string $id){
        $plant = Plant::findOrFail($id);
        return view("plants.show", compact("plant"));
    }

    public function create(){
        return view("plants.create");
    }

    public function store(Request $request){

        $formData = $request->all();

        $plant =new Plant();
        $plant->name =$formData["name"];
        $plant->species =$formData["species"];
        $plant->habitat =$formData["habitat"];
        $plant->exposure =$formData["exposure"];
        $plant->description =$formData["description"];
        $plant->image =$formData["image"];
        $plant->save();


        return redirect()->route("plants.show", ["id"=>$plant->id]);
    }
}