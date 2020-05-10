<?php

namespace App\Http\Controllers;
//use App\Song;

// use App\Http\Controllers\DB;

use Illuminate\Http\Request;
use DB;

class SongslistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $songs = json_decode(file_get_contents('http://localhost:5000/predict'), true);
        return view('songslist', ['songs' => $songs]);
    }
}
