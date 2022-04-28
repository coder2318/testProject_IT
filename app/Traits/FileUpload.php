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
            $file_name = time() . '.' . $request->file->extension();
            $request->file->move($path, $file_name);
            $params['file'] =$path.'/'.$file_name;
        }

        return $params;
    }
}
