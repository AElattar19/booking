<?php

namespace App\Http\Controllers\front\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Str;
class ProfileController extends Controller
{
    //
    public function index()
    {
        //
        $UserId = Session::get('UserId');
        $data = Users::findOrfail($UserId);
        return view('site.profile.index', compact('data'));
    }
    public function update(Request $request, Users $User)
    {
        //

        $valudation =Request()->validate([
            'name'=>['required', 'string', 'max:255'],
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'phone'=>['nullable', 'string', 'max:255'],
            'email'=>['nullable', 'string', 'email', 'max:255'],
            'notes'=>'nullable', 'max:255',

            ]);

            $User->update($request->except('old_photo')); 
            // return view('dashboard.settings.index', compact('setting'));
            if ($request->file('photo')) {
             $file = $request->file('photo');
             $filename = Str::uuid() . $file->getClientOriginalName();
             $file->move(public_path('images/profile'), $filename);
             $old_photo = 'images/profile/' . $request->old_photo;
             $User->update(['photo' => $filename]);
             if($old_photo){
                 unlink($old_photo);
             }
         }
         return redirect()->route('profile.edit');

    }
}
