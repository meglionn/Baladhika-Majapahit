# Baladhika Majapahit - Company Profile Website

![Language](https://img.shields.io/badge/Language-PHP-blue)
![Framework](https://img.shields.io/badge/Framework-CodeIgniter%203-firebrick)
![License](https://img.shields.io/badge/License-MIT-green)

## 📖 Description

This repository contains the source code for the **PT. Baladhika Majapahit** company profile website. The application is built using the **CodeIgniter 3** PHP framework and serves as a digital platform to showcase the company's profile, vision, mission, and services in outsourcing and manpower management.

## 🏢 About PT. Baladhika Majapahit

PT. Baladhika Majapahit is a company based in **Mojokerto, Indonesia**, specializing in various manpower and outsourcing services. The website highlights their core business areas, including:
* **Outsourcing Services** (Jasa Alih Daya)
* **Security Services** (Pengamanan & Pengawalan)
* **Cleaning Services**
* **SPBU Management**
* **Manpower Supply & General Trading**

## 🚀 Features

* **Company Profile**: Dedicated sections for History, Vision & Mission, and Legal structure.
* **Service Catalog**: Detailed pages describing the services offered (Security, Cleaning, etc.).
* **Responsive Design**: Optimized for viewing on desktops, tablets, and mobile phones.
* **Contact Integration**: Office location maps, email links, and contact forms.
* **Admin Panel**: (Assumed) Backend dashboard to manage news, services, and gallery content.

## 🛠️ Tech Stack

* **Backend Framework**: [CodeIgniter 3](https://codeigniter.com/userguide3/)
* **Language**: PHP
* **Database**: MySQL
* **Frontend**: HTML5, CSS3, JavaScript (Likely Bootstrap for styling)

## ⚙️ Installation & Setup

Follow these steps to set up the project on your local machine.

### Prerequisites
* PHP Version 5.6 or newer (Recommended PHP 7.4+)
* MySQL Database
* Web Server (Apache/Nginx/XAMPP/Laragon)
* Composer (Optional, depending on dependency usage)

### Installation Steps

1.  **Clone the Repository**
    ```bash
    git clone [https://github.com/meglionn/Baladhika-Majapahit.git](https://github.com/meglionn/Baladhika-Majapahit.git)
    ```

2.  **Configure Database**
    * Create a new database in MySQL (e.g., `db_baladhika`).
    * Import the project's SQL file into your database.
        * *Note: Check the root folder or an `sql/` folder for a `.sql` file. If missing, you may need to ask the repository owner for the database schema.*
    * Open `application/config/database.php` and update your database credentials:
        ```php
        $db['default'] = array(
            'hostname' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'db_baladhika',
            'dbdriver' => 'mysqli',
        );
        ```

3.  **Configure Base URL**
    * Open `application/config/config.php`.
    * Set the `base_url` to match your local server path:
        ```php
        $config['base_url'] = 'http://localhost/Baladhika-Majapahit/';
        ```

4.  **Run the Application**
    * Move the project folder to your web server's root directory (e.g., `htdocs` for XAMPP or `www` for Laragon).
    * Open your browser and navigate to:
        `http://localhost/Baladhika-Majapahit/`

## 📂 Project Structure

```text
Baladhika-Majapahit/
├── application/        # Core application code (Controllers, Models, Views)
│   ├── config/         # Configuration files (Database, Routes, etc.)
│   ├── controllers/    # Page logic
│   ├── models/         # Database interactions
│   └── views/          # HTML Templates
├── assets/             # Static resources (Images, CSS, JS, Fonts)
├── system/             # CodeIgniter Framework Core
├── index.php           # Entry point
├── composer.json       # Dependencies
└── readme.rst          # Default CodeIgniter documentation

## 📄 License

This project is open-sourced under the MIT License.
