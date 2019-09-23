<?php

namespace App\Http\Controllers;

use App\Traits\UploadTrait;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.profile');
    }

    public function updateprofile(Request $request)
    {
       

        
        $user = User::findOrFail(auth()->user()->id);
        
        $user->name = $request->input('name');
        $user->mobile = $request->input('mobile');
        $user->current = $request->input('current');
        $user->permanent = $request->input('permanent');
        $user->occupation = $request->input('occupation');
        $user->owner_id = $request->input('owner_id');
        $user->floor_no = $request->input('floor_no');

      
       if ($request->has('nid')) {           
            $image = $request->file('nid');           
            $name = str_slug($request->input('name')).'_'.time();           
            $folder = '/uploads/images/';           
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();           
            $this->uploadOne($image, $folder, 'public', $name);           
            $user->nid = $filePath;
        }
        
        $user->save();        
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }
}
