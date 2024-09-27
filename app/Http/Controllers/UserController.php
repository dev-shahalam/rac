<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function HomePage(){
        return view('user.index');
    }

    public function CarsPage(){
        return view('user.cars');
    }

    public function ServicePage(){
        return view('user.service');
    }

    public function ContactPage(){
        return view('user.contact');
    }
    public function AboutPage(){
        return view('user.about');
    }






}
