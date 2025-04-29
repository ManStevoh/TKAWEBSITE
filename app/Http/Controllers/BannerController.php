<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

        // Show all banners
        public function index()
        {
            $banners = Banner::all();
            return view('banners.index', compact('banners'));
        }
    
        // Show form to create a banner
        public function create()
        {
            return view('Admin.Slider_banner.post_banner');
        }
    
    // Store Banner
    public function store(Request $request)
    {

        
        // Validate the incoming request
        $request->validate([
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validation for image
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        // Store the uploaded image in the 'banners' directory
        $imagePath = $request->file('background_image')->store('banners', 'public');

        // Create and save the banner record
        $banner = Banner::create([
            'background_image' => $imagePath,  // Store the image path
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        // Redirect or return response as needed
        return redirect()->route('banners.index')->with('success', 'Banner created successfully!');
    }

    // Edit Banner (for updating purposes)
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);

        return view('banners.edit', compact('banner'));
    }

    // Update Banner
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        $banner = Banner::findOrFail($id);

        // If a new image is uploaded, store it
        if ($request->hasFile('background_image')) {
            // Delete the old image
            Storage::delete('public/' . $banner->background_image);

            // Store the new image
            $imagePath = $request->file('background_image')->store('banners', 'public');
            $banner->background_image = $imagePath;
        }

        // Update the banner title and subtitle
        $banner->title = $request->title;
        $banner->subtitle = $request->subtitle;
        
        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully!');
    }
}
