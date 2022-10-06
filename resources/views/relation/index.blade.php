@foreach ($order as $a)
<P> {{$a->product}} dibeli oleh  {{$a->user->name}} </p> 
@endforeach