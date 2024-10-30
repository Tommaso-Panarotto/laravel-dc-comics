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

        $plant = Plant::create($formData);


        return redirect()->route("plant.show", ["id"=>$plant->id]);
    }

    public function edit(string $id){
       $plant = Plant::findOrFail($id);
        return view("plants.edit", compact("plant"));
    }

    public function update(string $id, Request $request){
        $formData = $request->all();

        $plant = Plant::findOrFail($id);

        $plant->update($formData);

        return redirect()->route("plant.show", ["id"=>$plant->id]);
    }
}