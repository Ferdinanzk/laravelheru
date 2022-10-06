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
<form action="{{route('posts.update',[$tampils->id])}}" method="post">

@csrf
{{method_field('PUT')}}
<div class="card">
<div class="card-header">Update food</div>
<div class="card-body">

<div class="form-group">
<label for="name">Title</label>
<input type="text" name="title"
class="form-control @error('title') is-invalid @enderror"
value="{{$tampils->title}}">
@error('title')
<span class="invalid-feedback"
role="alert">
<strong>{{ $message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">Body</label>
<input type="text" name="body"
class="form-control @error('body') is-invalid @enderror"
value="{{$tampils->body}}">
@error('body')
<span class="invalid-feedback"
role="alert">
<strong>{{$message}}</strong>
</span>
@enderror
</div>

<div class="form-group">
<label for="name">Category</label>
<input type="text" name="category"
class="form-control @error('category') is-invalid @enderror"
value="{{$tampils->category}}">
@error('category')
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