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

</style>
<div class="contact-form">
  <div class="card p-4 shadow mt-5 m-5 pl-5">
<h2>Silahkan Isi Form Pendaftaran</h2><hr>
<form class="daftar" action="{{route('take.store')}}" method="post">
  @csrf
  <p>Nama</p>
   <input type="text" name="nama" class="text-box" placeholder="nama" required>
   <p>Nis</p>
   <input type="number" name="nis" class="text-box" placeholder="nis" required>
   <p> Rayon</p>
   <select type="text" name="rayon" class="text-box" placeholder="rayon" required>
   <option hidden ></option>
   <option>cisarua 1</option>
   <option>cisarua 2</option>
   <option>cisarua 3</option>
   <option>cisarua 4</option>
   <option>cisarua 5</option>
   <option>cisarua 6</option></select>
   <p>Saksi</p>
   <input type="text" name="saksi" class="text-box" placeholder="saksi" required>
   <p>Keperluan</p>
   <input type="text" name="keperluan" class="text-box" placeholder="keperluan" required>
   <p>Tanggal Pinjam</p>
   <input type="date" name="tanggal_pinjam" class="text-box" placeholder="tanggal pinjam" required>

 
   
   <input type="submit" name="submit" class="send-btn" value="send">
</form>
  </div>
@if(Session::get('successAdd'))
                <div class="alert alert-danger">
                {{Session::get('successAdd')}}</div>
                @endif
  @endsection 