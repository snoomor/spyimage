<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxShowTopicController extends Controller
{
    public function index(Request $request)
    {
        
        $request = $request->getContent();
        $current = json_decode($request);
        $current = $current->current + 1;
        //$current = ->current + 1;
        return response()->json(['current' => $current]);
    }
}
