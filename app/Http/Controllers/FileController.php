<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

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
        $files = collect(File::allFiles(public_path() . '/uploads'));
        $filesGroup = $files
        ->sortBy(function($file) {
            return $file->getCtime();
        }, null, true)
        ->groupBy(function($file) {
            return date('F j, Y', $file->getCtime());
        });
        return view('files', compact('filesGroup'));
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

    public function exportFiles()
    {
        $zip = new ZipArchive();
        $fileName = 'exported_images.zip';

        if (file_exists(public_path() . '/exported_images.zip')) {   
            unlink(public_path() . '/exported_images.zip');
        }

        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('uploads'));
            foreach ($files as $key => $value){
                $relativeName = basename($value);
                $zip->addFile($value, $relativeName);
            }
            $zip->close();
        }

        return response()->download(public_path($fileName));
    }
}
