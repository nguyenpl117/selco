<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{

    public function slug($slug)
    {
        if ($slug == 'tin-tuc') {
            return view('tin-tuc');
        }
        dd($slug);
    }

}