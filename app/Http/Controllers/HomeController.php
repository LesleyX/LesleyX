<?php

namespace LesleyX\Http\Controllers;

use Illuminate\Http\Request;

use LesleyX\Http\Requests;
use LesleyX\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Displays the index page
     *
     * @return Response
     */
    public function index()
    {
    	return view('index');
    }
}
