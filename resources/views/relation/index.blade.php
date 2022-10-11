@foreach ($tags as $a)
<P> {{$a->name}} </p> konten:
<!-- panggilan $a bisa berlanjut 
ke panggilan tag -->
@foreach ($a->contents as $b)
{{$b->name}}, 
@endforeach
<hr>
@endforeach