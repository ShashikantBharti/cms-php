# PHP CMS Project

This project is a simple Content Management System (CMS) built with core PHP. It covers various concepts from basic to advanced PHP, including OOP, CRUD operations, authentication, and more.

## Features

- User Authentication (Login, Registration, Password Reset)
- CRUD Operations for Articles
- Category Management
- Article Search
- Comment System
- Secure User Authentication and Session Management
- Data Validation and Sanitization
- Prepared Statements for SQL Queries

## Prerequisites

- Web Server (Apache or Nginx)
- PHP 7.4 or higher
- MySQL
- Composer (for dependency management)

## Installation

### 1. Setup Your Development Environment

Make sure you have a web server, PHP, and MySQL installed. If you don’t have a local development environment set up, you can use tools like XAMPP, MAMP, or WAMP, which include Apache, PHP, and MySQL.

### 2. Create the Project Directory

```bash
mkdir cms
cd cms
```

### 3. Clone the Project Repository

```bash
git clone <repository-url> .
```

### 4. Install Dependencies with Composer

```bash
composer install
```

### 5. Setup the Database

```bash
  CREATE DATABASE cms;
USE cms;

-- Create the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the articles table
CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create the categories table
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the comments table
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    article_id INT NOT NULL,
    user_id INT NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (article_id) REFERENCES articles(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

```

### 6. Start the PHP Built-in Server (for development purposes)

```bash
php -S localhost:8000 -t public
```

### 8. Filder Structure

```bash
cms/
├── config/
│   ├── config.php
├── public/
│   ├── index.php
│   ├── login.php
│   ├── register.php
│   ├── reset_password.php
│   ├── dashboard.php
│   ├── users.php
│   ├── articles.php
│   ├── categories.php
│   ├── article.php
│   ├── search.php
├── src/
│   ├── controllers/
│   │   ├── UserController.php
│   │   ├── ArticleController.php
│   │   ├── CategoryController.php
│   ├── models/
│   │   ├── Database.php
│   │   ├── User.php
│   │   ├── Article.php
│   │   ├── Category.php
│   ├── views/
│   │   ├── templates/
│   │   │   ├── header.php
│   │   │   ├── footer.php
│   │   ├── user/
│   │   │   ├── login.php
│   │   │   ├── register.php
│   │   │   ├── reset_password.php
│   │   │   ├── list.php
│   │   │   ├── edit.php
│   │   ├── article/
│   │   │   ├── list.php
│   │   │   ├── edit.php
│   │   ├── category/
│   │   │   ├── list.php
│   │   │   ├── edit.php
│   │   ├── dashboard.php
├── vendor/
├── .htaccess
├── composer.json
├── README.md
```

## License

This `README.md` file provides a comprehensive guide on setting up, running, and understanding the CMS project.
