<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowTopicController extends Controller
{
    public function index()
    {
        return view('show_topic');
    }
}
