<?php

namespace App\Http\Controllers;

use App\Models\KomentarBerita;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

use function Ramsey\Uuid\v1;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        session(['active_button' => 'news']);
        return view('dashboard.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create');
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

        News::create([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('dashboard.news.show', compact('news'));
    }

    public function show_pages(News $news)
    {
        // ambil artikel sebelumnya
        $previousNews = News::where('id', '<', $news->id)->orderBy('id', 'desc')->first();

        // ambil artikel selanjutnya
        $nextNews = News::where('id', '>', $news->id)->orderBy('id', 'asc')->first();

         $comments = KomentarBerita::where('news_id', $news->id)->get();
         $totalComment = $comments->count();
        return view('pages.berita.show', compact('news', 'previousNews', 'nextNews', 'comments', 'totalComment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
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
                $path = $news->image; // menggunakan kembali path yang sudah ada di database
            }
        $news->update([
            'title' => $request->title, 
            'article' => $request->article,
            'image' => $path
        ]);
        
        
        return Redirect::route('dashboard.news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
