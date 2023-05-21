<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::all();
        session(['active_button' => 'destination']);
        return view('dashboard.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.destination.create');
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

        Destination::create([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.destination.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return view('dashboard.destination.show', compact('destination'));
    }
    public function show_pages(Destination $destination)
    {
        // ambil artikel sebelumnya
        $previousDestination = Destination::where('id', '<', $destination->id)->orderBy('id', 'desc')->first();

        // ambil artikel selanjutnya
        $nextDestination = Destination::where('id', '>', $destination->id)->orderBy('id', 'asc')->first();

        $comments = DestinationComment::where('destination_id', $destination->id)->get();
        $commentCount = $comments->count();
        return view('pages.destinasi.show', compact('destination', 'nextDestination', 'previousDestination', 'comments', 'commentCount'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
    
        return view('dashboard.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
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
                $path = $destination->image; // menggunakan kembali path yang sudah ada di database
            }
        $destination->update([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.destination.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
