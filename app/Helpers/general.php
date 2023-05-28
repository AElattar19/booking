<?php


use App\Models\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;


function getImageAttribute($value)
{
    if ($value) {
        return asset('images/profile/' . $value);
    } else {
        return asset('images/profile/no-image.png');
    }
}