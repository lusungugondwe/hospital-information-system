<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Medication;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medication::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
        'name' => 'required',
        'Type' => 'required',
        'Price' => 'required'
    ]);
        return Medication::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Medication::find($id);
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

        $medication = Medication::find($id);
        $medication ->update($request->all());
        return $medication;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Medication::destroy($id);
    }
     /**
     * Retreives a specific resoiurce with the specified parameter
     * 
     * @param string $name
     * 
     * @return Medication
     */public function search($name)
    {
       return Medication::where('name', 'like', '%'.$name.'%')->get();
    }
}
