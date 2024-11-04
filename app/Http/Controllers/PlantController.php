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

        $request->validate([
            "name"=> "required|string|min:3|max:20",
            "species"=> "required|string|min:3|max:20",
            "habitat"=> "required|string|min:3|max:40",
            "exposure"=> "required|string|min:3|max:30",
            "description"=> "required|min:20|max:200",
            "image"=> "required|url"
            ]);

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

    public function destroy(string $id){
        $plant = Plant::findOrFail($id);

        $plant->delete();

        return redirect()->route("plant.index");
    }
}
