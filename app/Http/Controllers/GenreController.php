<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // fetching data dari tabel genres
         $genres = DB::table('genres')->get();
         // return ke view dan kirirmkan data $genres
         return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses validasi data input dari form
        $request->validate([
            'name' => 'required|min:4'
        ]);
    // query untuk save data dari form
        $query = DB::table('genres')->insert([
            'name'=> $request['name']
        ]);

        return redirect()->route('genre.index')->with(['success' => 'Data Berhasil ditambahkan']);
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
        $genre = DB::table('genres')->where('id',$id)->first();
        return view('genre.update',compact('genre'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:4',
        ]);
        $query = DB::table('genres')
        ->where('id',$id)
        ->update([
            'name' => $request['name'],
        ]);
        return redirect()->route('genre.index')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $query = DB::table('genres')->where('id',$id)->delete();
        return redirect()->route('genre.index')->with(['success' => 'Data berhasil dihapus']);
    }
}