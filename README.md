![Screenshot 2025-05-03 at 4 37 54 PM](https://github.com/user-attachments/assets/e9e4432b-ebc7-49e7-b882-4cc6fe646f85)
![Screenshot 2025-05-03 at 4 37 38 PM](https://github.com/user-attachments/assets/b508e009-a889-4889-9644-248a8f42dbf4)

# Simple Login System PHP MySQL

This is a simple login and registration system built with PHP and MySQL. It allows users to register, log in, and log out of the application. The system uses PHP sessions to manage user authentication and permissions.

## Features

- **User Authentication**: Allows users to log in to the application using an email and password.
- **User Registration**: Allows users to register with a valid email and password.
- **Alert Messages**: Visual feedback for errors and success using Bootstrap styles.
- **Role-Based Access**: Users have an associated role, which can be used for managing permissions.

## Technologies

- **PHP**: The main programming language used for server-side logic.
- **MySQL**: The database used to store user data and information.
- **Bootstrap 5**: A CSS framework used for responsive styling and components.
- **PHP Sessions**: Used to manage user authentication and sessions.

## Installation

1. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/cristianilisei96/simple-login-system-php-mysql.git

Make sure you have a web server with PHP and MySQL (for example, XAMPP or MAMP).

Create a MySQL database named login.

Create the users table using the following SQL command:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'user'
);
Set up your database connection in the config/database.php file by entering your database credentials.

Open the project in your browser and test the login and registration functionalities.

Usage
Registration: Go to register.php, fill in the form, and submit it to create a new account.

Login: Go to login.php, enter your email and password to log in.

Logout: Once logged in, you can log out by clicking the logout button in the navigation bar.

