<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CkEditor extends Controller
{
    public function uploadImage(Request $request)
{
    if ($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;
    
        $request->file('upload')->move(public_path('media'), $fileName);
    
        $url = asset('media/' . $fileName);
        
        return response()->json([
            'url' => $url
        ]);
    }
}
}
