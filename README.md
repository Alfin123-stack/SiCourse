# 📚 SiCourse

_Internal course management system for modern learning environments_

![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)
![Bootstrap Icons](https://img.shields.io/badge/Bootstrap%20Icons-1.11-blue?logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-blue)

---

## 📖 Overview
**SiCourse** is a web-based application designed to manage **courses, students, and learning materials** efficiently.  
Built with **Laravel** as the backend framework and integrated with **Bootstrap UI**, this project ensures scalability, security, and a clean developer experience.  

---

## ✨ Features
- 🎓 **Course Management** → Create, update, and delete courses with ease.  
- 👩‍🏫 **User Roles** → Support for admins, instructors, and students.  
- 🗄️ **Database Integration** → MySQL for structured and reliable data storage.  
- 🎨 **Modern UI** → Styled with Bootstrap 5 + Bootstrap Icons.  
- ⚡ **Efficient Asset Bundling** → Laravel Mix for fast builds and asset management.  
- 🌍 **Localization** → Multilingual support with `lang` directory.  
- 🛡️ **Secure Authentication** → Built-in Laravel Auth scaffolding.  

---

## 🏗 Tech Stack

**Backend**
- Laravel 10 (PHP 8+)  
- MySQL (or compatible database)  

**Frontend**
- Bootstrap 5  
- Bootstrap Icons  

**Build Tools**
- Laravel Mix (Webpack wrapper)  
- PostCSS  
- Lodash  
- Axios (for HTTP requests)  

---

## ⚡ Getting Started

### ✅ Prerequisites
- PHP `>= 8.1`  
- Composer  
- Node.js `>= 18` + npm  
- MySQL database  

### 📥 Installation
```bash
git clone https://github.com/Alfin123-stack/SiCourse.git
cd SiCourse

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy environment variables
cp .env.example .env

# Generate app key
php artisan key:generate
