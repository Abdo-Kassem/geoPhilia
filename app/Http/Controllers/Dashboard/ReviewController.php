<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('dashboard.reviews.index', compact('reviews'));
    }

    public function create()
    {
        $maincategories = MainCategory::all();
        return view('dashboard.reviews.create', compact('maincategories'));
    }

    public function store(Request $request)
    {

        try {
            $request_data = $request->all();

            if ($request->photo) {

                Image::make($request->photo)
                    ->resize(600, 300)
                    ->save(base_path('uploads/review_images/' . $request->photo->hashName()));

                $request_data['photo'] = $request->photo->hashName();
            } //end of if

            Review::create($request_data);

            return redirect()->route('dashboard.reviews.index')->with(['success' => 'Stored']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.reviews.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function edit($id)
    {

        $maincategories = MainCategory::all();
        $review = Review::select()->find($id);
        if (!$review) {
            return redirect()->route('dashboard.reviews.index')->with(['error' => 'Undefined']);
        }

        return view('dashboard.reviews.edit', compact('review', 'maincategories'));
    }

    public function update($id, Request $request)
    {

        try {
            $review = Review::find($id);
            if (!$review) {
                return redirect()->route('dashboard.reviews.edit', $id)->with(['error' => 'Undefined']);
            }
            $request_data = $request->all();
            if ($request->photo) {

                if ($review->photo != 'default.png') {

                    Storage::disk('public_uploads')->delete('/review_images/' . $review->photo);
                } //end of if

                Image::make($request->photo)
                    ->resize(600, 300)
                    ->save(base_path('uploads/review_images/' . $request->photo->hashName()));

                $request_data['photo'] = $request->photo->hashName();
            } //end of if
            $review->update($request_data);
            return redirect()->route('dashboard.reviews.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.reviews.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function delete($id)
    {

        try {
            $review = Review::find($id);
            if (!$review) {
                return redirect()->route('dashboard.reviews.index', $id)->with(['error' => 'Undefined']);
            }
            $review->delete();

            return redirect()->route('dashboard.reviews.index')->with(['success' => 'deleted']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.reviews.index')->with(['error' => 'Erorr Try Again']);
        }
    }
}
