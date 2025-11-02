@extends('user.dashboard.layout')

@section('title', 'Dashboard')
@section('page_class', 'page-dashboard')

@section('content')
  <header class="content-header">
    <div class="page-title">
      <div class="icon-wrapper">
        <img src="{{ asset('images/5b2ccae3293669b9f648fc4e36e085ba84c37576.png') }}" alt="Ikon Dashboard">
      </div>
      <h1>Dashboard</h1>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Search........" aria-label="Cari">
      <button type="button">
        <img src="{{ asset('images/197d3a40a852677669f6dfd59fdfc04062ccd272.png') }}" alt="Ikon pencarian">
      </button>
    </div>
    <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="Keranjang" style="width: 43px; height: 43px;">
  </header>

  <div class="promo-banner">
    <div class="promo-bg-images">
      <img src="{{ asset('images/271_880.svg') }}" alt="" class="bg-img-1">
      <img src="{{ asset('images/271_875.svg') }}" alt="" class="bg-img-2">
      <img src="{{ asset('images/271_944.svg') }}" alt="" class="bg-img-3">
      <img src="{{ asset('images/271_959.svg') }}" alt="" class="bg-img-4">
      <img src="{{ asset('images/271_881.svg') }}" alt="" class="bg-img-5">
      <img src="{{ asset('images/271_879.svg') }}" alt="" class="bg-img-6">
    </div>
    <div class="promo-content">
      <h2>Cetak <span>Instan</span>, Bebas <span>Antrean</span>.</h2>
      <p>Butuh cetak <strong>cepat</strong>? Kami siap bantu dari satu lembar hingga ribuan. <strong>Tinggal upload</strong> file dan biarkan <strong>kami urus sisanya</strong>. <strong>hasil rapi</strong> adalah janji kami.</p>
      <a href="#" class="promo-button">Pesan Sekarang</a>
    </div>
  </div>

  <div class="content-section">
    <h2 class="section-title">Katalog Jasa</h2>
    <div class="product-grid">
      @for ($i = 0; $i < 5; $i++)
        <article class="product-card">
          <div class="img-placeholder" aria-hidden="true"></div>
          <h3>Banner</h3>
          <div class="price-cart">
            <span class="price">Rp 11.000</span>
            <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="Tambah ke keranjang" class="cart-icon">
          </div>
        </article>
      @endfor
    </div>
  </div>

  <div class="content-section">
    <div class="section-header">
      <h2 class="section-title">Katalog Produk</h2>
      <a href="#" class="view-all-link">
        <span>Lihat Semua</span>
        <div class="arrow-wrapper">
          <img src="{{ asset('images/3606006245db06fed7ecc98b32a59a6ab9e9c7b9.png') }}" alt="Panah">
        </div>
      </a>
    </div>
    <div class="product-grid">
      @for ($i = 0; $i < 5; $i++)
        <article class="product-card">
          <div class="img-placeholder" aria-hidden="true"></div>
          <h3>Banner</h3>
          <div class="price-cart">
            <span class="price">Rp 11.000</span>
            <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="Tambah ke keranjang" class="cart-icon">
          </div>
        </article>
      @endfor
    </div>
  </div>
@endsection
