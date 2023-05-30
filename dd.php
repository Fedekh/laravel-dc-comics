<?php

use GuzzleHttp\Psr7\Request;

per update abbiamo bisogno di un form, quindi usiamo edit e update insieme

edit diventa

public function edit($id)           //questo metodo serve per modificare un elemento
    {
        $comic = Comic::findOrFail($id); // find() è un metodo di Laravel che cerca un elemento per id
        return view('comic.edit', compact('comic')); //cosi ci restituisce l'elemento da modificare
    }

// si crea la pagina edit.blade.php

// e inseriamo una form gia compilata con i dati del comic
?>
<form action="{{ 'route(comic.update', $comid->id}}">
    @csrf
    //bisogna aggiungere un metodo put perche il metodo update di laravel non funziona con il metodo post
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $comic->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="thumb">Thumb</label>
        <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}">
    </div>
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}">
    </div>
    <select name="" id="">
        <option @selected($comic->type==='comic') value="comic">comic</option>
        <option @selected($comic->type==='grapich novel') value="graphic novel">graphic novel</option>
    </select>
    <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ $comic->sale_date }}">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" id="type" class="form-control" value="{{ $comic->type }}">
    </div>
    <input type="submit" value="Salva" class="btn btn-primary">
</form>

<?php

// nella funzione update ora

public function update(Request  $request, $id)   //questo metodo serve per aggiornare un elemento
    {
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);//update è fratello di fill e occorre inserire nel model il protected fillable cosi: protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
        return redirect()->route('comic.show', $comic->id);
    }

    
    //per il delete invece
    //tocca aggiungere una forma con un metodo delete cosi
    
    <form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" value="Elimina" class="btn btn-danger">

    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();//anche qui delete è fratello di fill e occorre inserire nel model il protected fillable cosi: protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
        return redirect()->route('comic.index');
    }