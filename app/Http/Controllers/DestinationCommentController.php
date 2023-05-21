<?php

namespace App\Http\Controllers;

use App\Models\DestinationComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DestinationCommentController extends Controller
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
            'comment' => 'required|string'
        ]);
        if (!Auth::user()) {
            return redirect('login');
        }
        $user_id = Auth::user()->id;
        DestinationComment::create([
            'comment' => $request->comment,
            'user_id' => $user_id,
            'destination_id' => $request->destination_id
        ]);

    return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(DestinationComment $destinationComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DestinationComment $destinationComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DestinationComment $destinationComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestinationComment $destinationComment)
    {
        //
    }
}
