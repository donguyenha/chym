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

    public function show($id)
    {
        $item = Vtv::findOrFail($id);

        return view('vtv.show', ['item' => $item]);
    }

    public function edit($id)
    {
        $item = Vtv::findOrFail($id);

        return view('vtv.edit', ['item' => $item]);
    }
}
