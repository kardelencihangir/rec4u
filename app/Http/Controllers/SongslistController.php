<?php

namespace App\Http\Controllers;

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
        $song = DB::table('songs_metadata_file')->inRandomOrder()->first();

        return view('songslist', ['song' => $song]);
        // $json = json_decode(file_get_contents('http://host.com/api/stuff/1'), true);
    }
}
