<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vtv;

use Storage;

use Session;

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
        //dd($id);
        $item = Vtv::findOrFail($id);

        return view('vtv.edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = Vtv::findOrFail($id);
        /*
         *  do save with MassAssignment
         *  should edit Model with $fillable attribute
         *  do same with create new record
         *  $item->create($request->all());
         *  https://laravel.com/docs/5.2/eloquent#mass-assignment
         */
        $item->update($request->all());

        //  https://laravel.com/docs/5.2/responses#redirecting-named-routes
        return redirect()->route('posts.show', ['id' => $item->id]);
    }

    public function getYT($id)
    {
        $item = Vtv::findOrFail($id);
        Storage::put(str_slug($item->title), json_encode($item, JSON_UNESCAPED_UNICODE));
        //dd($item);
        Session::set('getYT', 'Create file successfully');
        return redirect()->route('posts.index');
    }
}
