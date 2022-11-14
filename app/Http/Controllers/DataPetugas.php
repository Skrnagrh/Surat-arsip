<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DataPetugas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.datapetugas.index',[
            'title' => 'Data Petugas',
            'user1' => User::latest()->paginate(5)->withQueryString(),
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
       
     $validatedData = $request->validate([
             'name' => 'required|max:255',
             'induk' => 'required|max:255',
             'email' => 'required|email:dns|unique:users',
             'password' => 'required|min:8|max:255'
         ]);
         
         // $validatedData['password'] = bcrypt($validatedData['password']);
         $validatedData['password'] = Hash::make($validatedData['password']);
 
         User::create($validatedData);
         return redirect('/dashboard/datapetugas')->with('toast_success','Registrasi Admin Baru Berhasil');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.datapetugas.edit',[
            'title' => 'Edit Data Petugas',
            'user' => $user,

        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        // $user = User::findOrFail($id);

        // $user->induk = $request->get('induk');

        // $user->name = $request->get('name');
    
        // $user->email = $request->get('email');

        // $user->password = $request->get('password');
    
        // $user->save();
    
        // return redirect('/dashboard/datapetugas')->with('toast_success', 'Admin Berhasil Diedit!');

        $rules = [
            'name' => 'required|max:255',
             'induk' => 'required|max:255',
             'email' => 'required|email:dns',
             'password' => 'required|min:8|max:255'
        ];
        
        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        user::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/datapetugas')->with('toast_success', 'Admin Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    public function destroy($id)
    { 
        // User::destroy($user->id);
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/dashboard/datapetugas')->with('toast_success', 'Satu Data Admin Berhasil Dihapus!');
    }
}
