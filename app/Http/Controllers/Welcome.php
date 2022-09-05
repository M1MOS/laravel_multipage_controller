<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function index(){
        $home = [
            [
                "span" => "Fresh Coffee"
                
            ]
        ];
        return view('welcome');
    }
}
