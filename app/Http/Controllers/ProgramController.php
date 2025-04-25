<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\event;

class ProgramController extends Controller
{

    public function pricing_page()
    { 
        $programs = Program::orderBy('created_at', 'desc')->paginate(6);
          
        return view('Home.program.pricing_page', compact('programs'));
    }
     
     public function single_program($id)
    {
         $programs = Program::find($id);
          // Order events by their creation date (assuming a "created_at" column) in descending order
        $event = event::orderBy('created_at', 'desc')->get();
        return view('Home.program.single_program', compact('programs','event'));
    }
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    return view('Admin.programs.post_program');
}

    /**
     * Show the form for creating a new resource.
     */
   public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        //'program' => 'required|string',
        'beginner_price' => 'required|integer',
        'beginner_sessions' => 'required|integer',
        'intermediate_price' => 'required|integer',
        'intermediate_sessions' => 'required|integer',
        'advanced_price' => 'required|integer',
        'advanced_sessions' => 'required|integer',
        'expert_price' => 'required|integer',
        'expert_sessions' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // Validate image (optional)
    ]);

    // Handle the image upload if present
    $imagePath = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Generate a unique image name
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        // Move the image to the 'programs' directory in 'public'
        $image->move(public_path('programs'), $imageName);
        
        // Store the image path
        $imagePath = 'programs/' . $imageName;
    }

    // Create a new program record in the database
    Program::create([
        'title' => $validatedData['title'],
        'description' => $validatedData['description'],
        //'program' => $validatedData['program'],
        'beginner_price' => $validatedData['beginner_price'],
        'beginner_sessions' => $validatedData['beginner_sessions'],
        'intermediate_price' => $validatedData['intermediate_price'],
        'intermediate_sessions' => $validatedData['intermediate_sessions'],
        'advanced_price' => $validatedData['advanced_price'],
        'advanced_sessions' => $validatedData['advanced_sessions'],
        'expert_price' => $validatedData['expert_price'],
        'expert_sessions' => $validatedData['expert_sessions'],
        'image' => $imagePath
    ]);

    // Redirect or return a response
    return redirect()->back()->with('message', 'Program added successfully!');
    //return redirect()->route('create_program')->with('success', 'Program added successfully!');
}


    /**
     * Store a newly created resource in storage.
     */
   

    /**
     * Display the specified resource.
     */
    public function view_program(Program $program)
    {
         // Fetch all programs from the database
    $programs = Program::paginate(6)->onEachSide(1);
    
    // Return the view with the programs data
    return view('Admin.programs.view_program', compact('programs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    public function update_program($id)
    {
        $program = Program::find($id);
        // Return the view with the programs data
        return view('Admin.programs.edit_page', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'beginner_price' => 'required|integer',
        'beginner_sessions' => 'required|integer',
        'intermediate_price' => 'required|integer',
        'intermediate_sessions' => 'required|integer',
        'advanced_price' => 'required|integer',
        'advanced_sessions' => 'required|integer',
        'expert_price' => 'required|integer',
        'expert_sessions' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // Validate image (optional)
    ]);

    // Find the program by ID
    $program = Program::findOrFail($id);

    // Handle the image upload if present
    $imagePath = $program->image; // Default to existing image path
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Generate a unique image name
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        // Move the image to the 'programs' directory in 'public'
        $image->move(public_path('programs'), $imageName);
        
        // Store the new image path
        $imagePath = 'programs/' . $imageName;
        
        // Delete the old image if it exists
        if ($program->image && file_exists(public_path($program->image))) {
            unlink(public_path($program->image));
        }
    }

    // Update the program record in the database
    $program->update([
        'title' => $validatedData['title'],
        'description' => $validatedData['description'],
        'beginner_price' => $validatedData['beginner_price'],
        'beginner_sessions' => $validatedData['beginner_sessions'],
        'intermediate_price' => $validatedData['intermediate_price'],
        'intermediate_sessions' => $validatedData['intermediate_sessions'],
        'advanced_price' => $validatedData['advanced_price'],
        'advanced_sessions' => $validatedData['advanced_sessions'],
        'expert_price' => $validatedData['expert_price'],
        'expert_sessions' => $validatedData['expert_sessions'],
        'image' => $imagePath
    ]);

    // Redirect or return a response
    return redirect()->back()->with('message', 'Program updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
     public function delete_program($id)
    {

        $program=Program::find($id);

        $program->delete();
        return redirect()->back()->with('message','Deleted Succesfully');
    }




   
}
