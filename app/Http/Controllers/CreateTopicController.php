<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTopicController extends Controller
{
    public function index()
    {
        return view('create_topic');
    }
    public function store(Request $request)
    {  
        $data = json_decode($request->data, true);
        $leader = json_decode($request->leader, true);
        $topic = $request->input('topic');
        while (in_array($spy = mt_rand(1,count($data)), array($leader)));
        foreach ($data as $key=>$value) {
            if ($key == $spy) {
                $topic_players[$key] = "Шпион";
            }else{
            $topic_players[$key] = $topic;
            }
        }
        $current = $leader+1;
        if (count($data) < $current){
            $current = 1; 
        }
        
        // dump($data);
        // dump($leader);
        //  dd($topic_players);
        //return redirect()->route('locations.edit', 8, 'leader', 'data', 'topic_players');
        return view('show_topic', compact('data', 'leader', 'current', 'topic_players'));
    }
}
