<?php

namespace App\Http\Controllers;

use App\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::all();
        return view('mentor',['mentors'=>$mentors,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentors = Mentor::all();
        return view('mentor',['mentors'=>$mentors,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mentor = new Mentor();
        $mentor->cne = $request->input('cne');
        $mentor->firstName = $request->input('firstName'); 
        $mentor->secondName = $request->input('secondName'); 
        $mentor->age = $request->input('age'); 
        $mentor->speciality = $request->input('subject'); 
        $mentor->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentor = Mentor::find($id);
        $mentors = Mentor::all();
        return view('mentor',['mentors'=>$mentors,'mentor'=>$mentor, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mentor = Mentor::find($id);
        $mentors = Mentor::all();
        return view('mentor',['mentors'=>$mentors,'mentor'=>$mentor, 'layout'=>'edit']);
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
        $mentor = Mentor::find($id);
        $mentor->cne = $request->input('cne');
        $mentor->firstName = $request->input('firstName') ;
        $mentor->secondName = $request->input('secondName') ;
        $mentor->age = $request->input('age') ;
        $mentor->speciality = $request->input('speciality') ;
        $mentor->save() ;
        return redirect('/') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $mentor = Mentor::find($id);
      $mentor->delete() ;
      return redirect('/') ;
    }
}
