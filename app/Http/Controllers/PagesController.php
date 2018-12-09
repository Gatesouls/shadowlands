<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getAboutPage() {
        return view('about');
    }

    public function getAdminPage() {
        return view('admin');
    }
}
