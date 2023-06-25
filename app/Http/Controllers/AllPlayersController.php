<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllPlayersController extends Controller
{
    public function index()
    {
        $data = "NAN";
        $leader = 1;
        return view('all_players', compact('data', 'leader'));
    }

    public function store(Request $request,)
    {  
        $data = json_decode($request->input('data'), true);
        $leader = $request->input('leader');
        if ($data == "NAN") {
            $data = $request->input('name');
            unset($data[0]);
        } else {
            $leader = $request->input('leader') + 1;
            if(count($data) < $leader){
                $leader = 1;
            }
        }
        return view('create_topic', compact('data', 'leader'));
    }
}
