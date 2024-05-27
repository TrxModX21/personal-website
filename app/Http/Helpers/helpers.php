<?php
use App\Lib\FileManager;

// function gs()
// {
//     $general = Cache::get('GeneralSetting');
//     if (!$general) {
//         $general = GeneralSetting::first();
//         Cache::put('GeneralSetting', $general);
//     }
//     return $general;
// }

function fileManager()
{
    return new FileManager();
}

function getFilePath($key)
{
    return fileManager()->$key()->path;
}

function getFileSize($key)
{
    return fileManager()->$key()->size;
}

function getImage($image, $size = null)
{
    $clean = '';
    try {
        $absolutePath = realpath($image);
        if ($absolutePath && is_readable($absolutePath) && is_file($image)) {
            return asset($image) . $clean;
        }
    } catch (\Exception $e) {
    }
    if ($size) {
        return route('placeholder.image', $size);
    }
    return asset('assets/images/general/default.png');
}