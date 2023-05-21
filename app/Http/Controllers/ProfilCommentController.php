<?php

namespace App\Http\Controllers;

use App\Models\ProfilComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfilCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $request->validate([
            'comment'
        ]);

        if (!Auth::user()) {
            return redirect('login');
        }
        $user_id = Auth::user()->id;
        ProfilComment::create([
            'comment' => $request->comment, 
            'user_id' => $user_id,
            'profil_id' => $request->profil_id
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilComment $profilComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilComment $profilComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfilComment $profilComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilComment $profilComment)
    {
        //
    }
}
