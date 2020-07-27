<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
	public function index(){
		return view('front.pages.index');
	}
}
