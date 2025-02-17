# PHP User Management System

A simple and secure PHP-based user management system that allows users to register, log in, and manage their accounts. This project includes features like user registration, login, password hashing, and database management.

---

## Features

- **User Registration**: Users can register with a unique username and password.
- **Password Hashing**: Passwords are securely hashed using `password_hash()`.
- **User Login**: Registered users can log in using their credentials.
- **Database Management**: Uses MySQL with PDO for secure database interactions.
- **AUTO_INCREMENT Reset**: Includes a utility to reset the `AUTO_INCREMENT` value for database tables.
- **Error Handling**: Robust error handling and user-friendly error messages.

---

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (e.g., Apache, Nginx)
- Composer (optional, for dependency management)

---

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/tanvir-136/php-user-management-system.git

2. **Set up the database**:
   - Create a MySQL database named `my_database` (or any name you prefer).
   - Import the `users` table schema from the `database.sql` file:
     ```bash
      CREATE TABLE users (
          id INT AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(50) UNIQUE NOT NULL,
          password VARCHAR(255) NOT NULL,
          email VARCHAR(100) UNIQUE,
          name VARCHAR(50)
         );
     ```

3. **Configure the database connection**:
   - Open the `db.php` file and update the database credentials:
     ```php
     $host = "localhost"; // Database host
     $user = "root";      // Database username
     $pass = "";          // Database password
     $db = "my_database"; // Database name
     ```

4. **Run the application**:
   - Start your local web server and navigate to the project directory.
   - Access the application in your browser:
     ```
     http://localhost/php-user-management-system
     ```

---

## File Structure

```
php-user-management-system/
├── db.php                # Database connection and utilities
├── index.php             # User registration form
├── login.php             # User login form
├── dashboard.php         # User dashboard (after login)
├── logout.php            # Logout script
├── users.php             # View all users (admin feature)
├── database.sql          # Database schema for the `users` table
├── style.css             # Basic CSS for styling
└── README.md             # Project documentation
```

---

## Usage

### User Registration
1. Navigate to the registration page (`index.php`).
2. Enter a unique username and password.
3. Click "Register" to create an account.

### User Login
1. Navigate to the login page (`login.php`).
2. Enter your username and password.
3. Click "Login" to access your dashboard.

### Reset AUTO_INCREMENT
To reset the `AUTO_INCREMENT` value for the `users` table, run the following script:
```php
require 'db.php';
resetAutoIncrement($conn, 'users');
```

---

## Contributing

Contributions are welcome! If you'd like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Commit your changes and push to your branch.
4. Submit a pull request.

---

## Acknowledgments

- [PHP Documentation](https://www.php.net/docs.php)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [PDO Tutorial](https://www.php.net/manual/en/book.pdo.php)

---

## Author

[Your Name](https://github.com/tanvir-136)


### Steps to Create the Repository:
1. **Create a New Repository**:
   - Go to GitHub and click the "New" button.
   - Name the repository `php-user-management-system`.
   - Add a description (e.g., "A PHP-based user management system with registration, login, and database management features").
   - Choose "Public" or "Private" visibility.
   - Initialize the repository with a `README.md` file (optional, since we’ve created one above).

2. **Push Your Code**:
   - Clone the repository to your local machine:
     ```bash
     git clone https://github.com/your-username/php-user-management-system.git
     ```
   - Copy your project files into the repository folder.
   - Add, commit, and push your changes:
     ```bash
     git add .
     git commit -m "Initial commit"
     git push origin main
     ```

3. **Share the Repository**:
   - Share the repository link with others:
     ```
     https://github.com/tanvir-136/php-user-management-system
     ```

---
