<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminToolsController extends Controller
{
    public function createCategory(Request $request) {
        $this->validate($request, [
           'name' => 'required',
        ]);
        $category = new Category;
        $category->name = $request->input('name');

        $category->save();

        return redirect('/admin/create-category')->with('success', 'Category added');






    }
}
