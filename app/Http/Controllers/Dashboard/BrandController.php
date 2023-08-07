<?php



namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.brands.index', compact('brands'));
    }

    public function create()
    {

        return view('dashboard.brands.create');
    }

    public function store(Request $request)
    {

        try {
            $request_data = $request->all();

            if ($request->photo) {

                Image::make($request->photo)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(base_path('uploads/brand_images/' . $request->photo->hashName()));

                $request_data['photo'] = $request->photo->hashName();
            } //end of if

            Brand::create($request_data);

            return redirect()->route('dashboard.brands.index')->with(['success' => 'Stored']);
        } catch (\Exception $ex) {
            return ($ex);
            return redirect()->route('dashboard.brands.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function edit($id)
    {


        $brand = Brand::select()->find($id);
        if (!$brand) {
            return redirect()->route('dashboard.brands.index')->with(['error' => 'Undefined']);
        }

        return view('dashboard.brands.edit', compact('brand'));
    }

    public function update($id, Request $request)
    {

        try {
            $brand = Brand::find($id);
            if (!$brand) {
                return redirect()->route('dashboard.brands.edit', $id)->with(['error' => 'Undefined']);
            }
            if ($request->photo) {

                if ($brand->photo != 'default.png') {

                    Storage::disk('public_uploads')->delete('/brand_images/' . $brand->photo);
                } //end of if

                Image::make($request->photo)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(base_path('uploads/brand_images/' . $request->photo->hashName()));

                $request_data['photo'] = $request->photo->hashName();
            } //end of if
            $brand->update($request->except('_token', 'photo'));
            return redirect()->route('dashboard.brands.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.brands.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function delete($id)
    {

        try {
            $brand = brand::find($id);
            if (!$brand) {
                return redirect()->route('dashboard.brands.index', $id)->with(['error' => 'Undefined']);
            }
            $brand->delete();

            return redirect()->route('dashboard.brands.index')->with(['success' => 'deleted']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.brands.index')->with(['error' => 'Erorr Try Again']);
        }
    }
}
