<?php

namespace App\Http\Services;
use DB;


class YoutubeService
{
    public static function video_list()
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