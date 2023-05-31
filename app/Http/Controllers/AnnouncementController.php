<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\AnnouncementComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        session(['active_button' => 'announcement']);
        return view('dashboard.announcement.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.announcement.create');
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
        $user_id = Auth::user()->id;
        Announcement::create([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path, 
            'user_id' => $user_id
        ]);
        
        
        return Redirect::route('dashboard.announcement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        return view('dashboard.announcement.show', compact('announcement'));
    }

    public function show_pages(Announcement $announcement)
    {
        // ambil artikel sebelumnya
        $previousAnnouncement = Announcement::where('id', '<', $announcement->id)->orderBy('id', 'desc')->first();

        // ambil artikel selanjutnya
        $nextAnnouncement = Announcement::where('id', '>', $announcement->id)->orderBy('id', 'asc')->first();


        $comments = AnnouncementComment::where('announcement_id', $announcement->id)->get();

        $commentCount = $comments->count();
        return view('pages.pengumuman.show', compact('announcement', 'previousAnnouncement', 'nextAnnouncement', 'comments', 'commentCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        return view('dashboard.announcement.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
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
                $path = $announcement->image; // menggunakan kembali path yang sudah ada di database
            }
        $announcement->update([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.announcement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
