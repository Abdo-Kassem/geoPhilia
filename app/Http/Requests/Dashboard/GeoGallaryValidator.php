<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class GeoGallaryValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fileName' => $this->validateOfEdit(),
            'comment' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fileName.required' => 'الصوره او الفيديو مطلوب',
            'fileName.mimetypes' => 'الملف يجب ان يكون فيديو او صوره',
            'fileName.image' => 'الملف يجب ان يكون فيديو او صوره',
            'comment.required' => 'التعليق مطلوب',
        ];
    }

    private function specifyFileType()
    {
        
        $fileExtention = strtolower($this->fileName->getClientOriginalExtension());
        $imagesExtentions = ['jpg','jpeg','png','tiff','gif','PSD','webp'];
        $videoExtentions = ['mp4','mov','wmv','avi','avchd','mkv','webm','flv','f4v','swf'];

        if( in_array($fileExtention,$imagesExtentions)) {
            return 'image';
        } elseif(in_array($fileExtention,$videoExtentions)) {
            return 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|max:61440';
        }
       

    }

    private function validateOfEdit()
    {
        return (!$this->has('edit'))?'required|'.$this->specifyFileType():'nullable';
    }
}
