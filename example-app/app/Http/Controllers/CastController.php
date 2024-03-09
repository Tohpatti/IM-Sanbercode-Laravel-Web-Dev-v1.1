<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('cast.index', compact('casts'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:casts',
            'bio' => 'required',
        ]);
        $query = DB::table('casts')->insert([
            "name" => $request["name"],
            "age" => "0", // default value for "age" column
            "bio" => $request["bio"]
        ]);
        return redirect('/cast');
    }

    public function show($id)
    {
        $casts = DB::table('casts')->where('id', $id)->first();
        return view('cast.show', compact('casts'));
    }

    
    public function edit($id)
    {
        $casts = DB::table('casts')->where('id', $id)->first();
        return view('cast.edit', compact('casts'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:casts',
            'bio' => 'required',
        ]);

        $query = DB::table('casts')
            ->where('id', $id)
            ->update([
                'name' => $request["name"],
                'bio' => $request["bio"]
            ]);
        return redirect('/cast');
    }

    public function destroy($id)
    {
        $query = DB::table('casts')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
