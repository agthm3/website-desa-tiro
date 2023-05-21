<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Layanan;
use App\Models\PemerintahDesa;
use App\Models\ProfilComment;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profil()
    {
        $profil = ProfilDesa::all()->first();
        $announcements = Announcement::latest()->limit(5)->get();
        $comments = ProfilComment::where('profil_id', $profil->id)->get();
        $commentCount = $comments->count();
        return view('pages.layanan.profil', compact('profil', 'announcements','comments' , 'commentCount'));
    }
    public function pemerintah()
    {
          $pemerintah = PemerintahDesa::all()->first();
           $announcements = Announcement::latest()->limit(5)->get();
        return view('pages.layanan.pemerintah', compact('pemerintah', 'announcements'));
    }
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        //
    }
}
