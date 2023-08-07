<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    public function index()
    {
        $maincategories = MainCategory::all();
        return view('dashboard.maincategories.index', compact('maincategories'));
    }

    public function create()
    {

        return view('dashboard.maincategories.create');
    }

    public function store(Request $request)
    {

        try {

            $request_data = $request->all();
            $maincategory = MainCategory::create($request_data);

            return redirect()->route('dashboard.maincategories.index')->with(['success' => 'تم حفظ الاقسام بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.maincategories.index')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function edit($id)
    {


        $category = MainCategory::select()->find($id);
        if (!$category) {
            return redirect()->route('dashboard.maincategories.index')->with(['error' => 'غير معرف']);
        }

        return view('dashboard.maincategories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {


        try {
            $maincategory = MainCategory::find($id);
            if (!$maincategory) {
                return redirect()->route('dashboard.maincategories.edit', $id)->with(['error' => 'غير معرف']);
            }


            $request_data = $request->all();
            $maincategory->update($request_data);
            return redirect()->route('dashboard.maincategories.index')->with(['success' => 'تم التحديث ']);
        } catch (\Exception $ex) {

            return redirect()->route('dashboard.maincategories.index')->with(['error' => 'خطأ حاول مرة اخرى']);
        }
    }

    public function destroy($id)
    {

        try {
            $maincategory = MainCategory::find($id);
            if (!$maincategory) {
                return redirect()->route('dashboard.maincategories.index', $id)->with(['error' => 'غير معرف']);
            }
            $maincategory->delete();

            return redirect()->route('dashboard.maincategories.index')->with(['success' => 'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.maincategories.index')->with(['error' => 'خطأ حاول مرة اخرى']);
        }
    }
}
