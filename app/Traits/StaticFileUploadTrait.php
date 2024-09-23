<?php

namespace App\Traits;

use App\Models\Media;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

trait StaticFileUploadTrait
{

    public static function uploadFile($photo, $folder_name = null)
    {
        $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
        $photo->storeAs($folder_name, $filename, 'public');
        return $filename;
    }


    public static function uploadFileWithUserIdInPng($photo, $folder_name, $user_id)
    {
        $filename = $user_id.'.png';
        $photo->storeAs($folder_name, $filename, 'public');
        return $filename;
    }


    public static function fileDeleted($folder_name, $image_name)
    {
        $path = $folder_name . '/' . $image_name;
        $deleted = false;
        if (Storage::disk('public')->exists($path)) :
            $deleted = Storage::disk('public')->delete($path);
        endif;
        return $deleted;
    }
}
