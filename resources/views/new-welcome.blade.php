<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fotocopy Roma</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Doppio+One&family=Germania+One&family=Outfit:wght@200;300;400;500;600;700&family=Palanquin+Dark&family=Rochester&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="site-header">
  <div class="container header-container">
    <a href="/" class="logo" aria-label="Fotocopy Roma">
      <img src="{{ asset('images/fa9b856e369ccc4d843f1c474c5c7408854d1d74.png') }}" alt="" class="logo__bg">
      <span class="logo__text-si">SI</span>
      <span class="logo__text-roma">Roma</span>
    </a>
    <a href="{{ route('dashboard.index') }}" class="header-cta">
      <span>Masuk App</span>
      <img src="{{ asset('images/359_149.svg') }}" alt="" loading="lazy">
    </a>
  </div>
</header>

<section id="hero" class="hero-section">
  <div class="container hero-container">
    <div class="hero-text">
      <div class="tag">High Quality</div>
      <h1 class="hero-headline-1">Si Roma Ahlinya</h1>
      <h2 class="hero-headline-2">
        <span>Cetak</span> <span>Instan</span>, <span>Bebas</span> <span>Antrean</span>
      </h2>
      <p class="hero-description">
        Kami melayani kebutuhan dari satuan hingga partai besar. Dapatkan semua kebutuhan cetak, fotocopy, banner, hingga alat tulis Anda di satu tempat. Layanan ramah adalah jaminan kami.
      </p>
      <div class="hero-actions">
        <a href="{{ route('dashboard.catalog') }}" class="btn btn-primary">Lihat Katalog</a>
        <a href="{{ route('dashboard.track') }}" class="btn btn-secondary">Lacak Pesanan</a>
      </div>
    </div>
    <div class="hero-visuals">
      <img src="{{ asset('images/156_768.svg') }}" alt="" class="hero-bg-circle" loading="lazy">
      <img src="{{ asset('images/8237e3a187ae41df1247b7d4245f435bcaff5f01.png') }}" alt="Mesin fotokopi modern" class="hero-printer-img" loading="lazy">
    </div>
  </div>

  <div class="container social-proof-container">
    <div class="social-proof">
      <div class="social-proof-title">
        <h3>Media Sosial Kami</h3>
        <hr class="social-proof-line">
      </div>
      <div class="social-proof-links">
        <a href="{{ route('dashboard.index') }}" class="social-link-instagram">Dashboard</a>
        <a href="{{ route('dashboard.catalog') }}" class="social-link-facebook"><span>F</span>itur Katalog</a>
        <a href="{{ route('dashboard.track') }}" class="social-link-whatsapp">Lacak Pesanan</a>
      </div>
    </div>
  </div>
</section>

<section id="features" class="features-section">
  <div class="container features-container">
    <div class="features-visual">
      <img src="{{ asset('images/156_732.svg') }}" alt="" class="features-bg-circle" loading="lazy">
      <img src="{{ asset('images/edb05840c80adfdc27d724a2c4ab1f7dc7ce2470.png') }}" alt="Maskot SiBot" class="features-robot-img" loading="lazy">
    </div>
    <div class="features-content">
      <div class="tag tag--features">LAYANAN TAMBAHAN</div>
      <h2 class="features-headline-1">Butuh Bantuan?</h2>
      <h3 class="features-headline-2">Chat <span>dengan</span> SiBot!</h3>
      <p class="features-description">
        Akses cepat ke semua informasi yang Anda butuhkan tanpa perlu menunggu balasan. Si Bot Aja hadir 24 jam untuk membantu Anda.
      </p>
      <div class="features-grid">
        <a href="{{ route('dashboard.si-bot') }}" class="feature-card">
          <img src="{{ asset('images/19395c27d7f002e52ec4e1f2e470120581b83af5.png') }}" alt="Ikon FAQ" class="feature-card__icon">
          <div class="feature-card__text">
            <span>Tanya</span>
            <span>Jawab (FAQ)</span>
          </div>
        </a>
        <a href="{{ route('dashboard.catalog') }}" class="feature-card">
          <img src="{{ asset('images/19395c27d7f002e52ec4e1f2e470120581b83af5.png') }}" alt="Ikon estimasi harga" class="feature-card__icon">
          <div class="feature-card__text">
            <span>Estimasi</span>
            <span>Harga</span>
          </div>
        </a>
        <a href="{{ route('dashboard.track') }}" class="feature-card">
          <img src="{{ asset('images/19395c27d7f002e52ec4e1f2e470120581b83af5.png') }}" alt="Ikon invoice" class="feature-card__icon">
          <div class="feature-card__text">
            <span>Lihat</span>
            <span>Invoice</span>
          </div>
        </a>
        <a href="{{ route('dashboard.si-bot') }}" class="feature-card">
          <img src="{{ asset('images/19395c27d7f002e52ec4e1f2e470120581b83af5.png') }}" alt="Ikon kontak admin" class="feature-card__icon">
          <div class="feature-card__text">
            <span>Hubungi</span>
            <span>Admin</span>
          </div>
        </a>
      </div>
      <a href="{{ route('dashboard.si-bot') }}" class="btn btn-primary features-cta">
        <img src="{{ asset('images/489f75a73e8ec435b461f4a81f7f6e2553ab8436.png') }}" alt="" loading="lazy">
        <span>Mulai Chat</span>
      </a>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials-section">
  <div class="container testimonials-container">
    <div class="tag tag--testimonials">Testimoni Klien</div>
    <h2 class="testimonials-headline">
      <span class="color-dark">Apa </span>
      <span class="color-primary">Kata Mereka</span>
      <span class="color-dark"> Tentang </span>
      <span class="color-primary">SiRoma?</span>
    </h2>
    <p class="testimonials-description">
      Testimoni jujur dari pelanggan yang puas tentang kualitas dan efisiensi layanan Si Roma.
    </p>
    <div class="testimonial-carousel">
      <article class="testimonial-card">
        <span class="testimonial-quote-mark">“</span>
        <p class="testimonial-text">
          Layanan cetak online mereka sangat membantu di saat genting. Hasilnya cepat, pelayanannya ramah, dan tidak perlu antre. Sangat direkomendasikan!
        </p>
        <div class="testimonial-author">
          <p class="author-name">Putri Yuni</p>
          <p class="author-title">Software Dev</p>
        </div>
      </article>
    </div>
    <div class="testimonial-pagination">
      <span class="dot"></span>
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>
  <img src="{{ asset('images/156_715.svg') }}" alt="" class="testimonials-bg-circle" loading="lazy">
</section>

<footer class="site-footer-main">
  <div class="footer-bg" aria-hidden="true">
    <img src="{{ asset('images/156_693.svg') }}" alt="" class="footer-bg-gradient" loading="lazy">
    <img src="{{ asset('images/156_694.svg') }}" alt="" class="footer-bg-bar" loading="lazy">
  </div>
  <div class="container footer-container">
    <div class="footer-top">
      <div class="footer-column footer-column-1">
        <div class="footer-brand">
          <h3 class="footer-brand-title">Fotocopy <span class="color-primary">Roma</span></h3>
          <p class="footer-brand-tagline">Layanan terpercaya...</p>
        </div>
        <div class="footer-address">
          <h4 class="footer-heading-small">Alamat:</h4>
          <p class="footer-text-small">
            Jl. Letjend Sutoyo No.4 No.21, Burengan, Kec. Pesantren, Kabupaten Kediri, Jawa Timur 64131
          </p>
        </div>
        <div class="footer-contact">
          <h4 class="footer-heading-small">Hubungi Kami</h4>
          <p class="footer-text-small">
            +62 823-3569-2363<br>FotocopyRoma@gmail.com
          </p>
        </div>
      </div>
      <div class="footer-column footer-column-2">
        <h4 class="footer-heading">Layanan Kami</h4>
        <ul class="footer-list">
          <li>Cetak Dokumen (Warna &amp; B/W)</li>
          <li>Fotocopy</li>
          <li>Digital Printing (Banner, Poster)</li>
          <li>Penjualan Alat Tulis Kantor (ATK)</li>
          <li>dll</li>
        </ul>
      </div>
      <div class="footer-column footer-column-3">
        <h4 class="footer-heading">Jam Operasional</h4>
        <ul class="footer-list">
          <li>Senin - Sabtu: 06.00 - 17.00 WIB</li>
          <li>Jum’at: 06.00 - 11.00 WIB</li>
          <li>Minggu: 08.00 - 19.00 WIB</li>
        </ul>
      </div>
      <div class="footer-column footer-column-4">
        <h4 class="footer-heading">Pusat Bantuan:</h4>
        <ul class="footer-list">
          <li>Tanya Jawab (FAQ)</li>
          <li>Cek Status Pesanan</li>
          <li>Lacak Pesanan</li>
          <li>Unduh Invoice</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <img src="{{ asset('images/5f2f39f9e9126ed552d0268154695547e2c6ba50.png') }}" alt="Ikon media sosial" class="footer-social-icons" loading="lazy">
    </div>
  </div>
  <div class="copyright-bar">
    <p>ⓒ 2025, FotocopyRoma.inc</p>
  </div>
</footer>
</body>
</html>
