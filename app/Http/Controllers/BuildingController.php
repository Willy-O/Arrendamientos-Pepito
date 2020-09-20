<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @param  StoreBuilding|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuilding $request)
    {
        return 'Store';
        // $inmueble = new Buildign;
        // $inmueble->name = $request->get('name');
        // $inmueble->lastName = $request->get('description');
        // $inmueble->gender = $request->get('price');
        // $inmueble->dateBorn = $request->get('address');
        // $inmueble->email = $request->get('zip');
        // $inmueble->homeAddress = $request->get('city');
        // $inmueble->cellPhone = $request->get('state');
        // $inmueble->homePhone = $request->get('country');

        // $beneficiary->save();

        // return redirect()->route('inmuebles',   ['inmueble' => $inmueble->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
