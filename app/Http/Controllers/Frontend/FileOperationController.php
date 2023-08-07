<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GeoGallary;
use App\Models\GeologyLibrary;
use Illuminate\Http\Request;

class FileOperationController extends Controller
{
    public function download($id) 
    {
        $file = GeologyLibrary::select('filePath')->findorfail($id);

        $path = public_path('uploads/geology_library/'.$file->filePath);

        return response()->download($path);

    }

    public function showFile($id) 
    {
        $file = GeologyLibrary::select('filePath')->findorfail($id);

        $path = public_path('uploads/geology_library/'.$file->filePath);
        
        return response()->file($path);
    }

    public function downloadVideo($id) 
    {
        $file = GeoGallary::select('fileName')->findorfail($id);

        $path = public_path('uploads/geo_gallary/'.$file->fileName);

        return response()->download($path);

    }

    
}
