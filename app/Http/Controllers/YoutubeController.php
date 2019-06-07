<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class YoutubeController extends Controller
{
    public function index()
    {

        return \App\Http\Services\YoutubeService::video_list();
        


    }

     
}
