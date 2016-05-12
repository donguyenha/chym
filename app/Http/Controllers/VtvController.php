<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vtv;

class VtvController extends Controller
{
    public function index()
    {
        $items = Vtv::orderBy('Ins', 'desc')->paginate();

        return view('vtv.index', ['items' => $items]);
    }
}
