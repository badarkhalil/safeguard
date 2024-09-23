<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ImageHelper
{
    public static function addImage($image, $directory)
    {
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('public/' . $directory, $imageName);
        $imagePath = str_replace('public/', '', $imagePath);
        return $imagePath;
    }

    public static function updateImage($oldImagePath, $newImage, $directory)
    {
        if (Storage::exists($oldImagePath)) {
            Storage::delete($oldImagePath);
        }
        return self::addImage($newImage, $directory);
    }
}
