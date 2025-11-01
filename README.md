# SiRoma Frontend (Blade + Tailwind, Vite)

Frontend-only scaffold yang siap dimasukkan ke proyek Laravel (Blade). Disusun agar mudah melakukan slicing dari Figma.

## Cara pakai (di proyek Laravel 10/11):

1. **Copy** folder `resources` dan file konfigurasi berikut ke root Laravel Anda:
   - `resources/` (views, css, js)
   - `tailwind.config.js`, `postcss.config.js`, `vite.config.js`
   - Tambahkan devDependencies pada `package.json` Anda (atau pakai `package.json` di repo ini)
2. Jalankan:
   ```bash
   npm install
   npm run dev
   ```
3. Di layout Blade utama Anda, panggil Vite:
   ```blade
   @vite(['resources/css/app.css','resources/js/app.js'])
   ```
4. Buat rute sederhana di `routes/web.php` untuk menampilkan halaman:
   ```php
   Route::view('/', 'pages.home');
   Route::view('/katalog', 'pages.katalog');
   Route::view('/detail/{id?}', 'pages.detail');
   Route::view('/tentang', 'pages.tentang');
   Route::view('/kontak', 'pages.kontak');
   Route::view('/login', 'pages.auth.login');
   Route::view('/register', 'pages.auth.register');
   Route::view('/dashboard', 'pages.dashboard.index');
   ```

> **Catatan:** Desain di sini masih placeholder (tanpa akses Figma). Kirimkan detail section/naming dari Figma untuk penyesuaian pixel-perfect (spacing, grid, typografi, dan komponen spesifik).

## Kustomisasi Cepat
- Ubah brand warna di `tailwind.config.js` pada `theme.extend.colors.primary`.
- Token UI: `.btn`, `.card`, `.section`, `.headline`, dll didefinisikan di `resources/css/app.css`.
- Tambah komponen Blade di `resources/views/components/`.

## Struktur
```
resources/
  views/
    layouts/app.blade.php
    components/{navbar, footer, section, card}.blade.php
    pages/{home, katalog, detail, tentang, kontak}.blade.php
    pages/auth/{login, register}.blade.php
    pages/dashboard/index.blade.php
  css/app.css
  js/app.js
```

## Lisensi
MIT