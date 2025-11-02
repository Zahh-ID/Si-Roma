@extends('user.dashboard.layout')

@section('title', 'Lacak Pesanan')
@section('page_class', 'page-track')

@section('sidebar_brand')
  <a href="{{ route('dashboard.index') }}" class="logo" aria-label="SiRoma">
    <img src="{{ asset('images/4000de9ddb960f3e30526701dd189ab18dba7171.png') }}" alt="SiRoma Logo" style="width: 104px; height: 85px; margin: 0;">
  </a>
@endsection

@section('content')
  <header class="content-header">
    <div class="page-title">
      <div class="icon-wrapper">
        <img src="{{ asset('images/5b2ccae3293669b9f648fc4e36e085ba84c37576.png') }}" alt="Ikon Lacak Pesanan">
      </div>
      <h1>Lacak Pesanan</h1>
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

  <h2 class="category-title">Kategori Produk</h2>
  <div class="category-chips">
    @php
      $trackingChips = [
        ['label' => 'Buku', 'active' => true],
        ['label' => 'Tipe X'],
        ['label' => 'Pena'],
        ['label' => 'Map'],
        ['label' => 'Pensil'],
        ['label' => 'Stabilo'],
      ];
    @endphp
    @foreach ($trackingChips as $chip)
      <div @class(['chip', 'active' => !empty($chip['active'])])>
        <div class="chip-icon-bg">
          <img src="{{ asset('images/920b82a462b3dc5009d05fcdf79b5e028a11e6e3.png') }}" alt="">
        </div>
        <span>{{ $chip['label'] }}</span>
      </div>
    @endforeach
  </div>

  <div class="content-section-full">
    <div class="product-grid">
      @php
        $items = [
          'Buku', 'Pena', 'Pensil', 'Tipe x', 'Kotak pensil', 'Map',
          'Buku', 'Pena', 'Pensil', 'Tipe x', 'Kotak pensil', 'Map',
        ];
      @endphp
      @foreach ($items as $item)
        <article class="product-card">
          <div class="img-placeholder" aria-hidden="true"></div>
          <h3>{{ $item }}</h3>
          <div class="price-cart">
            <span class="price">Rp 11.000</span>
            <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="Tambah ke keranjang" class="cart-icon">
          </div>
        </article>
      @endforeach
    </div>
  </div>
@endsection
