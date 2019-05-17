<?php

namespace App\Http\Controllers\Verifier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('verifier.dashboard');
    }
}
