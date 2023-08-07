<?php
namespace App\Http\Traits;

trait SaveFile
{
    

    public function saveFile($path,$file)
    {
        $fileName = $file->getClientOriginalName().'_'.time().'.'.$file->getClientOriginalExtension();
        
        if($file->move($path,$fileName))
            return $fileName;

        return false;
    }
}