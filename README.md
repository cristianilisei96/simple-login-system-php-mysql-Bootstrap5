## 📸 Screenshots

## Application
<img width="2559" height="1439" alt="application" src="https://github.com/user-attachments/assets/8a9299e7-217a-4550-b624-2382e4edac95" />

## Rgesiter page
<img width="2559" height="1439" alt="register-page" src="https://github.com/user-attachments/assets/a06dd983-9500-46f5-9eef-1c3d71d32966" />

## Register page filled
<img width="2559" height="1439" alt="register-filled" src="https://github.com/user-attachments/assets/021b6690-f074-4722-bab3-9b830e7a1ea8" />

## After registration
<img width="2559" height="1439" alt="after-registration" src="https://github.com/user-attachments/assets/e0907fbc-bb1a-493f-95d4-7d15417958c5" />

## Login page filled
<img width="2559" height="1439" alt="after-registration-filled" src="https://github.com/user-attachments/assets/f72cca8d-5e8b-455d-833d-4fe7982eef4c" />

## After login
<img width="2559" height="1439" alt="after-login" src="https://github.com/user-attachments/assets/b96bf81b-fb64-4df7-b91b-8465bb023d04" />

## After logout
<img width="2559" height="1387" alt="after-logout" src="https://github.com/user-attachments/assets/4567245c-00ce-48cd-b5b5-8ac086a41873" />


# Simple Login System – PHP, MySQL & Bootstrap 5

A simple and clean authentication system built with **PHP**, **MySQL**, and **Bootstrap 5**.  
The application allows users to **register**, **log in**, **log out**, and displays their **role** after authentication.  
It is designed as a lightweight starter project for learning PHP authentication, session handling, and basic role management.

---

## 🚀 Features

- 🔐 **User Authentication** (register, login, logout)
- 👤 **Role-Based Access** (default role: `user`)
- 🔒 **Password Hashing** using `password_hash()`
- 🧪 **Form Validation** with error/success alerts
- 🎨 **Responsive UI** using Bootstrap 5
- 💾 **MySQL Database** for storing user accounts
- 🧭 **Session Management** for logged-in users

---

## 🛠️ Technologies Used

- **PHP 8+**
- **MySQL**
- **Bootstrap 5**
- **PHP Sessions**
- **Prepared Statements (MySQLi)**

---

## 📦 Installation

### 1. Clone the repository
```bash
git clone https://github.com/cristianilisei96/simple-login-system-php-mysql-Bootstrap5
```

Place the project inside your web server directory (e.g., laragon/www or htdocs).

### 2. Create the database
Create a database named login.

### 3. Create the users table
Run this SQL:

sql
CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 email VARCHAR(100) UNIQUE NOT NULL,
 password VARCHAR(255) NOT NULL,
 role VARCHAR(50) DEFAULT 'user'
);

### 4. Configure database connection
Edit config/database.php:

php
$host = '127.0.0.1';
$db   = 'login';
$user = 'root';
$pass = '';

### 5. Run the project local
If using Laragon:

http://localhost/simple-login-system-php-mysql-Bootstrap5


🔐 Security Notes
Passwords are hashed using password_hash()

Sessions protect authenticated pages

Prepared statements prevent SQL Injection

Email uniqueness enforced at database level

Folder structure:
/config
    database.php
/includes
    header.php
    footer.php
/screenshots
    *.png
index.php
login.php
register.php
logout.php
README.md

TODO (Future Improvements)
Add CSRF protection

Add password reset functionality

Add admin panel

Add profile page

Add email verification

Improve form validation



📄 License
This project is open-source and free to use for learning purposes.
