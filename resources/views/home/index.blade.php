@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="style/home.css">

<h1 class="text-center mt-5">Temukan <mark class="satu">Bouquet</mark> dan <mark class="satu">Case</mark></h1>
<h1 class="text-center mb-4"><mark class="satu">Favorit</mark> Anda <mark class="satu">Disini!</mark></h1>


<div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/karosel1.jpg" class="d-block w-100" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="img/karosel2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/karosel3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/karosel4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <hr class="dua">

  <h1 class="tiga">Produk Terbaru</h1>

  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
      <div class="card h-100">
        <img src="img/card3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Bouquet Uang 50K</h5>
          <p class="card-text">Rp.100.000</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/card5.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Baloon Flower</h5>
          <p class="card-text">Rp.50.000</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/card4.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Bouquet Snack</h5>
          <p class="card-text">Rp.50.000</p>
        </div>
      </div>
    </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card bg-dark text-white mb-5">
        <img src="img/card1.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h3 class="empat">Bouquet</h3>
        </div>
    </div>
      </div>
      <div class="col">
        <div class="card bg-dark text-white mb-5">
        <img src="img/card2.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h3 class="empat">Case</h3>
      </div>
    </div>
    </div>
    </div>
  </div>








@endsection
