<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Hash;

use Cache;

use App\alobao;

class HomeController extends Controller
{
    public function index(Request $r)
    {
        //$news_details = alobao::find(1);
        $key = Hash::make($r->fullUrl());
        $minutes = 180;
        $news_details = Cache::remember($key, $minutes, function() {
            return alobao::orderBy('create_at', 'DESC')->paginate();
        });
        //$news_details = alobao::orderBy('create_at', 'DESC')->paginate();
        //return $alobao;
        return view('home.index', ['news_details' => $news_details, 'request' => $r->url()]);
    }

    public function about(Request $r)
    {
        //$news_details = alobao::find(1);
        $key = Hash::make($r->fullUrl());
        $minutes = 180;
        $news_details = Cache::remember($key, $minutes, function() {
            return alobao::orderBy('create_at', 'DESC')->paginate();
        });
        //$news_details = alobao::orderBy('create_at', 'DESC')->paginate();
        //return $alobao;
        return view('home.index', ['news_details' => $news_details, 'request' => $r->url()]);
    }

    public function check(Request $r)
    {
        //dd(implode('',$r->all()));
        //dd($r->path());
        //dd($r->fullUrl());
        //foreach ($r->all() as $key => $value) {
        //return $r->path() . $key . '=' . $value;
        //return $r->fullUrl();//WithQuery();
        return Hash::make($r->fullUrl());
        //return Hash::make($key . $value . $r->path());
        //}
        //return Hash::make($r->all() . $r->path());
        //return env('CACHE_DRIVER');
    }
}
