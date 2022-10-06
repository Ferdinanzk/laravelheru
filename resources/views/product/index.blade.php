@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8"> -->
            <div class="card">
                <div class="card-header">Tampil Data</div>

                <div class="card-body">
                @if(Session('success'))
                <div class="alert alert-success">
                {{Session('success')}}
                </div>
                @endif
                <table class="table">
                <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">No-Hp</th>
                <th scope="col">Hobby</th>
                <th scope="col">Cita-Cita</th>
                <th scope="col">Alamat</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
                </thead>
                @if(count($data)>0)
                @foreach($data as $key=>$a)
                <th scope="row">{{$key+1}}</th>
                <td>{{$a->nama}}</td>
                <td>{{$a->kelas}}</td>
                <td>{{$a->jurusan}}</td>
                <td>{{$a->nohp}}</td>
                <td>{{$a->hobby}}</td>
                <td>{{$a->cita}}</td>
                <td>{{$a->alamat}}</td>
                <td>
                  <a href="{{route('test.edit',
                  [$a->id])}}"><button class="btn
                  btn-outline-success">Edit</button></a>
                </td>

                <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary"
                  data-toggle="modal"
                  data-target="#exampleModal{{$a->id}}">
                  Delete
                  </button>
                  <!-- Modal -->
                  <div class="modal fade"
                  id="exampleModal{{$a->id}}" tabindex="-1"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <form
                  action="{{route('test.destroy',[$a->id])}}"
                  method="post">
                  @csrf
                  {{method_field('DELETE')}}
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title"
                  id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close"
                  data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                  </button>
                  </div>
                  <div class="modal-body">
                  Apakah Anda Yakin ?
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"

                  data-dismiss="modal">Close</button>

                  <button type="submit" class="btn

                  btn-outline-danger">Delete</button>
                  </div>
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  </td>
                  </tr>
                  @endforeach
                  @else
                  <td>Tidak ada  yang dapat ditampilkan.</td>
                  @endif
            
                </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
