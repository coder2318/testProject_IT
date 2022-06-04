<?php

namespace App\Traits;
use File;
trait FileUpload
{
    public function fileUpload($params, $request, $path)
    {
        if ($request->hasFile('file')) {
            $folder = public_path().'/'.$path;
            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
            }
            $file_name = time() . '1.' . $request->file->extension();
            $request->file->move($path, $file_name);
            $params['file'] =$path.'/'.$file_name;
        }
        if ($request->hasFile('file2')) {
            $folder = public_path() . '/' . $path;
            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
            }
            $file_name = time() . '2.' . $request->file2->extension();
            $request->file2->move($path, $file_name);
            $params['file2'] = $path . '/' . $file_name;
        }
        if ($request->hasFile('file3')) {
            $folder = public_path() . '/' . $path;
            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
            }
            $file_name = time() . '3.' . $request->file3->extension();
            $request->file3->move($path, $file_name);
            $params['file3'] = $path . '/' . $file_name;
        }

        if ($request->hasFile('file4')) {
            $folder = public_path() . '/' . $path;
            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
            }
            $file_name = time() . '4.' . $request->file4->extension();
            $request->file4->move($path, $file_name);
            $params['file4'] = $path . '/' . $file_name;
        }
        if ($request->hasFile('file5')) {
            $folder = public_path() . '/' . $path;
            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
            }
            $file_name = time() . '5.' . $request->file5->extension();
            $request->file5->move($path, $file_name);

            $params['file5'] = $path . '/' . $file_name;
        }

        if ($request->hasFile('file6') && isset($params['file6'])) {
            $count = count($params['file6']);
            for ($i = 0; $i <= $count; $i++) {
                if (isset($params['file6'][$i]) && $params['file6'][$i])
                {
                    $folder = public_path() . '/' . $path;
                    if (!File::exists($folder)) {
                        File::makeDirectory($folder, 0775, true, true);
                    }
                    $file_name = time() .$i.'.' . $params['file6'][$i]->extension();
                    $params['file6'][$i]->move($path, $file_name);
                    $params['file6'][$i] = $path . '/' . $file_name;
                }
            }
        }

        return $params;
    }
}
