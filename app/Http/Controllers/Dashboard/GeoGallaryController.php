<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\GeoGallaryValidator;
use App\Http\Traits\DeleteFile;
use App\Http\Traits\SaveFile;
use App\Models\GeoGallary;


class GeoGallaryController extends Controller
{

    use SaveFile,DeleteFile;

    public function index()
    {
        $geoGallaries = GeoGallary::all();
        return view('dashboard.geo_gallary.index', compact('geoGallaries'));
    }

    public function create()
    {
        // $maincategories = MainCategory::all();, compact('maincategories')
        return view('dashboard.geo_gallary.create');
    }

    public function store(GeoGallaryValidator $request)
    {

        try {
            $requestData = $request->except('_token');

            $path =  public_path('uploads/geo_gallary/');

            $fileName = $this->saveFile($path,$request->fileName);

            if($fileName) {
                $requestData['fileName'] = $fileName;
                $requestData['type'] = $this->getFileType($request->fileName);
                GeoGallary::create($requestData);
            }else {
                throw new \Exception();
            }

            return redirect()->route('dashboard.geo_gallary.index')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
           
            return redirect()->route('dashboard.geo_gallary.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }
    }

    public function edit($id)
    {

        // $maincategories = MainCategory::all();, 'maincategories'
        $geoGallary = GeoGallary::find($id);
        if (!$geoGallary) {
            return redirect()->route('dashboard.geo_gallary.index')->with(['error' => 'غير معرف']);
        }

        return view('dashboard.geo_gallary.edit', compact('geoGallary'));
    }

    public function update($id, GeoGallaryValidator $request)
    {
        $geoGallary = GeoGallary::find($id);

        $hasFile = $request->has('fileName');
        
        if (!$geoGallary) {
            return redirect()->route('dashboard.geo_gallary.index', $id)->with(['error' => 'غير معرف']);
        }

        try {

            $requestData = $request->except('_token');

            $path =  public_path('uploads/geo_gallary/');

            if($hasFile) {
                if($this->deleteFile($path.$geoGallary->fileName))
                    $fileName = $this->saveFile($path,$request->fileName);
                else
                    throw new \Exception();
            }

            if(isset($fileName)) {
                $requestData['fileName'] = $fileName;
                $requestData['type'] = $this->getFileType($request->fileName);
            }elseif($hasFile) {
                throw new \Exception();
            }

            $requestData['comment'] = $request->comment;
            $geoGallary->update($requestData);

            return redirect()->route('dashboard.geo_gallary.index')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
           
            return redirect()->route('dashboard.geo_gallary.index')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }
    }

    public function delete($id)
    {

        try {
            $geoGallary = GeoGallary::find($id);
            if (!$geoGallary) {
                return redirect()->route('dashboard.geo_gallary.index', $id)->with(['error' => 'غير معرف']);
            }

            if($this->deleteFile(public_path('uploads/geo_gallary/'.$geoGallary->fileName))){
                $geoGallary->delete();
                return redirect()->route('dashboard.geo_gallary.index')->with(['success' => 'تم الحذف بنجاح']);
            }

            return redirect()->route('dashboard.geo_gallary.index')->with(['error' => 'حدث خطأ حاول مره اخرى']);
            
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.geo_gallary.index')->with(['error' => 'حدث خطأ حاول مره اخرى']);
        }
    }

    private function getFileType($file)
    {
        $fileExtention = $file->getClientOriginalExtension();

        $videoExtentions = ['mp4','mov','wmv','avi','avchd','mkv','webm','flv','f4v','swf'];

        if(in_array($fileExtention,$videoExtentions)){
            return 1;
        }
        return 0;
    }


    

}
