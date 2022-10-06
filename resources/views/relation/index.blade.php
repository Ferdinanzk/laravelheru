@foreach ($content as $a)
<P> {{$a->name}}</p> diposting oleh {{$a->user->name}}
@endforeach