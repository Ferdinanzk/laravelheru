@foreach ($order as $a)
<P> {{$a->product}} dibeli oleh  oleh {{$a->user->name}} </p> 
@endforeach