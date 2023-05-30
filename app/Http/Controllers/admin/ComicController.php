<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     //questo metodo serve per mostrare tutti gli elementi
    {
        $comics = Comic::all();
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()        //questo metodo serve per creare un nuovo elemento
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //questo metodo serve per salvare un elemento. Request è un oggetto che contiene i dati della form
    {
        $data = $request->all();
        $comic = new Comic();
        // $comic->fill($data);     //update è fratello di fill e occorre inserire nel model il protected fillable cosi: protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();
        return redirect()->route('comic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //questo metodo serve per mostrare un singolo elemento
    {
        $comic = Comic::findOrFail($id); // find() è un metodo di Laravel che cerca un elemento per id
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)                        //questo metodo serve per modificare un elemento
    {
        $comic = Comic::findOrFail($id);             // find() è un metodo di Laravel che cerca un elemento per id
        return view('comic.edit', compact('comic')); //cosi ci restituisce l'elemento da modificare
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)   //questo metodo serve per aggiornare un elemento
    {
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        // $comic->update($data);     //update è fratello di fill e occorre inserire nel model il protected fillable cosi: protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
        $comic->save();
        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    //questo metodo serve per eliminare un elemento
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();                           //anche qui delete è fratello di fill e occorre inserire nel model il protected fillable cosi: protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
        return redirect()->route('comic.index');
    }
}
