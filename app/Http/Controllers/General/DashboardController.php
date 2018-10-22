<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	/**
	 * Dashboard home page
	 * 
	 * @return 
	 */
    public function index()
    {
    	return view("index");
    }
}
