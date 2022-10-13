@foreach ($baca as $p)
<P> {{$p->name}} </p> mahasiswa:
<!-- panggilan $a bisa berlanjut 
ke panggilan tag -->
@foreach ($p->mahkuliahs as $mapel)
{{$mapel->nama}}, 
@endforeach
<hr>
@endforeach