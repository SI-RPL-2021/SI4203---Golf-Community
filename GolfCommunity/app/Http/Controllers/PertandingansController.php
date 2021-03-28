<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertandingans;



class PertandingansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('pertandingans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Pertandingans();
        if ($request->hasFile('cover_image') ) {
            $path = public_path().'/images';
            $cover = $request->file('cover_image');
            $cover->move($path.'/cover', $cover->getClientOriginalName());
            $cover_path = "images/cover/".$cover->getClientOriginalName();

            $new->nama = $request->nama;
            $new->lokasi = $request->lokasi;
            $new->alamat = $request->alamat;
            $new->date = $request->date;
            $new->harga = $request->harga;
            $new->tipe_aktivitas = $request->tipe_aktivitas;
            $new->tipe_game = $request->tipe_game;
            $new->level_game = $request->level_game;
            $new->kontak = $request->kontak;
            $new->pembayaran = $request->pembayaran;
            $new->jumlah_pemain = $request->jumlah_pemain;
            $new->deskripsi = $request->deskripsi;
            $new->image_path = $cover_path;
            $new->save();

            return redirect()->route('challenge');
        }else{
            dd('hello');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $game = Pertandingans::findorfail($id);

        return view('pertandingans.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function list(Request $request){

        $games = Pertandingans::all();
        return view('pertandingans.list', compact( 'games'));
    }
}
