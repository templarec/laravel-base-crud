<div id="edit">
    <form action="{{route('comic.update', ['comic' => $comic->id])}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$comic->title}}" placeholder="Titolo">
        <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Url thumb">
        <input type="number"  name="price" value="{{$comic->price}}" placeholder="Prezzo">
        <input type="text" name="series" value="{{$comic->series}}" placeholder="Serie">
        <input type="text" name="sale_date" value="{{$comic->sale_date}}" placeholder="Data di vendita">
        <input type="text" name="type" value="{{$comic->type}}" placeholder="Tipo">
        <textarea name="description" id="description" cols="30" rows="10"  placeholder="Sinossi">{{$comic->description}}</textarea>
        <input type="submit" value="Modifica">
    </form>
</div>
