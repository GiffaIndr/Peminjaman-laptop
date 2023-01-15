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
  width: 100%;
  height: 170px;
  object-fit: cover;
}

.daftar{
  padding: 5px;
  width: 100%;
}
h2{
  color: green;
}
</style>

      </div>
      <div class="container card mt-5">
      <img  class="image" src="{{asset('assets/img/bg_wikrama.jpg')}}" alt="">
      <div class="container pt-5 text-center">
        <h2 class="text-center">DATA PEMINJAMAN</h2><hr>
      <div class="row">
        <div class="col-sm-6 mt-5 p-5">
          <h5 class="card-title bg-success text-white">Total Pinjaman</h5>
          <div class="card shadow">
            <div class="card-body">
              
              <h1 class="card-text text-success"><b>{{$takes->where('done_time', NULL)->count()}}</b></h1>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-5 p-5">
          <h5 class="card-title bg-success text-white">Total Pengembalian</h5>
          <div class="card shadow">
            <div class="card-body">
              <h1 class="card-text text-success"><b>{{$takes->whereNotNull('done_time')->count()}}</b></h1>
            </div>
          </div>
         
        </div>
        
        </div>
        <a type="button" href="/take/dashboard" class="btn btn-g btn-outline-success" disabled>Dashboard</a>
      </div>
      <br>
      </div>
@endsection