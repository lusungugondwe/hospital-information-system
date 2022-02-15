<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;
use App\Medication;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $prescriptions = Prescription::all();
        $meds = $prescriptions;
        return $meds;
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

             'visitation_id' => 'required',
        'medications_id' => 'required'
        ]);
        return Prescription::create($request->all());

    }

    public function storeArray(Request $request){
        $save = false;
        $items = $request->get('items');
        foreach($items as $item){
            $presc = new Prescription();
            $presc ->visitation_id = $item['visitation_id'];
            $presc ->medications_id  = $item['medications_id'];
            $save = $presc -> save();
        }
        if($save){
            return response([
            'message' => 'Prescription created succesifuly'], 201);
        }else{
            return response([
                'message' => 'Failled to create prescription'
            ], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")->get(['prescriptions.id','prescriptions.visitation_id','medications.name','medications.Price']);
        return $prescriptions;

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

    }
}
