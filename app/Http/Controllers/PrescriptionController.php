<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;
use App\Medication;
use Carbon\Carbon;

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
        $request -> merge(['Qauntity' => 1]);
        $request -> merge(['Status' => 0]);
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
            $presc ->Qauntity = $item['Qauntity'];
            $presc ->Status = $item['Status'];
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

    public function upArray(Request $request){
        $save = false;
        $items = $request->get('items');
        foreach($items as $item){
            $save = Prescription::where('visitation_id',$item['visitation_id'])
                                    ->where('medications_id',$item['medications_id']) -> update(['Qauntity' => $item['Qauntity'],'Status' => $item['Status']]);
                  
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

    public function search(Request $request){
        return Prescription::where("medications_id",$request.medications_id)
                             ->where("visitation_id",$request.visitation_id)->get();
    }

    public function all($id){
        return Prescription::where("visitation_id",$id)->get();
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
        $patient = Prescription::find($id);
        $patient->update($request->all());
        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reportMonthly()
    {
        $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
        ->whereMonth('prescriptions.created_at', Carbon::now()->month)
        ->where('Status', "1")
        ->groupBy('medications.name')
        ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue')
        ->orderBy('Total', 'DESC')
        ->get();
        return $prescriptions;

    }
    public function reportMonthlyUnPrsc()
    {
        $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
        ->whereMonth('prescriptions.created_at', Carbon::now()->month)
        ->where('Status', "0")
        ->groupBy('medications.name')
        ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue')
        ->orderBy('Total', 'DESC')
        ->get();
        return $prescriptions;

    }
}
