<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        return view("contact");
    }


    public function about(){

        $first = 'Cesar';
        $last = 'Barahona';

        return view("about",compact('first','last'));
    }

    public function home()
    {
        return view("home");
    }
}
