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
    <title>Update</title>
</head>
<body>
    <div id="show">
        <a href="{{route('comic.index')}}">Home</a>
        <div class="card">
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->thumb}}" alt="{{$comic->type}} thumb">
            <span>Type: {{$comic->type}}</span>
            <span>Price: {{$comic->price}} $</span>
            <span>Series: {{$comic->series}}</span>
            <span>Sale date: {{$comic->sale_date}}</span>
            <h4>Description:</h4>
            <p>{{$comic->description}}</p>
        </div>
    </div>
</body>
<!-- laravel-base-crud - 20/05/21
 Author: lorenzobernini -->
</html>
