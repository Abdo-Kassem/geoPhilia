<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\DeleteFile;
use App\Http\Traits\SaveFile;
use App\Models\AboutFounder;
use App\Models\AboutInitiative;
use Illuminate\Http\Request;

class FounderSpeechController extends Controller
{

    use SaveFile,DeleteFile;

    public function index()
    {
        $founder = AboutFounder::first();
        return view('dashboard.founder_speech.index', compact('founder'));
    }

    public function create()
    {
        
        return view('dashboard.founder_speech.create');
    }

    public function store(Request $request)
    {

        try {
            $requestData = $request->except('_token');

            $path = public_path('uploads/about_founder/');

            $imageName = $this->saveFile($path,$request->image);

            if($imageName) {
                $requestData['image'] = $imageName;
                AboutFounder::create($requestData);
                return redirect()->route('dashboard.founder_speech.index')->with(['success' => 'تم الحفظ بنجاح']);
            }

            return redirect()->route('dashboard.founder_speech.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);

            
        } catch (\Exception $ex) {
          
            return redirect()->route('dashboard.founder_speech.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }
    }

    public function edit()
    {

        // $maincategories = MainCategory::all();, 'maincategories'
        $founder = AboutFounder::first();
       
        return view('dashboard.founder_speech.edit', compact('founder'));
    }

    public function update( Request $request)
    {
        try {

            $founder = AboutFounder::first();

            $requestData = $request->except('_token');

            $hasImage = $request->has('image');

            $path = public_path('uploads/about_founder/');

            if($hasImage) 
            {
                if($this->deleteFile($path.$founder->image)) {
                    $imageName = $this->saveFile($path,$request->image);
                }else {
                    throw new \Exception();
                }
            }

            if(isset($imageName)) {

                $requestData['image'] = $imageName;
           
            } elseif($hasImage == true) {

                return redirect()->route('dashboard.founder_speech.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
           
            }

            $founder->update($requestData);

            return redirect()->route('dashboard.founder_speech.index')->with(['success' => 'تم التعديل بنجاح']);

            
        } catch (\Exception $ex) {
         
            return redirect()->route('dashboard.founder_speech.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
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
