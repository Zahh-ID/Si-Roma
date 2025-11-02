@extends('user.dashboard.layout')

@section('title', 'Si Bot')
@section('page_class', 'page-si-bot')

@section('content')
  <header class="content-header">
    <div class="page-title">
      <div class="icon-wrapper">
        <img src="{{ asset('images/5b2ccae3293669b9f648fc4e36e085ba84c37576.png') }}" alt="Ikon Katalog">
      </div>
      <h1>Katalog</h1>
    </div>
    <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="Keranjang" style="width: 43px; height: 43px;">
  </header>

  <div class="detail-container">
    <a href="{{ route('dashboard.catalog') }}" class="back-button">
      <img src="{{ asset('images/f43b11d32eb878c435077012cfce4de067a8725d.png') }}" alt="Kembali">
      <span>Kembali</span>
    </a>

    <div class="product-details-grid">
      <div class="product-image-large" aria-hidden="true"></div>
      <div class="product-info">
        <span class="product-category-tag">Cetak Dokumen</span>
        <h2>Print &amp; Fotocopy</h2>
        <p class="product-description">Cetak tugas, skripsi, dan dokumen lainnya</p>

        <div class="options-group">
          <label>Pilih Ukuran/Paket</label>
          <div class="option-item active"><span>A4 (per lembar)</span><span>Rp 600</span></div>
          <div class="option-item"><span>A3 (per lembar)</span><span>Rp 1.500</span></div>
          <div class="option-item"><span>F4 (per lembar)</span><span>Rp 600</span></div>
        </div>
      </div>
    </div>

    <div class="options-group">
      <label>Pilih Bahan</label>
      <div class="option-item active"><span>Hitam putih</span><span>Gratis</span></div>
      <div class="option-item"><span>Berwarna</span><span>+ Rp 1.000</span></div>
    </div>

    <div class="custom-design-section">
      <div class="custom-design-checkbox">
        <input type="checkbox" id="custom-design-check">
        <label for="custom-design-check">Saya ingin menggunakan desain custom</label>
        <p>Kirim desain anda melalui WhatsApp setelah checkout</p>
      </div>
      <div class="quantity-selector">
        <label>Jumlah</label>
        <div class="quantity-controls">
          <button type="button" aria-label="Kurangi">-</button>
          <span>1</span>
          <button type="button" aria-label="Tambah">+</button>
        </div>
      </div>
    </div>

    <div class="price-summary">
      <div class="price-row">
        <span>Harga Dasar:</span>
        <span>Rp 600</span>
      </div>
      <div class="price-row">
        <span>Jumlah:</span>
        <span>1X</span>
      </div>
      <hr>
      <div class="price-row total">
        <span>Total Harga</span>
        <span>Rp 600</span>
      </div>
    </div>

    <div class="action-buttons">
      <button class="add-to-cart-btn" type="button">
        <img src="{{ asset('images/c870110cc1084e86b6436a143a35657a45d3c768.png') }}" alt="">
        Tambahkan ke keranjang
      </button>
      <button class="order-now-btn" type="button">Buat Pesanan</button>
    </div>
  </div>
@endsection
