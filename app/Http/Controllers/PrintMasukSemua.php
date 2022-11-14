<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PrintMasukSemua extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.semua.print',[
            'title' => 'Surat Masuk Semua',
            'masuk' => Masuk::latest()->get()
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
        return view('dashboard.semua.show',[
            'title' => 'Surat Masuk Semua',
            'masuk' => $masuk,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Masuk $masuk)
    {
        return view('dashboard.semua.print',[
            'title' => 'Surat Masuk Satu',
            'masuk' => Masuk::where('id', $masuk->id)->get(),
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
        // if($masuk->pdf){
        //     Storage::delete($masuk->pdf);
        // }
        // // buat deleted data 
        // Masuk::destroy($masuk->id);
        // // alert sukses delete
        // return redirect('/dashboard/semua')->with('toast_success', 'Surat Masuk Berhasil Dihapus!');
    }
}
