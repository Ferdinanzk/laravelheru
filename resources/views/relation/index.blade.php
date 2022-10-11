@foreach ($contents as $a)
<P> {{$a->name}} </p> Tags:
<!-- panggilan $a bisa berlanjut 
ke panggilan tag -->
@foreach ($a->tags as $b)
{{$b->name}}, 
@endforeach
<hr>
@endforeach