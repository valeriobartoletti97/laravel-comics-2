<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $linksComics = config('db.linksComics');
        $linksDc = config('db.linksDc');
        $linksSites = config('db.linksSites');
        $linksShop = config('db.linksShop');
        $comics = Comic::all();
        return view('comics.index', compact('comics','linksComics', 'linksDc', 'linksSites', 'linksShop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //
        $linksComics = config('db.linksComics');
        $linksDc = config('db.linksDc');
        $linksSites = config('db.linksSites');
        $linksShop = config('db.linksShop');
        return view('comics.create', compact('linksComics', 'linksDc', 'linksSites', 'linksShop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->series = $data['series'];
        $newComic->type = $data['type'];
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View
     */
    public function show(Comic $comic)
    {
        //
        $linksComics = config('db.linksComics');
        $linksDc = config('db.linksDc');
        $linksSites = config('db.linksSites');
        $linksShop = config('db.linksShop');
        return view('comics.show', compact('comic','linksComics', 'linksDc', 'linksSites', 'linksShop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
