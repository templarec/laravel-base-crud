<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>

    <!-- Google fonts cdn -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- My custom style -->
    <link rel="stylesheet" href="/css/app.css">
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
<div id="create">
    <a href="{{route('comic.index')}}">Home</a>
    <h2>Inserimento nuovo fumetto</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('comic.store')}}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="title" placeholder="Titolo">
        <input type="text" name="thumb" placeholder="Url thumb">
        <input type="number"  name="price" placeholder="Prezzo">
        <input type="text" name="series" placeholder="Serie">
        <input type="text" name="sale_date" placeholder="Data di vendita">
        <input type="text" name="type" placeholder="Tipo">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Sinossi"></textarea>
        <input type="submit" value="Aggiungi">
    </form>
</div>
</body>
<!-- laravel-base-crud - 20/05/21
 Author: lorenzobernini -->
</html>
