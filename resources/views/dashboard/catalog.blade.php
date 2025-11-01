@extends('dashboard.layout')

@section('title', 'Katalog')
@section('page_class', 'page-catalog')

@section('content')
  <header class="content-header">
    <div class="page-title">
      <div class="icon-wrapper">
        <img src="{{ asset('images/5b2ccae3293669b9f648fc4e36e085ba84c37576.png') }}" alt="Ikon Katalog">
      </div>
      <h1>Katalog</h1>
    </div>
    <div class="header-actions">
      <div class="search-bar-alt">
        <input type="text" placeholder="Search........" aria-label="Cari">
        <button type="button">
          <img src="{{ asset('images/197d3a40a852677669f6dfd59fdfc04062ccd272.png') }}" alt="Ikon pencarian">
        </button>
      </div>
      <button class="filter-button" type="button">
        <span>Filter Pencaharian</span>
        <img src="{{ asset('images/3606006245db06fed7ecc98b32a59a6ab9e9c7b9.png') }}" alt="Ikon filter">
      </button>
    </div>
    <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="Keranjang" style="width: 43px; height: 43px;">
  </header>

  <h2 class="category-title">Kategori</h2>
  <div class="category-chips">
    @php
      $catalogChips = [
        ['file' => '287_1307.svg', 'label' => 'Banner', 'active' => true],
        ['file' => '287_1314.svg', 'label' => 'Alat Tulis'],
        ['file' => '287_1318.svg', 'label' => 'Laminating'],
        ['file' => '287_1322.svg', 'label' => 'Dokumen'],
        ['file' => '287_1326.svg', 'label' => 'Printing'],
        ['file' => '287_1330.svg', 'label' => 'Undangan'],
        ['file' => '287_1334.svg', 'label' => 'Card Case'],
        ['file' => '287_1342.svg', 'label' => 'Id Card'],
      ];
    @endphp
    @foreach ($catalogChips as $chip)
      <div @class(['chip', 'active' => !empty($chip['active'])])>
        <div class="chip-icon-bg">
          <img src="{{ asset('images/' . $chip['file']) }}" alt="">
        </div>
        <span>{{ $chip['label'] }}</span>
      </div>
    @endforeach
  </div>

  <div class="content-section">
    <h2 class="section-title">Katalog Jasa</h2>
    <div class="product-grid">
      @for ($i = 0; $i < 4; $i++)
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
      <a href="#" class="view-all-link-alt">Lihat Semua</a>
    </div>
    <div class="product-grid">
      @php
        $productNames = ['Buku', 'Pena', 'Pensil', 'Tipe x'];
      @endphp
      @foreach ($productNames as $name)
        <article class="product-card">
          <div class="img-placeholder" aria-hidden="true"></div>
          <h3>{{ $name }}</h3>
          <div class="price-cart">
            <span class="price">Rp 11.000</span>
            <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="Tambah ke keranjang" class="cart-icon">
          </div>
        </article>
      @endforeach
    </div>
  </div>
@endsection
