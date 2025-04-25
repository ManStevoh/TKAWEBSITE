<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use Mail;
use App\Mail\EnrollmentMail;

class EnrolmentForm extends Controller
{
    public function Enrolment_page()
    {
        return view('Enrolment.enrolment_page');
    }



    //to submit enrolment data

   public function submit_enrollment_form(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'dob' => 'required|date',
        'gender' => 'required|string',
        'residential_area' => 'required|string|max:255',
        'parent_name' => 'required|string|max:255',
        'parent_id' => 'required|string|max:255',
        'parent_phone' => 'required|string|max:15',
        'program' => 'required|string|max:255',
        'program_level' => 'required|string|max:255',
        'payment_method' => 'required|string|max:255',
    ]);

    // Save the data to the database
    $enrollment = Enrollment::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'residential_area' => $request->residential_area,
        'parent_name' => $request->parent_name,
        'parent_id' => $request->parent_id,
        'parent_phone' => $request->parent_phone,
        'program' => $request->program,
        'program_level' => $request->program_level,
        'payment_method' => $request->payment_method,
    ]);

    // Send the email
    Mail::to('pemaksoftwares@gmail.com')->send(new EnrollmentMail($request->all()));

    // Flash a success message to the session
    session()->flash('message', 'Thank you for your Enrollment!');

    // Redirect to a success page
    return redirect('Enrolment_page');
}


}
