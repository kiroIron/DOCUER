<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Patient.home');
    }
    function patient_doctors(){
        $doctors =Doctor::all();
        return view('Patient.patient-doctors',compact('doctors'));
    }

    function profile(){
        $user = Auth::user();
        $bloodgroups=['A-','A+','B-','B+','AB-','AB+','O-','O+'];
    return view('patient.patient-setting',compact('user','bloodgroups'));
    }
    public function updateprofile (Request $request ,$id){
    $user =User::find($id);
    $input =$request->except(('image'));
    if($request->hasFile('image')){
    $image =$request->file('image');
    $imageName = uniqid().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('image'),$imageName);
    $input['image'] =asset('image/'.$imageName);
    }
    $user->update($input);
    return redirect()->route('patientprofile')->with('success','profile update successfully');
    }

    function logout(){
        Auth::guard('User')->logout();
        return redirect()->route('/');
    }
    public function book($id) {
        $doctor =Doctor::find($id);
        return view ('patient.booking');
    }
    public function makeappointment(Request $request){
        
    }
}
