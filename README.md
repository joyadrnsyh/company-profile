<img width="1417" height="665" alt="image" src="https://github.com/user-attachments/assets/a193285e-cf20-4222-a37f-9f052713cf87" />
# 📘 Penjelasan Project: Company Profile

## 📋 Ringkasan Umum

- **Repository:** `joyadrnsyh/company-profile`
- **Status:** Public Repository
- **Lisensi:** MIT
- **Dibuat:** 15 Desember 2025

### Bahasa Pemrograman
- Blade — 58.8%
- PHP — 40.8%
- Other — 0.4%

---

## 🎯 Deskripsi Project

Project ini merupakan aplikasi **Company Profile** berbasis **Laravel Framework** yang dirancang untuk menampilkan profil perusahaan secara modern, interaktif, dan responsif.  

Website ini menggunakan kombinasi teknologi backend dan frontend modern untuk menghasilkan performa yang cepat serta tampilan UI yang profesional.

---

# 🛠️ Technology Stack

## Backend
- Laravel 12.0
- PHP 8.2+
- Livewire 3.7
- Laravel Tinker

## Frontend
- Blade Template Engine
- Tailwind CSS 4.1
- DaisyUI 5.5
- Vite
- Axios
- PostCSS
- Autoprefixer

## Development Tools
- Laravel Sail
- Laravel Pint
- PestPHP 4.1
- Faker
- Mockery
- Laravel Pail

---

# 📁 Struktur Project

```bash
company-profile/
├── app/                 # Business logic & application code
├── bootstrap/           # Bootstrap framework files
├── config/              # Configuration files
├── database/            # Database migrations & seeders
├── public/              # Public assets & entry point
├── resources/           # Views, CSS, JS
│   ├── css/             # Stylesheet files
│   └── js/              # JavaScript files
├── routes/              # API & web routes
├── storage/             # Logs, cache, uploads
├── tests/               # Unit & feature tests
├── composer.json        # PHP dependencies
├── package.json         # Node dependencies
├── vite.config.js       # Vite configuration
├── phpunit.xml          # PHP testing configuration
└── artisan              # Laravel CLI tool
```

---

# 🚀 Fitur Utama

## Core Features
- Reactive component menggunakan Livewire
- Responsive UI dengan Tailwind CSS & DaisyUI
- Optimized asset bundling menggunakan Vite
- Automated testing dengan PestPHP

## Development Features
- Hot Module Replacement (HMR)
- Blade Templating Engine
- Database Migration System
- Artisan CLI Commands

---

# 📋 Available Scripts

## Setup Project

```bash
composer setup
```

Script ini menjalankan:
- Install PHP dependencies
- Generate `.env`
- Generate application key
- Run database migration
- Install npm dependencies
- Build frontend assets

---

## Development Mode

```bash
composer dev
```

Menjalankan:
- Laravel development server
- Queue listener
- Vite development server

---

## Testing

```bash
composer test
```

Menjalankan testing menggunakan PestPHP.

---

## Production Build

```bash
npm run build
```

Mengoptimalkan asset untuk production.

---

# 📦 Main Dependencies

| Package | Version | Function |
|----------|----------|-----------|
| laravel/framework | ^12.0 | Web framework |
| livewire/livewire | ^3.7 | Reactive components |
| luvi-ui/laravel-luvi | ^0.6.0 | UI components |
| tailwindcss | ^4.1.18 | CSS framework |
| daisyui | ^5.5.14 | UI component library |
| vite | ^7.0.7 | Frontend build tool |

---

# ⚙️ Konfigurasi

## Environment Configuration

Project menyediakan file `.env.example` untuk konfigurasi:
- Database
- Mail
- Cache
- Queue
- Application Key

---

## Vite Configuration

Vite digunakan untuk:
- CSS & JavaScript bundling
- Hot reload development
- Blade file auto refresh
- Optimized production build

---

# ✅ System Requirements

- PHP ^8.2
- Node.js
- Composer
- Docker (optional)

---

# 📝 Kesimpulan

Project ini merupakan template **Laravel Company Profile** modern yang telah dikustomisasi menggunakan:

- Livewire untuk interaktivitas
- Tailwind CSS + DaisyUI untuk UI modern
- Vite untuk build process
- PestPHP untuk testing

Cocok digunakan sebagai fondasi pengembangan website company profile yang scalable, maintainable, dan responsive.
