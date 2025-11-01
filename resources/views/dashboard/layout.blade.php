<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;700&display=swap" rel="stylesheet">
  @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])
</head>
<body class="@yield('page_class')">
@php
  $navItems = [
    ['label' => 'Dashboard', 'route' => route('dashboard.index'), 'icon' => '5b2ccae3293669b9f648fc4e36e085ba84c37576.png', 'match' => 'dashboard.index'],
    ['label' => 'Katalog', 'route' => route('dashboard.catalog'), 'icon' => 'c870110cc1084e86b6436a143a35657a45d3c768.png', 'match' => 'dashboard.catalog'],
    ['label' => 'Si Bot', 'route' => route('dashboard.si-bot'), 'icon' => '4269c5c37e4a0907ae2988e555a5553d452bedd1.png', 'match' => 'dashboard.si-bot'],
    ['label' => 'Lacak Pesanan', 'route' => route('dashboard.track'), 'icon' => '1601af3aa57387bf3d95e5f234cb7a8f878e620d.png', 'match' => 'dashboard.track'],
    ['label' => 'Keranjang', 'route' => '#', 'icon' => 'c870110cc1084e86b6436a143a35657a45d3c768.png', 'match' => null],
    ['label' => 'Keluar', 'route' => '#', 'icon' => '81e3a451be46f0e4cec2863c3ea8da5f95ff5a25.png', 'match' => null],
  ];
@endphp

  <div class="page-container">
    <aside class="sidebar">
      @hasSection('sidebar_brand')
        @yield('sidebar_brand')
      @else
        <a href="{{ route('dashboard.index') }}" class="logo" aria-label="SiRoma">
          <img src="{{ asset('images/fa9b856e369ccc4d843f1c474c5c7408854d1d74.png') }}" alt="SiRoma Logo">
          <div class="logo-text">
            <span class="si">SI</span>
            <span class="roma">Roma</span>
          </div>
        </a>
      @endif

      <nav class="navigation" aria-label="Menu Sidebar">
        <ul>
          @foreach ($navItems as $item)
            @php
              $isActive = $item['match'] ? request()->routeIs($item['match']) : false;
              $href = $item['route'] ?? '#';
              $iconBase = asset('images/' . $item['icon']);
              $iconHover = asset('images/' . str_replace('.png', '-hover.png', $item['icon']));
              $iconActive = asset('images/' . str_replace('.png', '-white.png', $item['icon']));
              $iconSrc = $isActive ? $iconActive : $iconBase;
            @endphp
            <li>
              <a href="{{ $href }}" @class(['active' => $isActive])>
                <img
                  src="{{ $iconSrc }}"
                  alt=""
                  @if (!$isActive)
                    onmouseover="if(!this.dataset.src){this.dataset.src=this.src;} this.src='{{ $iconHover }}';"
                    onmouseout="this.src=this.dataset.src;"
                  @endif
                >
                {{ $item['label'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </nav>
    </aside>

    <main class="main-content">
      @yield('content')
    </main>
  </div>

  <div class="fab-chat">
    <img src="{{ asset('images/4269c5c37e4a0907ae2988e555a5553d452bedd1.png') }}" alt="Tombol chat">
  </div>
</body>
</html>
