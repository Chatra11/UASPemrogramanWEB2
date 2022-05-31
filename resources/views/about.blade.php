@extends('layout.main')
@section('content')
<div class="about-section">
  <h1>About Us</h1>
  <p>Sistem Informasi Apotek ini dibangun untuk keperluan UAS Pemrograman Web 2</p>
  <p>SI Apotek ini Dibangun menggunakan framework Laravel 9 </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{asset('foto/lukman.jpeg')}}" alt="Lukman" style="width:100%">
      <div class="container">
        <h2>Lukmanul Hakim</h2>
        <p>2010817310002</p>
        <p><a href="https://github.com/lukman7645">
        <i class="fa fa-github"> 
            Lukman Github
        </i>
    </a></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="{{ asset('foto/chatra.jpeg') }}" alt="Chatra" style="width:100%">
      <div class="container">
        <h2>Al Chatra Syarifudin</h2>
        <p>2010817310007</p>
        <p></p><a href="https://github.com/Chatra11">
        <i class="fa fa-github"> 
            Chatra Github
        </i>
    </a></p>
      </div>
    </div>
  </div>
</div>
@endsection