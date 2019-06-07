<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class YoutubeController extends Controller
{
    public function index()
    {
        $video = DB::selectOne('SELECT *
                            FROM `songs`
                            WHERE `id` = ? ', ['1']);

        return view('jukebox', [
            'video' => $video
        ]);
        


    }
}
