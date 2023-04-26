<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfilDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profils = ProfilDesa::all();
         session(['active_button' => 'profilDesa']);
        return view('dashboard.profil.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'image' => 'image'
        ]);
        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        ProfilDesa::create([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.profil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilDesa $profilDesa)
    {
        return view('dashboard.profil.show', compact('profilDesa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilDesa $profilDesa)
    {
        return view('dashboard.profil.edit', compact('profilDesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfilDesa $profilDesa)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'image' => 'image'
        ]);


        if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

                Storage::disk('local')->put('public/'. $path, file_get_contents($file));
            } else {
                $path = $profilDesa->image; // menggunakan kembali path yang sudah ada di database
            }
        $profilDesa->update([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.profil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilDesa $profilDesa)
    {
        //
    }
}
