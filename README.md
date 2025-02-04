### README for KickSavvy

markdown
# KickSavvy - Sneaker Store Web Application

KickSavvy is a modern web application created for sneaker enthusiasts. Built using PHP, MySQL, JavaScript, HTML, and CSS, KickSavvy offers a seamless shopping experience with full CRUD functionality, user profile management, and an intuitive admin panel.

## Features

- *Product Management (CRUD):* Add, update, view, and delete sneaker listings effortlessly.
- *User Profiles:* Secure user registration, login, and profile update capabilities.
- *Admin Panel:* Robust dashboard to manage sneaker inventory, orders, and user data.
- *Responsive Design:* Enjoy a consistent and responsive user experience on any device.

## Technologies Used

- *Frontend:* HTML, CSS, JavaScript
- *Backend:* PHP
- *Database:* MySQL

## Installation

1. *Clone the Repository:*
   bash
   git clone https://github.com/astha463/SneakersEcommerce.git
   cd SneakersEcomerce

    Setup Database:
        Create a MySQL database sneaker.
        Import the SQL fileinto your MySQL server.

    Configure the Application:
        Update the database connection settings in config.php:

        <?php
        define('DB_HOST', 'localhost');
        define('DB_USER', 'your_db_user');
        define('DB_PASS', 'your_db_password');
        define('DB_NAME', 'sneaker');
        ?>

    Run the Application:
        Deploy the project on a local server environment (XAMPP, WAMP, LAMP, etc.).
        Access the application via http://localhost/SneakersEcommerce/login.php in your browser.

Usage

    For Shoppers: Register and manage your profile, browse the latest sneaker trends, and enjoy a smooth checkout experience.
    For Administrators: Utilize the admin panel to manage sneaker products, process orders, and handle user management tasks.
