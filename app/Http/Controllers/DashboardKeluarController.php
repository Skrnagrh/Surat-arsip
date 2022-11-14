<?php

namespace App\Http\Controllers;

use App\Models\Keluar;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.keluar.index', [
            'title' => 'Keluar',
            // 'keluar1' => Keluar::where('user_id', auth()->user()->id)->paginate(5)->withQueryString(),
            "keluar1" => Keluar::latest()->where('user_id', auth()->user()->id)->filter(request(['searchkeluar']))->paginate(5)->withQueryString(),
            'user' => User::where('id', auth()->user()->id)->get(),

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
        // buat ngeposting data 
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'lamp' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'nomor' => 'required|max:255',
            'prihal' => 'required|max:255',
            'pdf' => 'required|mimes:pdf|max:5024',
            'keterangan' => 'required|max:255',
        ]);

        if ($request->file('pdf')) {
            $validatedData['pdf'] = $request->file('pdf')->store('keluar');
        }

        $validatedData['user_id'] = auth()->user()->id;
        // buat menyimpan postingan
        Keluar::create($validatedData);
        // untuk menampilkan alert atau kata sukses 
        return redirect('/dashboard/keluar')->with('toast_success', 'Surat keluar Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function show(Keluar $keluar)
    {
        return view('dashboard.keluar.show', [
            'keluar' => $keluar,
            'title' => 'Surat Keluar',
            'user' => User::where('id', auth()->user()->id)->get(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluar $keluar)
    {
        return view('dashboard.keluar.edit', [
            'keluar' => $keluar,
            'title' => 'Surat Keluar',
            'user' => User::where('id', auth()->user()->id)->get(),

        ]);
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
        // buat menyimpan update data
        $rules = [
            'nama' => 'required|max:255',
            'nomor' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'lamp' => 'required|max:255',
            'prihal' => 'required|max:255',
            'alamat' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'pdf' => 'required|mimes:pdf|max:5024',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('pdf')) {
            if ($request->oldpdf) {
                Storage::delete($request->oldpdf);
            }
            $validatedData['pdf'] = $request->file('pdf')->store('keluar');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Keluar::where('id', $keluar->id)
            ->update($validatedData);

        return redirect('/dashboard/keluar')->with('toast_success', 'Surat keluar Berhasil Diedit!');
        return back()->with('error', 'Data Failed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluar  $keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluar $keluar)
    {
        if ($keluar->pdf) {
            Storage::delete($keluar->pdf);
        }
        // buat deleted data 
        $keluar::destroy($keluar->id);
        // alert sukses delete
        return redirect('/dashboard/keluar')->with('toast_success', 'Surat keluar Berhasil Dihapus!');
    }
}
