<?php

namespace App\Http\Controllers;

use App\images;
//use Illuminate\Http\Request;

use Request;



use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\Console\Input\Input;

class PagesController extends Controller
{
    //

    public function main()
    {

        $images = images::latest('created_at')->get();

//        $cacheImages = Image::cache($images);


        return view('frontend.main',compact('images'));

    }




}
