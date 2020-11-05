<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Residence;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();
        return view('house/index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $residences = Residence::all();
        return view('house.addHouse', compact('residences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'block' => 'required|string',
            'owner' => 'required|string',
            'telephone' => 'required|string',
            'purchase_date' => 'required|string',
            'residential_area' => 'required|string',
        ]);

        House::create([
            'block' => $request['block'],
            'owner' => $request['owner'],
            'telephone' => $request['telephone'],
            'purchase_date' => $request['purchase_date'],
            'residential_area' => $request['residential_area'],
        ]);
        return redirect()->route('house.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        $residences = Residence::all();
        return view('house.editHouse', compact('house', 'residences'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        $request->validate([
            'block' => 'required|string',
            'owner' => 'required|string',
            'telephone' => 'required|string',
            'purchase_date' => 'required|string',
            'residential_area' => 'required|string',
        ]);

        $house->update($request->all());
        return redirect()->route('house.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        House::destroy($house->id);
        return redirect()->route('house.index');
    }
}
