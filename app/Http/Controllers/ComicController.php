<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use function GuzzleHttp\Promise\all;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $comic = Comic::all();
       return view('home', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Comic $comic)
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:comics|max:255',
            'description' => 'required',
            'thumb' => 'required|URL',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required',
            'type' => 'required'

        ]);
        $data = $request->all();

        $inserimento = new Comic();
        $inserimento->title = $data['title'];
        $inserimento->description = $data['description'];
        $inserimento->thumb = $data['thumb'];
        $inserimento->price = $data['price'];
        $inserimento->series = $data['series'];
        $inserimento->sale_date = $data['sale_date'];
        $inserimento->type = $data['type'];
        $inserimento->save();

        $comic = Comic::orderBy('id', 'desc')->first();
        return redirect()->route('comic.show', compact('comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required|URL',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required',
            'type' => 'required'

        ]);
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comic.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {

        $comic->delete();
        return redirect()->route('comic.index');
    }
}
