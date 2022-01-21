<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Visitation;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Patient::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $id = random_int(1,9999);
        $request -> merge(['id' => $id]);

        $request -> validate([
            'id' => 'required | unique:patients,id',
            'firstname' =>   'required',
            'surname'   =>   'required',
            'Phonenumber' =>  'required' ,
            'next_of_kin_contact' => 'required',
            'blood_group'  =>  'required',
            'Medical_scheme'   =>  'required',
            'Dob'   => 'required',
            'address'   => 'required'
        ]);
        return Patient::create($request->all());
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Patient::find($id);

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
        $patient = Patient::find($id);
        $patient->update($request->all());
        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Patient::destroy($id);
    }

    public function search($name)
    {
       return Patient::Where('firstname', 'like', '%'.$name.'%')
                       -> orWhere('surname', 'like', '%'.$name.'%')->get();
    }

    public function visits($id){
            $patient = Patient::find($id);
            return $patient->Visitation;
    }

    public function count(){
        $patient = Patient::all();
        return count($patient);
    }

}
