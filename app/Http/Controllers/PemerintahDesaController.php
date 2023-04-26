<?php

namespace App\Http\Controllers;

use App\Models\PemerintahDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PemerintahDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemerintahs = PemerintahDesa::all();
         session(['active_button' => 'profilDesa']);
        return view('dashboard.pemerintah.index', compact('pemerintahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pemerintah.create');
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

        PemerintahDesa::create([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.pemerintah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PemerintahDesa $pemerintahDesa)
    {
        return view('dashboard.pemerintah.show', compact('pemerintahDesa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PemerintahDesa $pemerintahDesa)
    {
        return view('dashboard.pemerintah.edit', compact('pemerintahDesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PemerintahDesa $pemerintahDesa)
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
                $path = $pemerintahDesa->image; // menggunakan kembali path yang sudah ada di database
            }
        $pemerintahDesa->update([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.pemerintah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PemerintahDesa $pemerintahDesa)
    {
        //
    }
}
