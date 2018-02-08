<?php

namespace App\Http\Controllers;

class ServersController extends Controller
{
    public function show()
    {
        $teamspeak = app('teamspeak')->all();

        return view('servers.show')->with(compact('teamspeak'));
    }
}
