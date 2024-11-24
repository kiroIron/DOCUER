<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor.doctorhome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $doctor = Doctor::find($id);
        $input = $request->except('image');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName =uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $input['image'] = asset('images/'.$imageName);
        }
        $doctor->update($input);
        return redirect()->route('doctorprofile')->with('success','Doctor profile update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
    function doctorlogin(){
        return view('doctor.doctorlogin');
    }
    function doctorregister(){
        return view('doctor.doctor-register');
    }
    function logindoctor (Request $request){
     $credentials = $request->only('email','password');
     if (Auth::guard('doctors')->attempt($credentials)){
        return redirect()->route('doctor.index');
        // return "ok";
     }
     return redirect()->route('doctorlogin')->with('error','Invalid credentials');
    }
    function registerdoctor(Request $request){
        $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:doctors',
        'password'=>'required|min:8',
        ]);
        $input = $request->except('password');
        $input['password']= Hash::make($request->password);
        Doctor::create($input);
        return redirect()->route('doctorlogin')->with('success','Doctor registered successfully');
    }
    function profile(){
        $doctor = Auth::guard('doctors')->user();
    return view('doctor.doctor-settings', compact("doctor"));
    }
    function showdoctorprofle($id){
$doctor =Doctor::find($id);
return view('doctor.singledoctor',compact('doctor'));
    }
    function logout(){
        Auth::guard('doctors')->logout();
        return redirect()->route('/');
    }

}
