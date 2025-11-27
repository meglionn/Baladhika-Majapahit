Baladhika Majapahit - Company Profile

Baladhika Majapahit is a web-based Company Profile application developed as a Web Programming (PemWeb) project. This application serves as a digital information hub for the organization, showcasing its history, services, and contact information.

📋 Table of Contents

About the Project

Features

Tech Stack

Requirements

Installation & Setup

Folder Structure

License

📖 About the Project

This project was built to fulfill the requirements of a Web Programming course. It utilizes the CodeIgniter 3 PHP framework to create a dynamic, MVC-based website. The theme "Baladhika Majapahit" reflects the identity of the organization being profiled.

✨ Features

Home Page: Overview of the organization with a responsive landing page.

About Us: History and vision/mission of Baladhika Majapahit.

Services/Programs: Detailed list of services or activities offered.

News/Blog: Latest updates and articles (if implemented).

Contact Form: Functional contact page for inquiries.

Admin Panel: (Optional - Update this if you have a backend) Dashboard to manage content.

🛠 Tech Stack

Backend: PHP (CodeIgniter 3 Framework)

Frontend: HTML5, CSS3, JavaScript (jQuery/Bootstrap)

Database: MySQL

Server: Apache (via XAMPP/WAMP/Laragon)

⚙️ Requirements

Before running this project, ensure you have the following installed:

PHP >= 5.6 (Recommended PHP 7.4 or 8.0)

Web Server (Apache/Nginx)

MySQL Database

Composer (Optional, if used for dependencies)

🚀 Installation & Setup

Clone the Repository

git clone [https://github.com/meglionn/Baladhika-Majapahit.git](https://github.com/meglionn/Baladhika-Majapahit.git)


Move to Web Root
Move the project folder to your local server directory:

XAMPP: C:\xampp\htdocs\Baladhika-Majapahit

MAMP/WAMP: Corresponding www or htdocs folder.

Database Configuration

Create a new database in phpMyAdmin (e.g., named baladhika_db).

Import the .sql file (if provided in the database folder or root).

Open application/config/database.php and update the settings:

'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'baladhika_db',


Base URL Configuration
Open application/config/config.php and set the base URL:

$config['base_url'] = 'http://localhost/Baladhika-Majapahit/';


Run the Project
Open your browser and visit:
http://localhost/Baladhika-Majapahit/

📂 Folder Structure

Baladhika-Majapahit/
├── application/     # Application logic (Controllers, Models, Views)
├── assets/          # Static files (CSS, JS, Images)
├── system/          # CodeIgniter Core files
├── index.php        # Entry point
└── ...


📄 License

This project is licensed under the MIT License.
