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

    @foreach($comic as $id => $fumetto)
        <div class="card">
            <a href="{{route('comic.show', ['comic' => $fumetto->id])}}"><img src="{{$fumetto->thumb}}" alt="{{$fumetto->type}} thumb"></a>
            <span>{{$fumetto->title}}</span>
            <span>{{$fumetto->type}}</span>
            <span>{{$fumetto->price}} $</span>
            <span>{{$fumetto->series}}</span>
            <span>{{$fumetto->sale_date}}</span>
            <p>{{$fumetto->description}}</p>
        </div>
    @endforeach

<!-- My custom JS script -->
<script src="/js/main.js"></script>
</body>
<!-- laravel-base-crud - 20/05/21
 Author: lorenzobernini -->
</html>
