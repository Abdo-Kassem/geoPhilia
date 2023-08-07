<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AboutInitiative;
use Illuminate\Http\Request;

class AboutInitiativeController extends Controller
{

   

    public function index()
    {
        $aboutInitiative = AboutInitiative::first();
        return view('dashboard.about_initiative.index', compact('aboutInitiative'));
    }

    public function create()
    {
        
        return view('dashboard.about_initiative.create');
    }

    public function store(Request $request)
    {

        try {
            $requestData = $request->except('_token');

            AboutInitiative::create($requestData);

            return redirect()->route('dashboard.aboutInitiative.index')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
           
            return redirect()->route('dashboard.aboutInitiative.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }
    }

    public function edit()
    {

        // $maincategories = MainCategory::all();, 'maincategories'
        $aboutInitiative = AboutInitiative::first();
       
        return view('dashboard.about_initiative.edit', compact('aboutInitiative'));
    }

    public function update( Request $request)
    {
        try {
            $requestData = $request->except('_token');

            AboutInitiative::first()->update($requestData);

            return redirect()->route('dashboard.aboutInitiative.index')->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
           
            return redirect()->route('dashboard.aboutInitiative.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }
    }

    public function delete()
    {

        try {

            AboutInitiative::first()->delete();
            return redirect()->route('dashboard.aboutInitiative.index')->with(['success' => 'تم الحذف بنجاح']);

            
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.aboutInitiative.index')->with(['error' => 'حدث خطأ حاول مره اخرى']);
        }
    }


    

}
