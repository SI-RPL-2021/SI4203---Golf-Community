<?php

namespace App\Http\Controllers;

use App\Models\Pertandingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BuatpertandinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Data Post';
        $data['q'] = $request->q;
        $data['rows'] = Pertandingan::where('post_title', 'like', '%' . $request->q . '%')->get();
        return view('post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertandingan  $pertandingan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertandingan $pertandingan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertandingan  $pertandingan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertandingan $pertandingan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertandingan  $pertandingan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertandingan $pertandingan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertandingan  $pertandingan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertandingan $pertandingan)
    {
        //
    }
}
