<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use App\Models\User;
use Illuminate\Http\Request;

class PrintMasuk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.masuk.print',[
            // 'masuk' => $masuk,
            'masuk' => Masuk::where('user_id', auth()->user()->id)->get(),
            'title' => 'Surat Masuk'
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
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function show(Masuk $masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Masuk $masuk)
    {
        // return view('dashboard.masuk.export',[
        //     'masuk' => Masuk::where('user_id', auth()->user()->id)->get(),
        //     'title' => 'Surat Masuk'
        // ]);
        return view('dashboard.masuk.export',[
            'title' => 'Surat Masuk',
            'masuk' => $masuk,
            'user' => User::where('id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masuk $masuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masuk $masuk)
    {
        //
    }
}
