<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Laravel<a>
</div>
</nav>
@if(session('message'))
<p> {{session('message')}} </p>
@endif
<form  action="{{route('test.inputdatadiri')}}" method="">@csrf 
  <input type="text" name="nama"
   placeholder="Tulis nama" 
   value="{{old('nama')}}">
</br>
@error('nama')
<p>{{$message}}</p>
@enderror
</br>
  <input type="text" name="kelas"
   placeholder="Tulis kelas" 
   value="{{old('kelas')}}">
</br>
@error('kelas')
<p>{{$message}}</p>
@enderror
</br>
  <input type="text" name="jurusan"
   placeholder="Tulis jurusan" 
   value="{{old('jurusan')}}">
</br>
@error('jurusan')
<p>{{$message}}</p>
@enderror
</br>
  <input type="text" name="nohp"
   placeholder="Tulis NO.HP" 
   value="{{old('nohp')}}">
</br>
@error('nohp')
<p>{{$message}}</p>
@enderror
</br>
<input type="text" name="hobby"
   placeholder="Tulis Hobby kamu" 
   value="{{old('hobby')}}">
</br>
@error('hobby')
<p>{{$message}}</p>
@enderror
</br>
<textarea placeholder="cita-cita" name="cita"></textarea>
@error('cita')
<p>{{$message}}</p>
@enderror
</br>
</br>
<textarea placeholder="alamat" name="alamat"></textarea>
@error('alamat')
<p>{{$message}}</p>
@enderror
</br>
</br>
<input class="btn btn-small btn-success" type="submit" value="simpan">

</form>  
</div>
</body>
</html>