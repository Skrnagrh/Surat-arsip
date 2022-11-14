<?php

namespace App\Http\Controllers;

use App\Models\Keluar;
use Illuminate\Http\Request;

class PrintKeluar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.keluar.print',[
            'keluar' => Keluar::where('user_id', auth()->user()->id)->get(),
            'title' => 'Surat keluar'
        ]);
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
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function show(Keluar $keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluar $keluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keluar $keluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluar $keluar)
    {
        //
    }
}
