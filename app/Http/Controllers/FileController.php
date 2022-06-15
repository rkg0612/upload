<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = request()->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path() . '/uploads', $fileName);
        return true;
    }

    public function listFiles()
    {
        $files = File::allFiles(public_path() . '/uploads');
        return view('files', compact('files'));
    }
}
