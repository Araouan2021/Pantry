<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** Return view to upload file */
    public function uploadFile(){
        return view('uploadfile');
    }
}
