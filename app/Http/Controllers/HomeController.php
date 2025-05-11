<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\posts;
use App\Models\News;
use App\Models\events;
use App\Models\team;
use App\Models\event;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Mail;
use Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::id()){
            $posts=posts::all();
            $new = news::all();
            $usertype=Auth()->user()->usertype;


            if($usertype=='user'){
                return view('Home.homepage', compact('posts','new'));
            }


            else if($usertype=='admin' ){
                $events=event::all()->count();
                $team=team::all()->count();
                $posts=posts::all()->count();
                 $Blogs=News::all()->count();
                return view ('Admin.adminhome',compact('team','posts','Blogs','events'));
            }

            else{
                return redirect()->back();
            }


        }
    }



/*
====================================================================================================================
testing a new ADMIN2
====================================================================================================================
*/
public function admin2()
{
    return view('Admin2.adminhome');

}


/*
====================================================================================================================
END OF  a new ADMIN2
====================================================================================================================
*/







    public function homepage()
    {
        $posts= posts::all();
        $new = News::orderBy('created_at', 'desc')->paginate(3);

        return view('Home.homepage', compact('posts','new'));
    }


    public function post_details($id) {
        $post = Posts::find($id);
      
        // Order events by their creation date (assuming a "created_at" column) in descending order
        $event = event::orderBy('created_at', 'desc')->get();
       
      
        return view('Home.post_details', compact('post', 'event'));
      }
      //contact us page
     public function contactus_page()
    {
        return view('Home.contactus_page');
    }

    /* 
    =============================================================================
    Contact form submit
    ============================================================================

    */
      //creceive submit_contact_form data via an array
      public function submit_contact_form(Request $request)
      {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the data to the database
        $contactForm = ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Send the email
        Mail::to('pemaksoftwares@gmail.com')->send(new ContactMail($request));

        // Flash a success message to the session
        session()->flash('message', 'Thank you for your Email!');

        // Redirect to the contact us page
        return redirect('contactus_page');
      }
       /* 
    =============================================================================
    Contact form  submit end
    ============================================================================

    */


      
      //end
    //team page
    public function team_page()
    {
        $team1 = team::orderBy('created_at', 'desc')->paginate(8);
        return view('Home.team_page', compact('team1'));
    }

    
    public function about_main_page()
    {
        
        return view('Home.about_main_page');
    }
    public function faq_page()
    {
        
        return view('Home.faq_page');
    }

    

    

 

       public function user_profile()
    {
        return view('Home.userprofile');
    }



    


   

}
