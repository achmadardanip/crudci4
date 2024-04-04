# Lokatani Assignment Web Application

## Overview

This repository contains the codebase for a web application developed as part of the Lokatani Assignment for the Web Development Internship. The application is built using CodeIgniter 4 framework, a powerful PHP framework known for its simplicity, performance, and flexibility.

The web application implements CRUD (Create, Read, Update, Delete) functionalities to manage data related to user data. Users can perform various operations such as adding new data entries, viewing existing ones, updating information, and deleting records as needed.

## Installation

To install the application, ensure you have **PHP version 7.3 or higher** and **MySQL version 5.2.0** installed on your system. One of the tools that simplifies PHP development environment setup is XAMPP. Follow these steps to install XAMPP and set up the application:

**1. Install XAMPP:** Download and install XAMPP from the following links based on your operating system:

- [Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.29/)
- [Llinux](https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/7.4.29/)
- [Mac OS](https://sourceforge.net/projects/xampp/files/XAMPP%20Mac%20OS%20X/7.4.29/)

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

**2. Configuration:**
Navigate to the root folder of the source code. Locate the file named `env`, copy `env` to `.env`. Inside `.env` file Customize the following configurations:
```
app.baseURL = 'http://localhost/crudci4/public'
database.default.hostname = 'localhost'
database.default.database = 'crudci4'
database.default.username = 'your_username'
database.default.password = 'your_password'
```

## Usage
Once the installation and setup are complete, you can start using the web application:

1. Visit http://localhost/crudci4/public in your browser.
2. The web application features four main functionalities: `add user`, `view user`, `edit user`, and `delete user`. Additionally, it includes features like `export`, `pagination`, `page length option`, `search`, and `sorting`.
3. Explore the application and utilize its features as needed.

## Screenshoots

Here are some screenshots of the web application:

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

Here are some screenshots of the web application:


- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
