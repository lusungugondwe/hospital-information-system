<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitation;
use App\Medication;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Collection;

class VisitationController extends Controller
{
    /**
     * Display a listing of the resource.
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
        $date = Carbon::now()->format('d-m-y'); // date in day month year format
        //adding visit day to $request
        $request -> merge(['visit_day' => $date]);
        $request -> validate([
            'patient_id' => 'required',
            'Description' => 'required',
            'visit_day' => 'required'
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

    //getting todays patient visits
    public function today($id)
    {
        $date = Carbon::now()->format('d-m-y');

        return Visitation::where('patient_id', $id)
                            ->where('visit_day',$date)->get();
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
    //public function today(){
      //  return Visitation::where('patient_id', 'like', '%'.$id.'%')->get();
    //}

    public function prescription($id){
        $visitation = Visitation::find($id);
        $meds =  $visitation->Medication()->get();
        return $meds;
   }

    public function Services($id){
        $visitation = Visitation::find($id);
        $visits =  $visitation->Services()->get();
        return $visits;
    }

}
