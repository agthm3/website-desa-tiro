<?php

namespace App\Http\Controllers;

use App\Models\PemerintahComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PemerintahCommentController extends Controller
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
            return Redirect::route('login');
        }
        $user_id = Auth::user()->id;
        PemerintahComment::create([
            'comment' => $request->comment, 
            'user_id' => $user_id,
            'pemerintah_id' => $request->pemerintah_id
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(PemerintahComment $pemerintahComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PemerintahComment $pemerintahComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PemerintahComment $pemerintahComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PemerintahComment $pemerintahComment)
    {
        //
    }
}
