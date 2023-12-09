<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function profile(){

        $companies = Company::first();

        return view('Site.Dashboard.profile')->with(compact('companies'));

    }

    public function message(){

        $companies = Company::first();
        $messages = message::leftjoin('users' , 'users.id' , '=' , 'messages.sender_id')
            ->select('messages.description' , 'messages.active', 'users.name' , 'users.image' , 'messages.created_at as date')
            ->whereUser_id(Auth::user()->id)
            ->whereActive(1)
            ->orderBy('messages.id' , 'DESC')
            ->groupBy('messages.sender_id' , 'messages.description' , 'messages.active', 'users.name' , 'users.image' , 'date')
            ->get();

        return view('Site.Dashboard.message')->with(compact('companies' , 'messages'));

    }

    public function setting(){

        $companies = Company::first();

        return view('Site.Dashboard.settings')->with(compact('companies'));

    }

    public function userrequest(){

        $companies = Company::first();

        return view('Site.Dashboard.userrequest')->with(compact('companies'));

    }

    public function edituserprofile(Request $request){

        $user = User::whereId(Auth::user()->id)->select('id')->first();

        if ($request->input('email') === Auth::user()->email && $request->input('phone') === Auth::user()->phone) {
            $request->validate([
                'name'  => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email'],
                'phone' => ['required', 'numeric', 'min:10'],
                'image' => ['image','mimes:jpeg,jpg,png,gif','max:50000' , 'dimensions:width=200,height=200'],

            ]);
            $user->name  = $request->input('name');
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $imagePath  =public_path("users");
                $imagelink  ="users";
                $filename = Str::random(30) . "." . $file->clientExtension();
                $newImage = Image::make($file);
                $newImage->fit(480, 320);
                $user->image = $imagelink . '/' . $filename;
                $newImage->save($imagePath . '/' . $filename);
            }
            $user->save();
        }elseif($request->input('email') === Auth::user()->email && $request->input('phone') != Auth::user()->phone){
            $request->validate([
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email'],
                'phone' => ['required', 'numeric', 'min:10', 'unique:users,phone'],
                'image' => ['image','mimes:jpeg,jpg,png,gif','max:50000' , 'dimensions:width=200,height=200'],

            ]);
            $user->name  = $request->input('name');
            $user->phone = $request->input('phone');
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $imagePath  =public_path("users");
                $imagelink  ="users";
                $filename = Str::random(30) . "." . $file->clientExtension();
                $newImage = Image::make($file);
                $newImage->fit(480, 320);
                $user->image = $imagelink . '/' . $filename;
                $newImage->save($imagePath . '/' . $filename);
            }
            $user->save();

        }elseif($request->input('phone') === Auth::user()->phone && $request->input('email') != Auth::user()->email){
            $request->validate([
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'unique:users,email'],
                'phone' => ['required', 'numeric', 'min:10'],
                'image' => ['image','mimes:jpeg,jpg,png,gif','max:50000' , 'dimensions:width=200,height=200'],

            ]);
            $user->name  = $request->input('name');
            $user->email = $request->input('email');
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $imagePath  =public_path("users");
                $imagelink  ="users";
                $filename = Str::random(30) . "." . $file->clientExtension();
                $newImage = Image::make($file);
                $newImage->fit(480, 320);
                $user->image = $imagelink . '/' . $filename;
                $newImage->save($imagePath . '/' . $filename);
            }
            $user->save();
        }elseif($request->input('phone') != Auth::user()->phone && $request->input('email') != Auth::user()->email){
            $request->validate([
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email'  , 'unique:users,email'],
                'phone' => ['required', 'numeric', 'min:10', 'unique:users,phone'],
                'image' => ['image','mimes:jpeg,jpg,png,gif','max:50000' , 'dimensions:width=200,height=200'],

            ]);
            $user->name  = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $imagePath  =public_path("users");
                $imagelink  ="users";
                $filename = Str::random(30) . "." . $file->clientExtension();
                $newImage = Image::make($file);
                $newImage->fit(480, 320);
                $user->image = $imagelink . '/' . $filename;
                $newImage->save($imagePath . '/' . $filename);
            }
            $user->save();
        }
        return Redirect::back();
    }

    public function changepassword(Request $request)
    {
        $request->validate([
            'password'  => ['required', 'string', 'min:8'   , 'confirmed'],
        ]);
        if(Hash::check($request->input('old_password') , Auth::user()->password)) {
            $user = User::whereId(Auth::user()->id)->first();
            $user->password = $request->input('password');
            $user->save();
            alert()->success('عملیات موفق', 'رمز عبور با موفقیت تغییر کرد');
        }else{
            alert()->error('عملیات ناموفق', 'رمز عبور فعلی نادرست وارد شده است');
        }
        return Redirect::back();

    }
}
