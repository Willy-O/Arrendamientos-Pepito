<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBuilding;
use App\Models\Building;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inmuebles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inmuebles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validated();
        // $inmueble = new Building;
        // $inmueble->name = $request->get('name');
        // $inmueble->description = $request->get('description');
        // $inmueble->price = $request->get('price');
        // $inmueble->address = $request->get('address');
        // $inmueble->zip = $request->get('zip');
        // $inmueble->city = $request->get('city');
        // $inmueble->state = $request->get('state');
        // $inmueble->country = $request->get('country');

        $inmueble = new Building($request->all());

        if ($request->hasFile('photo')){
            $photo = $request->file('photo');
            $file = $photo->store('img');
            $inmueble->photo = $file;
        }

        $inmueble->save();

        return redirect()->route('inmuebles', $inmueble);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inmueble = Building::find($id);

        return view('inmuebles.show', compact('inmueble'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
