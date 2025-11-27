Baladhika Majapahit - Corporate Profile System
==============================================

.. image:: https://img.shields.io/badge/Status-Academic_Project-blue
   :alt: Project Status
.. image:: https://img.shields.io/badge/Framework-CodeIgniter_3-firebrick
   :alt: Framework
.. image:: https://img.shields.io/badge/License-MIT-green
   :alt: License

The **Baladhika Majapahit** application constitutes a web-based Enterprise Profile System, engineered in partial fulfillment of the academic requirements for our Web Programming course, spesifically the final project.

This digital infrastructure functions as a centralized repository for organizational data, systematically delineating the entity's historical trajectory, operational portfolio, and established communication protocols.

📋 Index of Contents
--------------------

* `Project Synopsis`_
* `Functional Specifications`_
* `Technological Infrastructure`_
* `System Prerequisites`_
* `Deployment Protocol`_
* `Directory Architecture`_
* `Licensing`_

.. _Project Synopsis:

📖 Project Synopsis
-------------------

The architecture of this project was conceived and executed to satisfy the stipulations of the Web Programming course. The system leverages the **CodeIgniter 3 PHP framework** to establish a dynamic web application adhering to the **Model-View-Controller (MVC)** architectural pattern.

The design theme, designated "Baladhika Majapahit," is intended to rigorously reflect the corporate identity of the subject organization.

.. _Functional Specifications:

✨ Functional Specifications
---------------------------

The system comprises the following distinct modules:

* **🏠 Primary Interface (Home Page):** A responsive landing page designed to provide a comprehensive overview of the organizational entity.
* **🏢 Institutional Biography (About Us):** A detailed exposition regarding the historical background, as well as the strategic vision and mission statements of Baladhika Majapahit.
* **🛠️ Operational Portfolio (Services/Programs):** An exhaustive enumeration of the services rendered or activities conducted by the organization.
* **📰 Informational Updates (News/Blog):** A module dedicated to the dissemination of recent developments and articles (contingent upon implementation status).
* **📞 Communication Gateway (Contact Form):** A functional interface designed to facilitate external inquiries.
* **⚙️ Administrative Control Panel:** *(Optional)* A dashboard interface for the management of digital content.

.. _Technological Infrastructure:

🛠 Technological Infrastructure
------------------------------

The application is built upon the following technical stack:

+-------------------------+---------------------------------------------+
| Component               | Technology                                  |
+=========================+=============================================+
| **Server-Side Logic** | PHP (CodeIgniter 3 Framework)               |
+-------------------------+---------------------------------------------+
| **Client-Side** | HTML5, CSS3, JavaScript (jQuery/Bootstrap)  |
+-------------------------+---------------------------------------------+
| **Data Persistence** | MySQL RDBMS                                 |
+-------------------------+---------------------------------------------+
| **Hosting** | Apache HTTP Server (XAMPP/WAMP/Laragon)     |
+-------------------------+---------------------------------------------+

.. _System Prerequisites:

⚙️ System Prerequisites
----------------------

Prior to the initiation of the deployment sequence, ensure the host environment is equipped with:

* **PHP:** Version 5.6 or greater (7.4 or 8.0 recommended).
* **Web Server:** Apache or Nginx.
* **Database:** MySQL.
* **Dependency Manager:** Composer (Optional).

.. _Deployment Protocol:

🚀 Deployment Protocol
----------------------

1. Repository Replication
~~~~~~~~~~~~~~~~~~~~~~~~~

Acquire the source code from the remote repository:

.. code-block:: bash

   git clone https://github.com/meglionn/Baladhika-Majapahit.git

2. Directory Relocation
~~~~~~~~~~~~~~~~~~~~~~~

Transfer the project folder to your local server root directory:

* **XAMPP:** ``C:\xampp\htdocs\Baladhika-Majapahit``
* **MAMP/WAMP:** The corresponding ``www`` or ``htdocs`` directory.

3. Database Configuration
~~~~~~~~~~~~~~~~~~~~~~~~~

1. Initialize a new database in phpMyAdmin (e.g., ``baladhika_db``).
2. Import the provided ``.sql`` schema file (located in the root or database directory).
3. Modify ``application/config/database.php`` to match your environment:

.. code-block:: php

   $db['default'] = array(
       'dsn'   => '',
       'hostname' => 'localhost',
       'username' => 'root',      // Your DB Username
       'password' => '',          // Your DB Password
       'database' => 'baladhika_db',
       'dbdriver' => 'mysqli',
       // ... remaining config
   );

4. Base URL Configuration
~~~~~~~~~~~~~~~~~~~~~~~~~

Open ``application/config/config.php`` and establish the base URL:

.. code-block:: php

   $config['base_url'] = 'http://localhost/Baladhika-Majapahit/';

5. System Execution
~~~~~~~~~~~~~~~~~~~

Access the application via your web browser:
`http://localhost/Baladhika-Majapahit/ <http://localhost/Baladhika-Majapahit/>`_

.. _Directory Architecture:

📂 Directory Architecture
-------------------------

.. code-block:: text

   Baladhika-Majapahit/
   ├── application/     # Application Logic (Controllers, Models, Views)
   ├── assets/          # Static Resources (CSS, JS, Images)
   ├── system/          # CodeIgniter Core Framework Files
   ├── index.php        # Application Entry Point
   └── ...

.. _Licensing:

📄 Licensing
------------

The usage and distribution of this project are governed by the terms set forth in the `MIT License <LICENSE>`_.
