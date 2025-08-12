<!-- Logo -->
<p align="center">
    <img src="public/img/logo.png" alt="Baherindo Motor Logo" width="160"/>
</p>

<h1 align="center">🚗 Baherindo Motor</h1>
<p align="center">Dealer Motor & Mobil Bekas Berkualitas — Laravel + Tailwind CSS</p>

---

## 🔧 Tech Stack

- ⚙️ **Laravel 10+**
- 🎨 **Tailwind CSS**
- 🔄 Blade Templating Engine
- 📱 Mobile-first Responsive Design
- 📦 Asset bundling via **Vite**

---

## 📷 Fitur Utama

- **Home Page** dengan hero video & highlight produk
- **Katalog Produk** (Motor & Mobil) lengkap dengan gambar, harga, tahun, dan kilometer
- **Detail Produk** untuk setiap kendaraan
- **Form Pemesanan** langsung tanpa login
- **Tentang Kami** & **Kontak**

---

## 🚀 Cara Menjalankan

```bash
# 1️⃣ Clone repo
git clone https://github.com/username/baherindo-motor.git
cd baherindo-motor

# 2️⃣ Install dependencies
composer install
npm install

# 3️⃣ Konfigurasi environment
cp .env.example .env
php artisan key:generate

# 4️⃣ Migrasi database
php artisan migrate

# 5️⃣ Jalankan server
php artisan serve
npm run dev
