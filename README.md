# Lokatani Assignment Web Application
Lokatani offers application-based hydroponic garden management technology and IoT to support healthy and high-quality vegetable production through technology.
## Overview

This repository contains the codebase for a web application developed as part of the Lokatani Assignment for the Web Development Internship. The application is built using CodeIgniter 4 framework, a powerful PHP framework known for its simplicity, performance, and flexibility.

The web application implements CRUD (Create, Read, Update, Delete) functionalities to manage data related to user data. Users can perform various operations such as adding new data entries, viewing existing ones, updating information, and deleting records as needed.

## Installation

To install the application, ensure you have **PHP version 7.3 or higher** and **MySQL version 5.2.0** installed on your system. One of the tools that simplifies PHP development environment setup is XAMPP. Follow these steps to install XAMPP and set up the application:

**1. Install XAMPP:** Download and install XAMPP from the following links based on your operating system:

- [Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/)
- [Llinux](https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/8.2.12/)
- [Mac OS](https://sourceforge.net/projects/xampp/files/XAMPP%20Mac%20OS%20X/8.2.4/)

**2. Clone Repository:** Once XAMPP is installed, navigate to the installation folder and locate the `htdocs` directory. Open a command prompt in the `htdocs` folder and clone this repository using the following command:
```
git clone https://github.com/achmadardanip/crudci4.git
```
**3. Start XAMPP Modules:** Open the XAMPP control panel and start the Apache and MySQL modules. Ensure these modules remain turned on.


## Setup

Follow these steps to set up the database and configure the application:

**1. Database Setup:**
- Open your browser and visit http://localhost/phpmyadmin.
- Create a new database named `crudci4`.
Inside the `crudci4` database, select the `Import menu` and import the SQL file found at `app/sql/user.sql`.

**2. Environment Configuration:**
Navigate to the root folder of the source code. Locate the file named `env`, copy `env` to `.env`. Inside `.env` file Customize the following configurations:
```
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost/crudci4/public'
database.default.hostname = 'localhost'
database.default.database = 'crudci4'
database.default.username = 'your_username'
database.default.password = 'your_password'
```

**3. PHP Configuration**
- Navigate to the directory where XAMPP is installed on your system. Typically, this is `C:\xampp` on Windows or `/opt/lampp` on Linux.
- Within the XAMPP installation directory, locate the `php` folder and open it.
- Inside the `php` folder, you'll find a file named `php.ini`. Open this file in a text editor of your choice.
- Search for the following line in the `php.ini` file:
```
intl.default_locale="en-US"
```
Ensure that the value is set to `en-US`. This setting specifies the default locale for internationalization functions.
- Search for the following line:
```
;extension=php_intl.dll
```
Remove the `semicolon ;` at the beginning of the line to enable the PHP intl extension. Enabling this extension is necessary for internationalization support.
- After making the necessary modifications, save the `php.ini` file.
- To apply the changes, you need to restart the Apache and MySQL modules in XAMPP. You can do this through the XAMPP control panel. Restart both the Apache and MySQL modules.

## Usage
Once the installation and setup are complete, you can start using the web application:

1. Visit http://localhost/crudci4/public in your browser.
2. The web application features four main functionalities: `add user`, `view user`, `edit user`, and `delete user`. Additionally, it includes features like `export`, `pagination`, `page length option`, `search`, and `sorting`.
3. Explore the application and utilize its features as needed.

## Screenshoots

Here are some screenshots of the web application:

![image](https://github.com/achmadardanip/crudci4/assets/52017148/a23aa08b-df0e-45e9-b075-31a64f584575)
![image](https://github.com/achmadardanip/crudci4/assets/52017148/3b4cecd8-f610-48f7-8cf8-377964a48623)
![image](https://github.com/achmadardanip/crudci4/assets/52017148/5f01f0b4-ab24-4ba4-af07-0631d37e50aa)
![image](https://github.com/achmadardanip/crudci4/assets/52017148/354c2560-272e-45cb-a036-1c79b97fe224)
![image](https://github.com/achmadardanip/crudci4/assets/52017148/beaa68bd-682b-41fa-8bcb-683b9d37bd1f)
![image](https://github.com/achmadardanip/crudci4/assets/52017148/a2e20965-de5c-424d-9e6d-0a99f2a86392)

## Contact
Feel free to contact me if you encounter any issues or have questions regarding the application:

WhatsApp: 083877502520




