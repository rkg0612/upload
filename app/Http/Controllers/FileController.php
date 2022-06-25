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
        $files = array_reverse($files);
        return view('files', compact('files'));
    }

    public function singleDelete($filename)
    {
        unlink(public_path() . '/uploads/' . $filename);
        return redirect()->route('home');
    }

    public function allDelete()
    {
        $files = glob(public_path() . '/uploads/*');

        foreach($files as $file)
        {
            if(is_file($file)) {
                unlink($file); // delete file
            }            
        }

        return redirect()->route('home');
    }

    public function fileCount()
    {
        return count(File::allFiles(public_path() . '/uploads'));
    }
}
