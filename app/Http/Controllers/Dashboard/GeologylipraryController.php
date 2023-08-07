<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\GeologylipraryValidator;
use App\Http\Traits\DeleteFile;
use App\Http\Traits\SaveFile;
use App\Models\GeologyLibrary;

class GeologylipraryController extends Controller
{

    use SaveFile,DeleteFile;

    public function index()
    {
        $geoLibs = GeologyLibrary::all();
        return view('dashboard.geology_library.index', compact('geoLibs'));
    }

    public function create()
    {
        
        return view('dashboard.geology_library.create');
    }

    public function store(GeologylipraryValidator $request)
    {

        try {
            $requestData = $request->except('_token');

            $path =  public_path('uploads/geology_library/');

            $filePath = $this->saveFile($path,$request->filePath);

            if($filePath) {
                $requestData['filePath'] = $filePath;
                GeologyLibrary::create($requestData);
            }else {
                throw new \Exception();
            }

            return redirect()->route('dashboard.geo_lib.index')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
           
            return redirect()->route('dashboard.geo_lib.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }
    }

    public function edit($id)
    {

        // $maincategories = MainCategory::all();, 'maincategories'
        $file = GeologyLibrary::find($id);
        if (!$file) {
            return redirect()->route('dashboard.geology_library.index')->with(['error' => 'غير معرف']);
        }

        return view('dashboard.geology_library.edit', compact('file'));
    }

    public function update($id, GeologylipraryValidator $request)
    {
        $file = GeologyLibrary::find($id);

        $hasFile = $request->has('filePath');
        
        if (!$file) {
            return redirect()->route('dashboard.geology_library.index', $id)->with(['error' => 'غير معرف']);
        }

        try {

            $requestData = $request->except('_token');

            $path =  public_path('uploads/geology_library/');

            if($hasFile) {
                if($this->deleteFile($path.$file->filePath))
                    $filePath = $this->saveFile($path,$request->filePath);
                else
                    throw new \Exception();
            }

            if(isset($filePath)) {
                $requestData['filePath'] = $filePath;
            }elseif($hasFile) {
                throw new \Exception();
            }

            $requestData['comment'] = $request->comment;
            $requestData['fileName'] = $request->fileName;

            $file->update($requestData);

            return redirect()->route('dashboard.geo_lib.index')->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
           
            return redirect()->route('dashboard.geo_lib.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }
    }

    public function delete($id)
    {

        try {
            $file = GeologyLibrary::find($id);
            if (!$file) {
                return redirect()->route('dashboard.geo_lib.index', $id)->with(['error' => 'غير معرف']);
            }

            if($this->deleteFile(public_path('uploads/geology_library/'.$file->filePath))){
                $file->delete();
                return redirect()->route('dashboard.geo_lib.index')->with(['success' => 'تم الحذف بنجاح']);
            }

            return redirect()->route('dashboard.geo_lib.index')->with(['error' => 'حدث خطأ حاول مره اخرى']);
            
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.geo_lib.index')->with(['error' => 'حدث خطأ حاول مره اخرى']);
        }
    }


    

}
