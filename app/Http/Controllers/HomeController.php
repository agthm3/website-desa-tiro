<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationComment;
use App\Models\KomentarBerita;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session(['active_button' => 'dashboard']);
        $news = News::latest()->limit(3)->get();
        $destinations = Destination::latest()->limit(3)->get();
        // $comments = KomentarBerita::where('news_id', $news->id)->get();
        
         $news->loadCount('comments');
        return view('pages.home.index', compact('news', 'destinations'));
    }
    public function maintenance()
    {
        return view('maintenance');
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
