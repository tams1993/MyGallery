<?php

namespace App\Http\Controllers;

use App\images;
use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    //


    public function create()
    {

        return view('frontend.create');
    }

    public function store(Requests\CreateImageRequest $request)
    {


        $allInput = $request->all();

        $input = $request->file('image')->getRealPath();


        $filename = $request->file('image')->getClientOriginalName();


        if (file_exists(public_path('images/uploaded/'.$filename))) {



            return ' File already exists.';


        } else {



            images::create(['image' => $filename,'title' => $allInput['title'],'description' => $allInput['description']]);





// resize the image to a height of 200 and constrain aspect ratio (auto width)


            Image::make($input)->resize(null, 800,function($constraint){

                $constraint->aspectRatio();


            })->save('images/uploaded/'.$filename);






            return redirect('/');


        }





    }


}
