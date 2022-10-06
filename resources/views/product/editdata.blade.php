@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
@if(Session('success'))
<div class="alert alert-success">
{{Session('success')}}
</div>
@endif
<form action="{{route('test.updatedata',[$data->id])}}" method="post">

@csrf
{{method_field('PUT')}}
<div class="card">
<div class="card-header">Update food</div>
<div class="card-body">

<div class="form-group">
<label for="name">Nama</label>
<input type="text" name="nama"
class="form-control @error('nama') is-invalid @enderror"
value="{{$data->nama}}">
@error('nama')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">Kelas</label>
<input type="text" name="kelas"
class="form-control @error('kelas') is-invalid @enderror"
value="{{$data->kelas}}">
@error('kelas')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">Jurusan</label>
<input type="text" name="jurusan"
class="form-control @error('jurusan') is-invalid @enderror"
value="{{$data->jurusan}}">
@error('jurusan')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">No-Hp</label>
<input type="text" name="nohp"
class="form-control @error('nohp') is-invalid @enderror"
value="{{$data->nohp}}">
@error('nohp')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">Hobby</label>
<input type="text" name="hobby"
class="form-control @error('hobby') is-invalid @enderror"
value="{{$data->hobby}}">
@error('hobby')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">Cita-Cita</label>
<input type="text" name="cita"
class="form-control @error('cita') is-invalid @enderror"
value="{{$data->nama}}">
@error('cita')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">Alamat</label>
<input type="text" name="alamat"
class="form-control @error('alamat') is-invalid @enderror"
value="{{$data->alamat}}">
@error('alamat')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>



<div class="form-group">
<button class="btn
btn-outline-primary" type="submit">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
@endsection