<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Visitation;
use App\Medication;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Collection;

class VisitationController extends Controller
{
    /**
     * Display a listing of the all visitations
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Visitation::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now()->format('d-m-y'); //creating a date in day month year format
        $userID = Auth::user()->id; // getting user id;
        //adding userID and visit day to $request
        $request -> merge(['user_id' => $userID]);
        $request -> merge(['visit_day' => $date]);
        $request -> merge(['Status' => "Active"]);
        $request -> validate([
            'patient_id' => 'required',
            'user_id' => 'required',
            'Description' => 'required',
            'visit_day' => 'required',
            'Status' => 'required',
        ]);
            return Visitation::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return Visitation::where('patient_id', $id)->get();
    }
 // displaying a specified resource by passing in the $id of the user that has created it
    public function adminster($id){
        return Visitation::where('user_id', $id)->orderBy('id','desc')->get();
    }

    //getting patients visits to day by passing in the patients_Id as $id 
    public function today($id)
    {
        $date = Carbon::now()->format('d-m-y');

        return Visitation::where('patient_id', $id)
                            ->where('visit_day',$date)->orderBy('id','desc')->get();
    }

// displaying all visits that do not have a prescription assigned to them by using an eloquent relation
    public function Active(){
        return Visitation::doesntHave('Prescription')->orderBy('id','desc')->get();
    }
// displaying all visits that have there status as Completed
    public function reportMonthly(){
        return Visitation::where('Status','Complete')
                            ->whereMonth('created_at', Carbon::now()->month)
                            ->orderBy('id','desc')->get();
    }

    // displaying Visits that have their status eqaul to the param $status 
    public function activeVisits($status){
        return Visitation::where('Status',$status)->orderBy('id','desc')->get();
    }
// displaying all visits that do not have a prescription assigned to them by using an eloquent relation
    public function lab(){
        return Visitation::doesntHave('Prescription')->orderBy('id','desc')->get();
    }

    //displaying all visits that donot have a prescription but a have a test order with no lab results
    public function orders(){
        $nll = !null;
        return Visitation::doesntHave('Prescription')->whereNotNull('Test_Order')->whereNull('lab_results')->orderBy('id','desc')->get();
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
        $visitation = Visitation::find($id);
        $visitation ->update($request->all());
        return $visitation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    // displaying medications given on a particular visit by passing the param visit ID as $id
    public function prescription($id){
        $visitation = Visitation::find($id);
        $meds =  $visitation->Medication()->get();
        return $meds;
   }
   // displaying the services offered on a particular visit by passing the param visit ID as $id
    public function Services($id){
        $visitation = Visitation::find($id);
        $visits =  $visitation->Services()->get();
        return $visits;
    }
        /**
     * Display monthly Diagoniss report
     */
    public function diagnosis(){
        return Visitation::join('patients','patients.id','=','visitations.patient_id')
                                ->where('Status','Complete')
                                ->get();        
    }


}
