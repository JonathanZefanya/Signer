# 📝 Signer - Digital Signature Application

![Version](https://img.shields.io/badge/version-3.0.1-blue.svg)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)

Signer adalah aplikasi web untuk membuat tanda tangan digital dan menandatangani dokumen PDF secara online. Aplikasi ini memungkinkan pengguna untuk mengelola dokumen, menambahkan tanda tangan, gambar, teks, dan elemen lainnya ke dokumen PDF dengan mudah.

---

## 🚀 Tech Stack

### **Backend**
- **PHP 8.0+** - Server-side scripting
- **Custom MVC Framework** (Simcify) - Lightweight PHP framework
- **MySQL/MariaDB** - Database management
- **TCPDF** - PDF generation and manipulation
- **PHPMailer** - Email notifications
- **Composer** - Dependency management

### **Frontend**
- **HTML5 & CSS3** - Markup and styling
- **Bootstrap 4** - Responsive UI framework
- **jQuery 3.x** - JavaScript library
- **Ion Icons** - Icon library
- **jCanvas** - Drawing and canvas manipulation
- **Parsley.js** - Form validation
- **SweetAlert** - Beautiful alert dialogs

### **Libraries & Dependencies**
- **pecee/simple-router** - Routing system
- **vlucas/phpdotenv** - Environment configuration
- **PHP-DI** - Dependency injection
- **CloudConvert API** - Document conversion
- **Google Drive API** - Cloud storage integration
- **Dropbox API** - Cloud storage integration

### **Database**
- MySQL/MariaDB dengan struktur relational database untuk:
  - User management
  - Company & team management
  - Document management
  - Signing requests & history
  - Notifications & chat

---

## ✨ Fitur Utama

### 👤 **User Management**
- **Multi-level Authentication** - Login system dengan role-based access (Superadmin, Admin, User)
- **User Profiles** - Kelola profil pengguna dengan avatar upload
- **Password Management** - Reset password via email
- **Session Management** - Secure session handling

### 🏢 **Company & Team Management**
- **Multi-tenancy Support** - Mendukung multiple companies dalam satu aplikasi
- **Team Collaboration** - Tambah anggota tim dengan permission management
- **Role-based Permissions** - Upload, Edit/Sign, Delete permissions
- **Department Management** - Organisasi team berdasarkan department

### 📄 **Document Management**
- **PDF Upload & Storage** - Upload dokumen PDF dengan validasi
- **Document Preview** - Preview dokumen sebelum signing
- **Document Organization** - Organisasi dokumen dengan folder
- **Document Sharing** - Share dokumen dengan team members
- **Document History** - Track semua aktivitas dokumen
- **Search & Filter** - Cari dokumen berdasarkan nama, tanggal, status

### ✍️ **Digital Signature**
- **Drawing Signature** - Gambar tanda tangan langsung di browser
- **Upload Signature** - Upload gambar tanda tangan
- **Type Signature** - Ketik tanda tangan dengan berbagai font
- **Signature Library** - Simpan dan gunakan kembali tanda tangan
- **Multiple Signatures** - Tambahkan multiple signatures per dokumen

### 🎨 **Document Editing**
- **Add Text** - Tambahkan teks dengan custom font, size, dan color
- **Add Images** - Tambahkan gambar/logo ke dokumen
- **Add Shapes** - Tambahkan shapes dan symbols
- **Drawing Tools** - Gambar langsung di dokumen
- **Drag & Drop** - Drag and drop elemen ke posisi yang diinginkan
- **Page Rotation** - Rotate halaman dokumen

### 📨 **Signing Requests**
- **Send Signing Requests** - Kirim request ke team atau email eksternal
- **Email Notifications** - Notifikasi otomatis ke signer
- **Request Tracking** - Track status signing requests (Pending, Signed, Declined)
- **Reminder System** - Kirim reminder untuk pending requests
- **Request Cancellation** - Cancel pending requests

### 💬 **Real-time Chat**
- **Document Chat** - Chat real-time untuk setiap dokumen
- **Team Communication** - Komunikasi antar team members
- **Chat History** - Simpan history chat per dokumen

### 🔔 **Notifications**
- **Real-time Notifications** - Notifikasi instant untuk aktivitas penting
- **Email Notifications** - Email untuk signing requests dan updates
- **Activity Feed** - Timeline aktivitas dokumen

### 👥 **Customer Management**
- **Customer Database** - Kelola database customer
- **Customer Invitations** - Invite customer untuk sign dokumen
- **Customer Tracking** - Track customer document activities

### 📊 **Dashboard & Analytics**
- **Usage Statistics** - Disk usage dan file count
- **Recent Activities** - Timeline aktivitas terbaru
- **Quick Actions** - Shortcut untuk actions yang sering digunakan

### 🔐 **Security Features**
- **CSRF Protection** - Protection dari CSRF attacks
- **Session Security** - Secure session management
- **Password Encryption** - Encrypted password storage
- **File Access Control** - Controlled file access per user/company

### ☁️ **Cloud Integration**
- **Google Drive Import** - Import dokumen dari Google Drive
- **Dropbox Import** - Import dokumen dari Dropbox
- **Cloud Conversion** - Convert berbagai format ke PDF (via CloudConvert)

---

## 📋 Prerequisites

Sebelum menjalankan aplikasi, pastikan sistem Anda memiliki:

- **PHP 8.0 atau lebih tinggi**
- **MySQL 5.7+ atau MariaDB 10.2+**
- **Composer** (untuk dependency management)
- **Extensions PHP yang dibutuhkan:**
  - `php-mbstring`
  - `php-pdo`
  - `php-pdo_mysql`
  - `php-gd`
  - `php-curl`
  - `php-zip`

---

## 🛠️ Instalasi

### 1. Clone Repository
```bash
git clone <repository-url>
cd Signer
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Database
- Buat database MySQL baru:
```sql
CREATE DATABASE signer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

- Import database schema:
```bash
mysql -u root -p signer < Database/database.sql
```

### 4. Konfigurasi Environment
- Copy file `.env.example` menjadi `.env` (jika belum ada):
```bash
cp .env.example .env
```

- Edit file `.env` dan sesuaikan konfigurasi:
```env
APP_URL=http://localhost:8000
APP_NAME="Your Company Name"

DB_HOST=localhost
DB_DATABASE=signer
DB_USERNAME=root
DB_PASSWORD=your_password

# Email Settings (optional - dapat dinonaktifkan untuk development)
MAIL_ENABLED=false

# Storage Limits
BUSINESS_DISK_LIMIT=5000
BUSINESS_FILE_LIMIT=500
PERSONAL_DISK_LIMIT=1000
PERSONAL_FILE_LIMIT=100
```

### 5. Setup Permissions
Pastikan folder berikut memiliki write permissions:
```bash
chmod -R 755 uploads/
chmod -R 755 assets/
```

### 6. Generate Application Key (Optional)
Edit `APP_KEY` di `.env` dengan random string untuk security.

---

## 🚀 Cara Menjalankan Aplikasi

### Menggunakan PHP Built-in Server

**Jalankan dengan port default (8000):**
```bash
php -S localhost:8000
```

**Jalankan dengan custom port:**
```bash
php -S localhost:3000
```

**Jalankan dengan host yang bisa diakses dari network:**
```bash
php -S 0.0.0.0:8000
```

### Akses Aplikasi
Buka browser dan akses:
```
http://localhost:8000
```

### Default Login
Setelah instalasi, gunakan kredensial berikut untuk login pertama kali:
- **Email:** admin@example.com
- **Password:** password

*(Pastikan untuk mengganti password setelah login pertama)*

---

## 📁 Struktur Folder

```
Signer/
├── assets/              # Frontend assets (CSS, JS, images)
│   ├── css/
│   ├── js/
│   ├── images/
│   ├── fonts/
│   └── libs/
├── config/              # Configuration files
│   ├── app.php
│   ├── database.php
│   ├── mail.php
│   └── session.php
├── Database/            # Database migrations & seeds
│   └── database.sql
├── lang/                # Language files
│   └── en_US/
├── src/                 # Application source code
│   ├── Controllers/     # Controllers
│   ├── Middleware/      # Middleware
│   ├── TCPDF/          # TCPDF library
│   ├── Application.php
│   ├── Auth.php
│   ├── Database.php
│   ├── Router.php
│   ├── Signer.php
│   └── helpers.php
├── uploads/             # User uploaded files
│   ├── app/
│   ├── avatar/
│   ├── files/
│   ├── signatures/
│   └── copies/
├── vendor/              # Composer dependencies
├── views/               # View templates
│   ├── includes/        # Reusable view components
│   ├── emails/          # Email templates
│   ├── errors/          # Error pages
│   └── extras/          # Extra view components
├── .env                 # Environment configuration
├── .htaccess           # Apache configuration
├── composer.json       # Composer dependencies
├── index.php           # Application entry point
└── README.md           # Documentation
```

---

## 🔧 Konfigurasi Lanjutan

### Email Configuration
Untuk mengaktifkan email notifications, edit `.env`:
```env
MAIL_ENABLED=true
MAIL_DRIVER=smtp
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USERNAME=your-email@gmail.com
SMTP_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

### Cloud Storage Integration

**Google Drive:**
1. Buat project di Google Cloud Console
2. Enable Google Drive API
3. Dapatkan Client ID dan API Key
4. Update `.env`:
```env
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_API_KEY=your-api-key
```

**Dropbox:**
1. Buat app di Dropbox Developer Console
2. Dapatkan App Key
3. Update `.env`:
```env
DROPBOX_APP_KEY=your-app-key
```

### CloudConvert (Document Conversion)
1. Register di CloudConvert
2. Dapatkan API Key
3. Update `.env`:
```env
CLOUDCONVERT_APP_KEY=your-api-key
USE_CLOUD_CONVERT=Enabled
```

---

## 🐛 Troubleshooting

### Error: "Cannot connect to database"
- Pastikan MySQL service running
- Cek kredensial database di `.env`
- Pastikan database sudah dibuat dan ter-import

### Error: "Permission denied" saat upload
```bash
chmod -R 755 uploads/
chown -R www-data:www-data uploads/
```

### Warning: TCPDF Deprecation
- Warning ini tidak menghalangi aplikasi
- Sudah di-suppress di `index.php`
- Safe untuk diabaikan

### PDF Generation Error
- Pastikan PHP memory limit cukup (minimal 256M)
- Edit `php.ini`:
```ini
memory_limit = 256M
upload_max_filesize = 50M
post_max_size = 50M
```

---

## 🔒 Security Notes

1. **Production Deployment:**
   - Set `APP_ENV=production` di `.env`
   - Disable error display: `ini_set('display_errors', 'Off')`
   - Enable HTTPS
   - Use strong database passwords
   - Change default APP_KEY

2. **File Upload Security:**
   - Aplikasi sudah memvalidasi file types
   - Only PDF files allowed (atau sesuai setting)
   - File size limits enforced

3. **Session Security:**
   - Session menggunakan secure cookies
   - CSRF protection enabled
   - Auto logout after inactivity

---

## 📝 Development Notes

### Compatibility
- ✅ PHP 8.0+
- ✅ MySQL 5.7+ / MariaDB 10.2+
- ✅ Modern browsers (Chrome, Firefox, Safari, Edge)

### Known Issues
- TCPDF library menampilkan deprecation warnings di PHP 8.1+ (tidak menghalangi fungsi)
- Email sending memerlukan SMTP configuration yang valid

### Recent Fixes (PHP 8+ Compatibility)
- ✅ Fixed `each()` function deprecated
- ✅ Fixed callable deprecations
- ✅ Fixed null property access warnings
- ✅ Optimized email sending with timeout
- ✅ Added null checks throughout codebase

---

## 📄 License

This project is licensed under the MIT License.

---

## 👨‍💻 Credits

- **Framework:** Simcify - Custom PHP Framework
- **PDF Library:** TCPDF
- **UI Framework:** Bootstrap 4
- **Icons:** Ion Icons

---

## 📞 Support

Untuk pertanyaan atau issues, silakan buat issue di repository atau hubungi developer.

---

**Happy Signing! ✍️**
