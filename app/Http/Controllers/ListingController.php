<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Category;
use App\Package;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $packages = Package::all();

        return view('listing.index', compact('categories','packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'email'=>'required',
        'title'=>'required',
        'URL'=>'required',
        'description'=>'required',
        'meta_description'=>'required',
        'keyword'=>'required',
      ]);
      $listing = new Listing([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'title' => $request->get('title'),
        'category_id' => $request->get('category_id'),
        'URL' => $request->get('URL'),
        'description' => $request->get('description'),
        'meta_description' => $request->get('meta_description'),
        'keyword' => $request->get('keyword'),
        'verified_by' => $request->get('verified_by'),
        'verified_on' => $request->get('verified_on'),
        'package_id' => $request->get('package_id'),
      ]);
      $listing->save();
      return redirect('/listing')->with('success', 'link has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $listing = Listing::find($id);

        // return view('admin.listing.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //   $request->validate([
      //   'name'=>'required',
      //   'email'=>'required',
      //   'title'=>'required',
      //   'URL'=>'required',
      //   'description'=>'required',
      //   'meta_description'=>'required',
      //   'keyword'=>'required',
      // ]);

      // $listing = Listing::find($id);
      // $listing->name = $request->get('name');
      // $listing->save();

      // return redirect('/admin/listing')->with('success', 'Listing has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
