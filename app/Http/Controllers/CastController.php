<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'age' => 'required',
            'bio' => 'required',
    ]);
    $query = DB::table('casts')->insert([
        'name' => $request['name'],
        'age' => $request['age'],
        'bio'=> $request['bio'],
    ]);
    return redirect()->route('cast.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $casts =  DB::table('casts')->where('id',$id)->first();

        return view('cast.update', compact('casts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=> 'required|min:4',
            'age' => 'required',
            'bio'=> 'required',
        ]);
        $query = DB::table('casts')->where('id',$id)->update([
            'name'=> $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio'],
        ]);
        return redirect()->route('cast.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('casts')->where('id',$id)->delete();

        return redirect()->route('cast.index')->with(['success'=> 'Data Berhasil Dihapus!']);
    }
}