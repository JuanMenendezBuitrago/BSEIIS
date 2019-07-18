<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function termsOfService() {
    	return view('pages.terms-of-service');
    }
}
