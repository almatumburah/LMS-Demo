<?php

namespace App\Http\Controllers;

use App\Learner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class LearnersController extends Controller
{

    public function index()
    {
        $learners = Learner::all();

        return view('admin.learners.index', compact('learners'));
    }

   
    public function create()
    {
        
    }

 
    public function store(Request $request)
    {
       
    }

 
    public function show($id)
    {
       $learner = Learner::find($id);
       return view('admin.learners.show', compact('learner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $learner = Learner::find($id);
       return view('admin.learners.edit', compact('learner'));
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
        $learner = Learner::find($id);
        $learner->first_name = $request->input('first_name');
        $learner->last_name = $request->input('last_name');
        $learner->dob = $request->input('dob');
        $learner->gender = $request->input('gender');
        $learner->level = $request->input('level');
        $learner->contact = $request->input('contact');
        $learner->address = $request->input('address');
        $learner->city = $request->input('city');
        $learner->province = $request->input('province');
        $learner->eligible_based_on = $request->input('eligible_based_on');
        $learner->current_school = $request->input('current_school');
        $learner->next_of_kin = $request->input('next_of_kin');
        $learner->next_of_kin_address = $request->input('next_of_kin_address');
        $learner->status =  'accepted';
        $learner->update();

        return redirect()->route('registrants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $learner = Learner::findOrFail($id);
        $learner->delete();
        return redirect()->route('registrants.index');
    }
}
