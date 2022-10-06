<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form  action="{{route('test.store')}}" method="">@csrf 
  <input type="text" name="judul"
   placeholder="Tulis Judul Produk" 
   value="{{old('judul')}}">
</br>
@error('judul')
<p>{{$message}}</p>
@enderror
</br>
<textarea name="deskripsi"></textarea>
@error('deskripsi')
<p>{{$message}}</p>
@enderror
</br>
<input type="submit" value="simpan">

</form>  
</body>
</html>