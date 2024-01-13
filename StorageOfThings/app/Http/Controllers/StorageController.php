<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;
use App\Models\Place;
use App\Models\Uses;

class StorageController extends Controller
{
    public function index()
    {
        $things = Thing::all();
        $places = Place::all();

        return view('index', compact('things', 'places'));
    }

    public function deleteThing($id)
    {
        Thing::destroy($id);
        return redirect()->route('index');
    }
    
    public function deletePlace($id)
    {
        Place::destroy($id);
        return redirect()->route('index');
    }
    
    public function editThing($id)
    {
        $thing = Thing::findOrFail($id);
        return view('edit_thing', compact('thing'));
    }
    
    public function updateThing(Request $request, $id)
    {
        $thing = Thing::findOrFail($id);
        $thing->update($request->all());
        return redirect()->route('index');
    }
    
    public function editPlace($id)
    {
        $place = Place::findOrFail($id);
        return view('edit_place', compact('place'));
    }
    
    public function updatePlace(Request $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->update($request->all());
        return redirect()->route('index');
    }



    public function addThing(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'wrnt' => 'nullable',
            'master' => 'required',
        ]);

        $thing = Thing::create($data);

        return redirect()->route('index');
    }

    public function addPlace(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'repair' => 'boolean',
            'work' => 'boolean',
        ]);

        $place = Place::create($data);

        return redirect()->route('index');
    }
}


    



