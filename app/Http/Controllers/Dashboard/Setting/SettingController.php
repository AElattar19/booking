<?php

namespace App\Http\Controllers\Dashboard\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use \Illuminate\Support\Str;


class SettingController extends Controller
{
    //
    public function index()
    {
        //
        //$setting = Settings::first();
        $setting = Settings::first();
       
        return view('dashboard.settings.index', compact('setting'));
    }

    public function update(Request $request, settings $setting)
    {
        //

        $valudation =Request()->validate([
            'site_name'=>['required', 'string', 'max:255'],
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook'=>['required', 'url', 'max:255'],
            'instagram'=>['nullable', 'url', 'max:255'],
            'phone'=>['nullable', 'string', 'max:255'],
            'email'=>['nullable', 'string', 'email', 'max:255'],
            'keywords'=>'nullable', 'max:255',
            'description'=>'nullable', 'max:255',
            ]);

            $setting->update($request->except('image', 'favicon', 'old_logo', 'old_favicon')); 
           // return view('dashboard.settings.index', compact('setting'));
           if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/site'), $filename);
            $old_photo = 'images/site/' . $request->old_logo;
            $setting->update(['logo' => $filename]);
            if($old_photo){
                unlink($old_photo);
            }
        }
        if ($request->file('favicon')) {
            $file = $request->file('favicon');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images/site'), $filename);
            $old_favicon = 'images/site/' . $request->old_favicon;
            $setting->update(['favicon' => $filename]);
            if($old_favicon){
                unlink($old_favicon);
            }
        }
           return redirect()->route('settings.index');
    }
}
