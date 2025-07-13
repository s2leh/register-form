# User registeration form

A complete PHP web application for user registration and management with a responsive interface.

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP
- **Database**: MySQL
- **Fonts**: Google Fonts (Cormorant Garamond)

## Installation

1. **Prerequisites**:
   - xampp
   - PHP 7.4+
   - MySQL 5.7+

2. **Setup Database**:
   ```sql
   CREATE DATABASE clients;
   USE clients;
   
   CREATE TABLE clients (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100) NOT NULL,
     age INT NOT NULL,
     status TINYINT DEFAULT 1,
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
