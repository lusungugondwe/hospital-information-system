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
    /**
     * Retreives objects from storage with the specified $id
     * 
     * @param int $id
     * @return visitation
     */
    public function adminster($id){
        return Visitation::where('user_id', $id)->orderBy('id','desc')->get();
    }

    /**
     * Retreives all objects from storage that have the specified patients id and are recorded today
     * 
     * @param int $id
     * @return Visitation
     */
    public function today($id)
    {
        $date = Carbon::now()->format('d-m-y');

        return Visitation::where('patient_id', $id)
                            ->where('visit_day',$date)->orderBy('id','desc')->get();
    }

    /**
     * Retreives all objects from storage that are have an active status
     * 
     * 
     * @return Visitation
     */
    public function Active(){
        return Visitation::doesntHave('Prescription')->orderBy('id','desc')->get();
    }
    /**
     * Retreives all objects from storage that have the specified $time
     * 
     * @param string $id
     * @return Visitation
     */
    public function reportMonthly($time){
        if($time == "thisMonth"){
        return Visitation::where('Status','Complete')
                            ->whereMonth('created_at', Carbon::now()->month)
                            ->orderBy('id','desc')->get();
        }else if($time == "lastMonth"){
            return Visitation::where('Status','Complete')
                            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
                            ->orderBy('id','desc')->get();
        }else if($time == "thisYear"){
            return Visitation::where('Status','Complete')
                            ->whereYear('created_at', Carbon::now()->year)
                            ->orderBy('id','desc')->get();
        }else if($time == "lastYear"){
            return Visitation::where('Status','Complete')
                            ->whereYear('created_at', Carbon::now()->subYear()->year)
                            ->orderBy('id','desc')->get();
        }else {
            return response () -> json([
                'message' => "no time preiod passed"
            ]);
        }                
    }

    /**
     * Retreives all objects from storage that have the specified status
     * 
     * @param string $status
     * @return Visitation
     */
    public function activeVisits($status){
        return Visitation::where('Status',$status)->orderBy('id','desc')->get();
    }
    /**
     * Retreives all objects from storage that do not have a prescription object 
     * 
     * 
     * @return Visitation
     */
    public function lab(){
        return Visitation::doesntHave('Prescription')->orderBy('id','desc')->get();
    }

    /**
     * Retreives all objects from storage that do not have the a prescription object but havea test_order 
     *
     * @return Visitation
     */
    public function orders(){
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
     * Retreving all medications object for the visitation object
     *
     * @param  int  $id
     * @return Medication
     */
    public function prescription($id){
        $visitation = Visitation::find($id);
        $meds =  $visitation->Medication()->get();
        return $meds;
   }
   /**
     * Retreives all objects from storage that have the $id
     * 
     * @param int $id
     * @return Visitation
     */
    public function Services($id){
        $visitation = Visitation::find($id);
        $visits =  $visitation->Services()->get();
        return $visits;
    }
    /**
     * Retreives all objects from storage that have the specified $time
     * 
     * @param string $time
     * @return Visitation
     */
    public function diagnosis($time){
        if($time == "thisMonth"){
        return Visitation::join('patients','patients.id','=','visitations.patient_id')
                                ->whereMonth('visitations.created_at', Carbon::now()->month)
                                ->where('Status','Complete')
                                ->get();
                            }else if ($time == 'thisYear'){
                                return Visitation::join('patients','patients.id','=','visitations.patient_id')
                                ->whereYear('visitations.created_at', Carbon::now()->year)
                                ->where('Status','Complete')
                                ->get();
                            }else if ($time == 'lastMonth'){
                                return Visitation::join('patients','patients.id','=','visitations.patient_id')
                                ->whereMonth('visitations.created_at', Carbon::now()->subMonth()->month)
                                ->where('Status','Complete')
                                ->get();
                            }else if($time == 'lastYear'){
                                return Visitation::join('patients','patients.id','=','visitations.patient_id')
                                ->whereYear('visitations.created_at', Carbon::now()->subYear()->year)
                                ->where('Status','Complete')
                                ->get();
                            } else {
                                return response () -> json([
                                    'message' => "no time preiod passed"
                                ]);
    }        
    }


}
