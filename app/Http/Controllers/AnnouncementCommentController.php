<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\AnnouncementComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AnnouncementCommentController extends Controller
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
            'comment' => 'required|string',
            
        ]);
        if (!Auth::user()) {
            return redirect('login');
        }
        $user_id = Auth::user()->id;

        AnnouncementComment::create([
            'comment' => $request->comment, 
            'user_id' => $user_id,
            'announcement_id' => $request->announcement_id
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(AnnouncementComment $announcementComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnnouncementComment $announcementComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnnouncementComment $announcementComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnnouncementComment $announcementComment)
    {
        //
    }
}
