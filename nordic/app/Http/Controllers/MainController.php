<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function gallery() {
        return view('gallery');
    }

    public function contact() {
        return view('contact');
    }

    public function rooms() {
        return view('rooms');
    }

    public function deluxe() {
        return view('deluxe');
    }
    public function deluxeBalcony() {
        return view('deluxeBalcony');
    }
    public function nordicSuite() {
        return view('nordicsuite');
    }
    public function nordicSuiteBalcony() {
        return view('nordicSuiteBalcony');
    }
    public function standard() {
        return view('standard');
    }
    public function terms() {
        return view('terms');
    }
}
