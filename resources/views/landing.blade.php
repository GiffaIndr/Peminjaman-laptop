@extends('layout')
@section('content')
<section class="home" id="home" style=" background-image: url('{{asset('assets/img/desk2.jpg')}}');">
    <div class="home-text" >
    
      @if (session('notAllowed'))
<div class="alert alert-danger">
  {{ session('notAllowed') }}
</div>
@endif
      <span style="color: white;"><span>Selamat</span> Datang!!!</p>
        <h1>Pinjaman<br> <span>Laptop</span></span></h1>
      <a href="https://smkwikrama.sch.id/"> <h4>SMK <span> Wikrama </span> Bogor</h4></a>

            <li style='border-left: none;'><p style="color: white;"> <span> Syai</span>khani  Giffa Indrawan</p><br></li>

        <br>
        <a href="{{route('take.create')}}" class="btn">Daftar</a>
    </div>

</section>
@if (session('successAdd'))
<div class="alert alert-success">
    {{ session('successAdd') }}
</div>
@endif
<section class="about" id="about">
    <div class="about-img">
        <img src="{{asset('assets/img/macbook.png')}}" alt="">
    </div>
    <div class="about-text">
        <span><h1>Apa Itu Peminjaman Laptop?</h1></span>
        <p> Peminjaman Laptop adalah website pinjam meminjam
             <span>laptop</span> khusus untuk siswa <span>SMK Wikrama Bogor</span>, 
             dengan website ini siswa dapat dipermudah untuk <span>mendaftar</span> pinjaman laptop untuk digunakan</p>
    </div>
   
</section>
</section>
<section class="contact-info" id="contact">
  <div class="card">
    <i class="icon fa fa-envelope"></i>
    <div class="card-content">
      <h3>prohumasi@smkwikrama.sch.id</h3>
    
    </div>
  </div>
  
  <div class="card">
    <i class="icon fa fa-address-card"></i>
    <div class="card-content">
      <h3 style="font-size: 12px; text-align:center;">Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari</h3>
    
    </div>
  </div>

  <div class="card">
    <i class="icon fa fa-user"></i>
    <div class="card-content">
      <h3>(0251) 8242411</h3>
    
    </div>
  </div>
</section>
<section class="laptop" id="other">
    <div class="laptop-content">
      <div class="row">
        <img src="{{asset('assets/img/blackLaptop.png')}}" alt=''>
        <p>Laptop</p>
        <h3 style="font-size:15px;">Sebuah laptop adalah komputer pribadi <br>yang dapat dipindahkan dan dibawa<br> dengan mudah sehingga dapat digunakan<br> di banyak tempat.</h3>
        <a href="https://edu.gcfglobal.org/en/tr_id-computer-basics/laptop/1/">Read more</a>
      </div>
  
      <div class="row">
        <img src="{{asset('assets/img/k3.png')}}">
        <p>Keselamatan</p>
        <h3 style="font-size:15px;">K3 atau Keselamatan dan Kesehatan Kerja adalah suatu upaya kerja sama, saling pengertian dan partisipasi dari pengusaha dan karyawan dalam perusahaan untuk melaksanakan tugas dan kewajiban bersama</h3>
        <a href="https://upk.kemkes.go.id/new/keselamatan-kerja-k3-evakuasi#:~:text=K3%20atau%20Keselamatan%20dan%20Kesehatan,kerja%20dalam%20rangka%20meningkatkan%20produktivitas.">Read more</a>
      </div>
  
      <div class="row">
        <img src="{{asset('assets/img/k2.jpg')}}">
        <p>Cara Merawat</p>
        <h3 style="font-size:15px;">mungkin menggunakan laptop Anda dengan cara yang salah dan Anda tidak menyadarinya bisa cepat rusak. Mungkin selama ini Anda menggunakan laptop di luar kemampuannya.</h3>
        <a href="https://yoursay.suara.com/lifestyle/2022/06/22/091652/7-tips-merawat-laptop-agar-tidak-cepat-rusak">Read more</a>
      </div>
      
    </div>
    <br>
  </section>
  <section class="list" id="rules">
    <h1>Peraturan</h1>
    <ul >
      <li >
        <p>Peminjam dipastikan sebagai peserta didik SMK Wikrama Bogor</p>
      </li>
      <li >
        <p>Peserta didik diwajibkan memakai kartu pelajar untuk identitas peminjaman</p>
      </li>
      <li >
        <p>Peserta didik tidak boleh menginstall atau mendownload aplikasi tanpa seijin guru</p>
      </li>
      <li >
        <p>Peserta didik hanya boleh menggunakan laptop di lingkungan sekolah, atau pada pembelajaran tertentu</p>
      </li>
      <li >
        <p>Peserta wajib mengembalikan tepat waktu laptop yang telah digunakan</p>
      </li>
    </ul>

      
          
@endsection