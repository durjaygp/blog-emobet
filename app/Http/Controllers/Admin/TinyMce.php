<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinyMce extends Controller
{
    public function upload_tinymce_image()
    {
        $file = request()->file('file');
        $path = $file->storeAs('tinymce_uploads', 'public');
        return response()->json(['location' => "/uploads/$path"]);
    }

}
