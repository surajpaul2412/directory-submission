<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Listing;
use App\Package;

class LandingController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $packages = Package::all();
        $latests = Listing::select('id','name','email','category_id','title','URL','description','meta_description','keyword','package_id')->orderBy('id','desc')->whereNotNull('verified_by')->paginate(3);

        return view('landing.home', compact('categories','packages','latests'));
    }
}
