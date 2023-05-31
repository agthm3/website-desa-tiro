<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\AnnouncementComment;
use App\Models\Destination;
use App\Models\KomentarBerita;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          session(['active_button' => 'dashboard']);

        $commentsnews = KomentarBerita::all();
        $commentsannouncement = AnnouncementComment::all();
        $news = News::all();
        $announcement = Announcement::all();
        $destinations = Destination::all();

        $totalComment = $commentsnews->count() + $commentsannouncement->count();
        $totalNews = $news->count();
        $totalAnnouncement = $announcement->count();
        $totalDestination = $destinations->count();
        return view('dashboard.home.index', compact('commentsnews','commentsannouncement', 'totalComment', 'totalNews', 'totalAnnouncement', 'totalDestination', 'announcement', 'news'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
