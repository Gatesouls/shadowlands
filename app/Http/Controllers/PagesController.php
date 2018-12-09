<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Main Page

    public function getAboutPage() {
        return view('about');
    }

    public function getAdminPage() {
        return view('admin');
    }

    //Admin Tools
    public function getCreateCategoryPage() {
        return view('Admin_tools.create-category');
    }

    public function getEditCategoryPage() {
        return view('Admin_tools.edit-category');
    }

    public function getDeleteCategoryPage() {
        return view('Admin_tools.delete-category');
    }
}
