@extends('sidebar')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
    a{
        text-decoration: none;
        
    color: grey;
    }

    ol, ul {
    padding-left: inherit;
}
.image{
  width: 1  00%;
  height: 170px;
  object-fit: cover;
 
}
.btn{
  transition: all 0.8s;
  color: white;
}
.btn:hover{
  background-color: white;
  color: black;
  box-shadow: 0 0 10px green;
}

.daftar{
  padding: 5px;
  width: 100%;
}
section{
  margin-top: 20px;
}
p{
  margin-top: 5px;
}
.fas{
  top: 0;
}
</style>

<div class="container mt-5">
  <img  class="image" src="{{asset('assets/img/bg_wikrama.jpg')}}" alt="">
  
<table  style="background-color: #daffa5; color: #B44C38; text-align:center;" class="table table-striped">
  
  <thead>
   
    <p class="mt-3"> <a class="fas fa-user"></a>{{ Auth::user()->username}}</p>  
   
    <section>
    @if (session('addTake'))
    <div class="alert alert-success">
        {{ session('addTake') }}
    </div>
    @endif
  </section>
    <hr>
    <tr>
      <th  scope="col">No</th>
      <th name="nama" scope="col">Nama</th>
      <th name="nis" scope="col">Nis</th>
      <th name="saksi" scope="col">Saksi</th>
      <th name="rayon" scope="col">Rayon</th>
      <th name="keperluan" scope="col">Keperluan</th>
      <th name="tanggal_pinjam" scope="col">Tanggal Pinjam</th>
      
      <th name="status" scope="col">Tanggal Kembali</th>
      <th  scope="col">Action</th>
    </tr>
  </thead>

  @foreach($takes as $take)

  <tbody>
    <tr>
      @if ($take['status'] == 1)
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$take->nama}}</td>
      <td>{{$take->nis}}</td>
      <td>{{$take->saksi}}</td>
      <td>{{$take->rayon}}</td>
      <td>{{$take->keperluan}}</td>
      <td>{{$take->tanggal_pinjam}}</td>
      <td>{{\Carbon\Carbon::parse($take ['done_time'])->format('j F, Y')}}</td>
      <td>
      <a class="btn btn-success pl-5">Complete</a>
      </td>
      <td>
        <form action="{{route('take.delete', $take->id)}}" method="post">
          @csrf
          @method('DELETE')
      <button type="submit"  class="btn btn-danger">Delete</button>
        </form>
      </td>
      @else
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$take->nama}}</td>
      <td>{{$take->nis}}</td>
      <td>{{$take->saksi}}</td>
      <td>{{$take->rayon}}</td>
      <td>{{$take->keperluan}}</td>
      <td>{{$take->tanggal_pinjam}}</td>
      <td>Belum dikembalikan</td>
      <td>
        <div class="uc">
      <a  href="{{ route('take.updateCompleted', $take->id) }}" class="btn btn-warning">on-progress<a>
      </div>
      </td>
      <td>
        <form action="{{route('take.delete', $take->id)}}" method="post">
          @csrf
          @method('DELETE')
      <button type="submit"  class="btn btn-danger">Delete</button>
        </form>
      </td>
      @endif
    </tr>
   
  </tbody>
  @endforeach
</table>
</div>
@endsection
