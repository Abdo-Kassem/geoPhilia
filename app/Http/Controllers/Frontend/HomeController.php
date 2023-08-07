<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutFounder;
use App\Models\AboutInitiative;
use App\Models\Brand;
use App\Models\GeoGallary;
use App\Models\GeologyLibrary;
use App\Models\MainCategory;
use App\Models\Review;
use App\Models\Voice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::all();
        $reviews = Review::select()->paginate(4);
        return view('frontend.index', compact('brands',  'reviews'));
    }
    public function cat(Request $request, $id)
    {
        $category = MainCategory::select(['comment'])->findorfail($id);
        $reviews = Review::where('cat_id',  $id)->paginate(6);
        return view('frontend.cat', compact('reviews','category'));
    }

    public function all(Request $request)
    {
        $reviews = Review::select()->paginate(6);
        return view('frontend.all', compact('reviews'));
    }
    public function voice(Request $request)
    {
        $voices = Voice::select()->paginate(6);
        return view('frontend.voice', compact('voices'));
    }


    public function single($id)
    {

        $single = Review::select()->find($id);
        if (!$single) {
            return redirect()->route('frontend.index')->with(['error' => 'Undefined']);
        }

        return view('frontend.single', compact('single'));
    }

    public function voicesingle($id)
    {

        $voicesingle = Voice::select()->find($id);
        if (!$voicesingle) {
            return redirect()->route('frontend.index')->with(['error' => 'Undefined']);
        }

        return view('frontend.voicesingle', compact('voicesingle'));
    }

    public function getGeoGallaey()
    {
        $geoGallaries = GeoGallary::paginate(6);

        return view('frontend.geo_gallary',compact('geoGallaries'));
    }
    public function getGeoLibrary()
    {
        $files = GeologyLibrary::paginate(10);
        return view('frontend.geo_Library',compact('files'));
    }
    public function getAboutInitiativ()
    {
        $aboutInitiative = AboutInitiative::first();

        return view('frontend.about_initiative',compact('aboutInitiative'));
    }

    public function getAboutFounder()
    {
        $aboutFounder = AboutFounder::first();
        return view('frontend.about_founder',compact('aboutFounder'));
    }
}
