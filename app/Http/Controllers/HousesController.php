<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    // TODO: personalizzare la pagina 404

    public function index()
    {
        $houses = House::all();
        // dump($houses);
        // TODO: implementare la paginazione dei risultati
        return view('admin.houses.index', compact('houses'));
    }


    public function create()
    {
        return view('admin.houses.create');
    }


    public function store(Request $request)
    {
        $formData = $request->all();
        // dump($request);
        // dump($formData);

        $house = new House();
        $house->city = $formData['city'];
        $house->price = $formData['price'];
        $house->street = $formData['street'];
        $house->is_rent = $formData['is_rent'];
        $house->free_from = $formData['free_from'];
        $house->rooms = $formData['rooms'];
        $house->surface = $formData['surface'];
        // TODO: validare i dati prima di inviarli al database
        $house->save();

        // TODO: fare il redirect
    }


    //SENZA DEPENDENCY INJECTION
    // public function show($id)
    // {
    //     // $house = House::find($id);
    //     // if (!$house) abort(404);

    //     $house = House::findOrFail($id);

    //     return view('admin.houses.show', compact('house'));
    // }
    //CON DEPENDENCY INJECTION
    public function show(House $house)
    {
        // dump($house);
        return view('admin.houses.show', compact('house'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
