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
        $request->validate([
            'city'      => 'required|string|max:50',
            'price'     => 'numeric',
            'street'    => 'required|string|max:100',
            'is_rent'   => 'boolean',
            'free_from' => 'date',
            'rooms'     => 'integer|max:20',
            'surface'   => 'numeric',
        ]);
        $formData = $request->all();
        // dump($request);
        // dd($formData);

        //Opzione 1
        // $house = new House();
        // $house->city = $formData['city'];
        // $house->price = $formData['price'];
        // $house->street = $formData['street'];
        // $house->is_rent = $formData['is_rent'];
        // $house->free_from = $formData['free_from'];
        // $house->rooms = $formData['rooms'];
        // $house->surface = $formData['surface'];
        // // TODO: validare i dati prima di inviarli al database
        // $house->save();

        //Opzione 2 (se abbiamo definito $fillable nel model)
        $house = House::create($formData);

        // return redirect()->route('houses.index');
        return redirect()->route('houses.show', ['house' => $house]);
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


    public function edit(House $house)
    {
        return view('admin.houses.edit', compact('house'));
    }


    public function update(Request $request, House $house)
    {
        $formData = $request->all();
        $house->update($formData); //(se abbiamo definito $fillable nel model)

        return redirect()->route('houses.show', ['house' => $house]);
    }


    public function destroy(House $house)
    {
        // TODO: inplement soft deleting
        $house->delete();

        return redirect()->route('houses.index');
    }
}
