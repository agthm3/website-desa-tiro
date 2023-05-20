<?php

namespace App\Http\Controllers;

use App\Models\KomentarBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class KomentarBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.berita.show', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       
        $request->validate([
            'comment' => 'required|string'
        ]);
        $user_id = Auth::user()->id;
        KomentarBerita::create([
            'comment'=> $request->comment,
            'news_id'=>$request->news_id,
            'user_id' => $user_id
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(KomentarBerita $komentarBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KomentarBerita $komentarBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KomentarBerita $komentarBerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KomentarBerita $komentarBerita)
    {
        //
    }
}
