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
    /**
     * store an array of object in storage by looping through each object
     * 
     * @param \Illuminate\Http\Request $request
     */
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

    /**
     * Updates values each element in an array of object in storage by looping through each object
     * 
     * @param \Illuminate\Http\Request $request
     */    
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
    /**
     * Retreiving a specific object from storage
     * 
     * @param \Illuminate\Http\Request $request
     * @return Prescription
     */    
    public function search(Request $request){
        return Prescription::where("medications_id",$request.medications_id)
                             ->where("visitation_id",$request.visitation_id)->get();
    }

    /**
     * Retrieves all objects with the specified $id
     * 
     * @param $id
     * @return Prescription
     */
    public function all($id){
        return Prescription::where("visitation_id",$id)->get();
    }

    /**
     * Retrives prescription details by joining the Medications table to Prescription on ID
     * 
     * @param \Illuminate\Http\Request $request
     * @return Prescription
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
     * Dispaly all the resource from storage that meet the conditions specified in the query
     *
     */
    public function reportMonthly($time)
    {
        if($time == "thisMonth"){
        $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
        ->whereMonth('prescriptions.created_at', Carbon::now()->month)
        ->where('Status', "1")
        ->groupBy('medications.name')
        ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue')
        ->orderBy('Total', 'DESC')
        ->get();
        return $prescriptions;
        }else if($time == "lastMonth"){
        $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
        ->whereMonth('prescriptions.created_at', Carbon::now()->subMonth()->month)
        ->where('Status', "1")
        ->groupBy('medications.name')
        ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue')
        ->orderBy('Total', 'DESC')
        ->get();
        return $prescriptions;       

        }else if($time == "thisYear"){
            $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
        ->whereYear('prescriptions.created_at', Carbon::now()->year)
        ->where('Status', "1")
        ->groupBy('medications.name')
        ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue')
        ->orderBy('Total', 'DESC')
        ->get();
        return $prescriptions;
        
        }else if($time == "lastYear"){
            $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
            ->whereYear('prescriptions.created_at', Carbon::now()->subYear()->month)
            ->where('Status', "1")
            ->groupBy('medications.name')
            ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue')
            ->orderBy('Total', 'DESC')
            ->get();
            return $prescriptions;
            

        }else {
            return response () -> json([
                'message' => "no time preiod passed"
            ]);
        }
    }

    /**
     * Dispaly all the resource from storage that meet the conditions specified in the query
     *
     */
    public function reportMonthlyUnPrsc($time)
    {
        if($time == "thisMonth"){
        $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
        ->whereMonth('prescriptions.created_at', Carbon::now()->month)
        ->where('Status', "0")
        ->groupBy('medications.name')
        ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue_lost')
        ->orderBy('Total', 'DESC')
        ->get();
        return $prescriptions;
        }else if($time == "lastMonth"){
            $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
        ->whereMonth('prescriptions.created_at', Carbon::now()->subMonth()->month)
        ->where('Status', "0")
        ->groupBy('medications.name')
        ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue_lost')
        ->orderBy('Total', 'DESC')
        ->get();
        return $prescriptions;
        }else if($time == "thisYear"){
            $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
            ->whereYear('prescriptions.created_at', Carbon::now()->year)
            ->where('Status', "0")
            ->groupBy('medications.name')
            ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue_lost')
            ->orderBy('Total', 'DESC')
            ->get();
            return $prescriptions;
            
        }else if($time == "lasYear"){
            $prescriptions = Prescription::join("medications","medications.id","=","prescriptions.medications_id")
            ->whereMonth('prescriptions.created_at', Carbon::now()->subYear()->year)
            ->where('Status', "0")
            ->groupBy('medications.name')
            ->selectRaw('medications.name,sum(prescriptions.Qauntity) as Total,medications.Price,(medications.Price * sum(prescriptions.Qauntity)) as Revenue_lost')
            ->orderBy('Total', 'DESC')
            ->get();
            return $prescriptions;         
        }else {
            return response () -> json([
                'message' => "no time preiod passed"
            ]);
        }

    }
}
