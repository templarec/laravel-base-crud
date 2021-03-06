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
    <title>laravel-base-crud</title>
</head>
<body>
<div id="root">
    <nav>
        <a href="{{route('comic.create')}}">Inserisci nuovo Fumetto</a>
    </nav>
    <main>
        @foreach($comic as $id => $fumetto)
            <div  class="card">
                <img src="{{$fumetto->thumb}}" alt="{{$fumetto->type}} thumb">

                    <div class="overlay">

                            <span>{{$fumetto->title}}</span>
                            <span>{{$fumetto->price}} $</span>
                            <a href="{{route('comic.show', ['comic' => $fumetto->id])}}">Dettagli</a>
                            <a href="{{route('comic.edit', ['comic' => $fumetto->id])}}">Modifica</a>
                            <form action="{{route('comic.destroy', ['comic' => $fumetto->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" @click="verMsh($event)" value="Elimina">
                            </form>

                    </div>
            </div>
        @endforeach
    </main>

</div>
<!-- Vue cdn development -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<!-- My custom JS script -->
<script src="/js/app.js"></script>
</body>
<!-- laravel-base-crud - 20/05/21
 Author: lorenzobernini -->
</html>
