<div id="create">
    <form action="{{route('comic.store')}}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="title" placeholder="Titolo">
        <input type="text" name="thumb" placeholder="Url thumb">
        <input type="number" min="0.01" max="9999.99" name="price" placeholder="Prezzo">
        <input type="text" name="series" placeholder="Serie">
        <input type="text" name="sale_date" placeholder="Data di vendita">
        <input type="text" name="type" placeholder="Tipo">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Sinossi"></textarea>
        <input type="submit" value="Aggiungi">
    </form>
</div>
