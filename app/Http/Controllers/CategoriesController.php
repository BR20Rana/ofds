<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list ()
    {
        return view ('admin.pages.categories.list');
    }
}
