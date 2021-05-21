<a href="{{route('comic.index')}}">Home</a>
<div class="card">
    <img src="{{$comic->thumb}}" alt="{{$comic->type}} thumb">
    <span>{{$comic->title}}</span>
    <span>{{$comic->type}}</span>
    <span>{{$comic->price}} $</span>
    <span>{{$comic->series}}</span>
    <span>{{$comic->sale_date}}</span>
    <p>{{$comic->description}}</p>
</div>
