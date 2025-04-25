<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\News;
use App\Models\event;
use App\Models\team;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function post_page()
    {
        return view('Admin.post_page');
    }

    public function add_post(Request $request)
    {
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;




        $post=new posts;
        $post->title = $request-> title;
        $post->description = $request-> description;
        $post->post_status = 'active';
        $post->user_id = $userid;
        $post->name =$name;
        $post->usertype = $usertype;
        
    


        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('postimage',$imagename);

        $post->image = $imagename;


        }




        $post->save();
        return redirect()->back()->with('message','post added succesfully');




    }

    public function show_post()
    {
        $post=posts::paginate(10);



        return view('Admin.show_post', compact('post'));

    }

    public function delete_post($id)
    {

        $post=posts::find($id);

        $post->delete();
        return redirect()->back()->with('message','post Deleted Succesfully');
    }

    public function edit_page($id)
    {
        $post=posts::find($id);
        return view('Admin.edit_page',compact('post'));


    }
    public function update_post(Request $request,$id)
    {
        $data=posts::find($id);

        $data->title=$request->title;

        $data->description=$request->description;

        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('postimage',$imagename);

        $data->image = $imagename;



        }

        $data->save();

        return redirect()->back()->with('message', 'Post Updated Succesfully');
      

    }

    public function all_blogs()
    {
       
        //$posts= posts::all();
        $posts = posts::orderBy('created_at', 'desc')->paginate(6);

        

        return view('Home.all_blogs', compact('posts',));
 

    }


/*
========================================================================
NEWS PAGE FUNCTIONS
=============================================
*/

public function news_page($id)
{
   // $new = News::orderBy('created_at', 'desc')->paginate(2);
    //$new= news::paginate(2);


    $new= news::find($id);

    return view('News.main_body' , compact('news'));

}

    


        public function news_post()
    {
        return view('Admin.news_post');
    }

    public function add_news(Request $request)
    {

         $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;




        $post=new news;
        $post->title = $request-> title;
        $post->description = $request-> description;
        $post->post_status = 'active';
        $post->user_id = $userid;
        $post->name =$name;
        $post->usertype = $usertype;
        
    


        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('newsimage',$imagename);

        $post->image = $imagename;


        }




        $post->save();
        return redirect()->back()->with('message','news posted succesfully');



    }
    //
    
/*shows news in news body section only

    
    public function show_news()
    {
        $news=news::all();



        return view('News.body_news_section', compact('news'));

    }*/
    //to show all news n a new page
    
    public function show_all_news()
    {
        $new=news::all();
       
        $new = News::orderBy('created_at', 'desc')->paginate(6);



        return view('News.show_all_news', compact('new'));

    }
    //
    
   public function main_news_view($id)
{
    $news = News::find($id);

    // Order events by their creation date in descending order and get all events
    $event = event::orderBy('created_at', 'desc')->get();

    return view('News.main_news_view', compact('news', 'event'));


}

  ///SINGLE EVENT VIEW
   public function single_event($id)
{
    $news = event::find($id);

    // Order events by their creation date in descending order and get all events
    $event = event::orderBy('created_at', 'desc')->get();

    return view('Events.single_event_view', compact('news', 'event'));
}
    /*
    ================================================
    news admin functions

    ================================================
    */

    public function show_news()
    {
        $News=News::paginate(10);



        return view('Admin.show_news', compact('News'));
       
    }
    public function delete_news($id)
    {

        $new=news::find($id);

        $new->delete();
        return redirect()->back()->with('message','post Deleted Succesfully');
    }

     public function edit_news($id)
    {
        $post=news::find($id);
        return view('Admin.edit_news',compact('post'));


    }

     public function update_news(Request $request,$id)
    {
        $data=news::find($id);

        $data->title=$request->title;

        $data->description=$request->description;

        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('newsimage',$imagename);

        $data->image = $imagename;



        }

        $data->save();

        return redirect()->back()->with('message', 'news Updated Succesfully');
      

    }

    /*
    ================================================
    nevents admin functions

    ================================================
    */
    public function post_events()
    {
        return view('Events.post_event');
    }


     public function add_event(Request $request)
    {
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;




        $post=new event;
        $post->title = $request-> title;
        $post->description = $request-> description;
        $post->post_status = 'active';
        $post->user_id = $userid;
        $post->name =$name;
        $post->usertype = $usertype;
       
        $post->venue = $request-> venue;
        //$post->event_date = $request-> event_date;
        $post->start_time = $request-> start_time;
        $post->end_time = $request-> end_time;
        
    


        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('eventimage',$imagename);

        $post->image = $imagename;


        }




        $post->save();
        return redirect()->back()->with('message','Event added succesfully');




    }

      public function show_events()
    {
        $post=event::paginate(4);



        return view('Events.show_all_events', compact('post'));
       
    }
     public function delete_event($id)
    {

        $post=event::find($id);

        $post->delete();
        return redirect()->back()->with('message','Deleted Succesfully');
    }

    public function update_event($id)
    {
        $post=event::find($id);
        return view('Events.edit_events',compact('post'));


    }

    
     public function edit_events(Request $request,$id)
    {
        $data=event::find($id);

        $data->title=$request-> title;

        $data->description=$request-> description;

         $data->venue = $request-> venue;
      //  $data->event_date = $request-> event_date;
        $data->start_time = $request-> start_time;
        $data->end_time = $request-> end_time;

        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('eventimage',$imagename);

        $data->image = $imagename;



        }

        $data->save();

        return redirect()->back()->with('message', 'Updated Succesfully');
      

    }

     /*
    ================================================
    TEAM  admin functions

    ================================================
    */
    public function add_team()
    {
        return view('team.add_team');
    }

    public function post_team(Request $request)
    {
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;




        $post=new team;
        $post->title = $request-> title;
        $post->designation = $request-> designation;
        $post->description = $request-> description;
        $post->post_status = 'active';
        $post->user_id = $userid;
        $post->name =$name;
        $post->usertype = $usertype;
        $post->role = $request-> role;

        
    


        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('teamimage',$imagename);

        $post->image = $imagename;


        }
        $post->save();
        return redirect()->back()->with('message','added succesfully');
    }
    public function show_team()
    {
        $team=team::paginate(4);



        return view('team.show_team', compact('team'));
       
    }

    public function delete_team($id)
    {

        $post=team::find($id);

        $post->delete();
        return redirect()->back()->with('message','Deleted Succesfully');
    }
    //update team
    public function update_team($id)
    {
        $team=team::find($id);
        return view('team.update_team',compact('team'));


    }
    ///
    public function edit_team(Request $request,$id)
    {
        $data=team::find($id);

        $data->title=$request->title;
        $data->designation=$request->designation;

        $data->description=$request->description;
         $data->role=$request->role;

        $image=$request->image;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('teamimage',$imagename);

        $data->image = $imagename;



        }

        $data->save();

        return redirect()->back()->with('message', 'Updated Succesfully');
      

    }
    public function testform()
    {
        return view('Admin2.post_page');
    }

/*
==========================================================================================================================================================================
HANDLING ADMIN SYSTEM USERS
==========================================================================================================================================================================
*/
     public function user_admin()
    {

        $team = User::paginate(10);

        return view('team.user_admin', compact('team'));
          
    }
    public function delete_user_by_admin($id)
    {

        $post=User::find($id);

        $post->delete();
        return redirect()->back()->with('message','Deleted Succesfully');
    }

   
//to return update view
      public function update_users_by_admin($id)
            {
                $team=User::find($id);
                return view('team.update_users_by_admin',compact('team'));


            }


//to post
 public function admin_edit_users(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'usertype' => 'required|string|in:admin,user',
    ]);

    $data = User::find($id);

    if (!$data) {
        return redirect()->back()->with('error', 'User not found');
    }

    $data->name = $request->name;
    $data->email = $request->email;
    $data->usertype = $request->usertype;

    $data->save();

    return redirect()->back()->with('message', 'Updated Successfully');
}

        ////ADMIN USER EDITS OPERATIONS


   public function all_events_view()

{


   $events = Event::orderBy('created_at', 'desc')->paginate(4);

    foreach ($events as $event) {
        if ($event->start_time) {
            $event->formatted_start_day = $event->start_time->format('d');
            $event->formatted_start_month = $event->start_time->format('M');
        } else {
            $event->formatted_start_day = 'No start day'; // Or another default value
            $event->formatted_start_month = 'No start month'; // Or another default value
        }

        $currentDate = Carbon::now();

        // Determine the status of the event
        if ($event->end_time < $currentDate) {
            $event->status = 'Expired';
        } elseif ($event->start_time <= $currentDate && $event->end_time >= $currentDate) {
            $event->status = 'Ongoing';
        } else {
            $event->status = 'Upcoming';
        }
    }

    return view('Events.events', compact('events'));
}




//to return update view
      public function donate()
            {
               
                return view('Home.donate');


            }








}
