<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class YoutubeController extends Controller
{
    public function index()
    {

        $video_list = DB::select(
            'SELECT *
            FROM `songs`
        ');

        $display = null;
        if(isset( $_GET['id'] )) {
            $display = DB::selectOne('SELECT *
                            FROM `songs`
                            WHERE `id` = ? ', [$_GET['id']]);
        }

        return view('jukebox', [
            'display' => $display,
            'videos_list' => $video_list
        ]);
        


    }

     
}
