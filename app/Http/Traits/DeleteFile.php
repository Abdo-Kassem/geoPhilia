<?php
namespace App\Http\Traits;

trait DeleteFile
{
    

    public function deleteFile($file)
    {
       if(is_file($file))
            return unlink($file);
        return false;
    }
}