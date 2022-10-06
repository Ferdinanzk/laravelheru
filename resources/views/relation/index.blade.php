@foreach ($content as $a)
<P> {{$a->name}}</p> terposting oleh {{$a->user->name}}
@endforeach