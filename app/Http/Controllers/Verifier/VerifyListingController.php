<?php

namespace App\Http\Controllers\Verifier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Listing;
use App\Category;
Use \Carbon\Carbon;

class VerifyListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::select("*")->whereNull('verified_by')->get();
        $category = Category::all();

        return view('verifier.verifylisting.index', compact('listings','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $listing = Listing::find($id);

        return view('verifier.verifylisting.edit', compact('listing'));
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
        $request->validate([
      ]);

      $listing = Listing::find($id);
      $listing->verified_by = $request->get('verified_by');
      $listing->verified_on = $date = Carbon::now();
      $listing->save();

      return redirect('/verifier/verifylisting')->with('success', 'listing has been verified');
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
