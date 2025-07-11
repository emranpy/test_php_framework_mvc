# ⚙️ Simple PHP MVC Framework For Educational purpose only 

A lightweight and customizable MVC (Model-View-Controller) framework built with native PHP, designed for beginners and solo developers to learn and build scalable web applications.

---

## 🚀 Features

- Custom Router with dynamic URL handling
- PDO Database connection using config constants
- Clean separation of controllers, models, and views
- Laravel-style setup via CLI (database config, app name, etc.)
- Default 404 controller for invalid routes
- Simple configuration via `config.php`
- Error display control with `DEBUG` flag

---

## 📂 Project Structure

framework/
├── app/
│ ├── controllers/
│ │ ├── Home.php
│ │ ├── _404.php
│ ├── core/
│ │ ├── App.php
│ │ ├── Controller.php
│ │ ├── Model.php
│ │ ├── Database.php
│ ├── views/
│ │ └── ...
├── public/
│ └── index.php
├── config.php
├── setup.php
└── README.md


---

## 🛠 Setup Instructions

### 1. Clone the repo

```bash
git clone /emranpy/test_php_framework_mvc.git
```
 Run setup script
php setup.php

Enter your:

Database name

Database username/password

Website name

This generates config.php with the necessary constants.

3. Start your server
If using WAMP/XAMPP or a PHP built-in server:

define('DB_HOST', 'localhost');
define('DB_NAME', 'your_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DEBUG', true);
