<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Deregister;
use App\Enrollment;
use App\Institution;
use App\Learner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        $institutions = Institution::all();

        return view('admin.home', compact('institutions'));
    }

    public function store(Request $request)
    {
        $learner =  new Learner();
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
        $learner->status = "accepted";
        $learner->user_id = $request->input('user_id');
        $learner->institution_id = $request->input('institution_id');
        $learner->save();

        if(request()->hasFile('guardian_document')) {
            $guardian_document = request()->file('guardian_document')->getClientOriginalName();
            request()->file('guardian_document')->storeAs('guardian_documents',$learner->id . '/' .$guardian_document, '');
            $learner->update(['guardian_document' => $guardian_document]);
        }

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $courses = Course::all()->where('level', '=', Auth::user()->learners->level);

        $centers = Course::all()
        ->where('institution_id', '=', Auth::user()->learners->institution_id)
        ->where('level', '=', Auth::user()->learners->level);

        $enrollments = Enrollment::all()->where('user_id', '=', Auth::user()->id);

        return view('learners.home', compact('enrollments', 'courses', 'centers'));
    }

    public function settings()
    {

        return view('settings.index');
    }

    public function courses()
    {
        $courses = Course::all()->where('level', '=', Auth::user()->learners->level);

        $enrollments = Enrollment::all()->where('user_id', '=', Auth::user()->id);

        return view('courses.index', compact('enrollments', 'courses'));
    }

    public function deregister(Request $request) {
        $deregister = new Deregister();
        $deregister->reason = $request->input('reason');
        $deregister->user_id = $request->input('user_id');
        $deregister->course = $request->input('course');
        $deregister->enrollment_id = $request->input('enrollment_id');
        $deregister->save();

        return redirect()->back();
        //return redirect()->route('dashboard');
    }

    public function newcourse()
    {
        $courses = Course::all()->where('level', '=', Auth::user()->learners->level);

        $centers = Course::all()
        ->where('institution_id', '=', Auth::user()->learners->institution_id)
        ->where('level', '=', Auth::user()->learners->level);
        
        return view('courses.create', compact('courses', 'centers'));
    }

    public function addcourse(Request $request)
    {
        $enroll = new Enrollment();
        $enroll->user_id = $request->input('user_id');
        $enroll->course = $request->input('course');
        $enroll->status = $request->input('status');
        $enroll->progress = $request->input('progress');
        $enroll->save();

        return redirect()->route('courses');
    }

    public function showcourse($id)
    {
        $enrollment = Enrollment::find($id);

       return view('courses.show', compact('enrollment'));
    }

    public function deletecourse($id)
    {
        $enrollment = Enrollment::find($id);

        $enrollment->delete();

        return redirect()->route('dashboard');
    }

    public function apply()
    {
        return view('learners.apply');
    }
}
