<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🔐 Laravel Auth Profile System

A fast, secure, and modular **Laravel-based authentication and user profile management system** built with best practices in mind. This project demonstrates role-based access control, profile CRUD operations, avatar uploads, and clean service-repository architecture — ideal for production-ready user systems.

---

## 🚀 Features

- **Authentication**  
  Email/password login & registration using Laravel Breeze with bcrypt password encryption.

- **Rate Limiting**  
  Login throttled using Laravel’s `throttle` middleware (5 attempts/minute).

- **User Profile CRUD**  
  - Fields: `name`, `email`, `phone`, `bio`, `avatar`, `role`  
  - Admin can manage all users  
  - Users can view and update their own profiles  
  - Avatar image uploads stored securely in `storage/app/public/avatars`

- **Role-Based Access Control**  
  Admin users have full access to user CRUD (incl. delete), while regular users have limited access.

- **Service Repository Pattern**  
  Clean code architecture with service-repository separation for testability and scalability.

- **UI & Styling**  
  - Blade components with Tailwind CSS  
  - Avatar and role information displayed in listing and detail views

---

## 📂 Project Structure

app/
├── Http/
│ └── Controllers/
│ ├── DashboardController.php
│ └── UserController.php
├── Services/
│ └── UserService.php
├── Repositories/
│ ├── UserRepository.php
│ └── UserRepositoryInterface.php


---

## 📄 API Documentation

API endpoints and usage details are available in the [API_Documentation_Auth_Profile_System.pdf](public/API_Documentation_Auth_Profile_System.pdf) file.

---

## 🛠 Setup Instructions

```bash
git clone https://github.com/your-username/laravel-auth-profile-system.git
cd laravel-auth-profile-system
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
npm install && npm run dev
php artisan serve


✅ Requirements
PHP 8.1+

Laravel 10+

MySQL

Node.js & NPM

📌 Demo Admin Credentials
Admin => (username = alihaider55533@gmail.com,  password = 12345678)
User => (username = bilal@gmail.com,  password = 12345678) 
Note: Only Admin can delete a user.


🧑‍💻 Author
Developed by Ali Haider


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
