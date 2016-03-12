<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;


use App\images;

use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    //

    public function index()
    {

        return view('auth.login');

    }

    public function create()
    {
        return view('backend.pages.create');

    }

    public function all()
    {

        $images = images::latest('created_at')->get();


        return view('backend.pages.all', compact('images'));


    }

    public function profile()
    {
//        dd(\Auth::getUser());

        $user = \Auth::getUser();

        return view('backend.pages.profile', compact('user'));

    }

    public function update(Requests\UpdateProfileRequest $request)

    {


        $profile_pix_path = $request->file('profile_pic')->getRealPath();

        $profile_pix_name = $request->file('profile_pic')->getClientOriginalName();


//        dd($profile_pix_name);

        $all = [


            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'profile_pic' => $profile_pix_name,


        ];

        $user = User::findOrfail(\Auth::getUser()->id);



        if (file_exists(public_path('images/uploaded/profile/' . $profile_pix_name))) {


            $user->update($all);
            return redirect('admin');


        } else {


// resize the image to a height of 200 and constrain aspect ratio (auto width)


            Image::make($profile_pix_path)->resize(null, 200, function ($constraint) {

                $constraint->aspectRatio();


            })->save('images/uploaded/profile/' . $profile_pix_name);

            $user->update($all);

            return redirect('admin');


        }

    }

    public function store(Requests\CreateImageRequest $request)
    {


        $allInput = $request->all();

        $input = $request->file('image')->getRealPath();


        $filename = $request->file('image')->getClientOriginalName();


        if (file_exists(public_path('images/uploaded/' . $filename))) {


            return ' File already exists.';


        } else {


            images::create(['image' => $filename, 'title' => $allInput['title'], 'description' => $allInput['description']]);


// resize the image to a height of 200 and constrain aspect ratio (auto width)


            Image::make($input)->resize(null, 800, function ($constraint) {

                $constraint->aspectRatio();


            })->save('images/uploaded/' . $filename);


            return redirect('/');


        }


    }


}
