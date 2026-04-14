# Eventify — Event Booking Platform

Welcome to **Eventify**, a polished PHP event booking application designed for local XAMPP deployment. This project offers a complete event discovery experience with dynamic featured listings, search, categories, user authentication, and administrative tools.

🔗 Live Demo: https://eventify.free.nf/

---

## ✨ What It Is

Eventify is a responsive event marketplace built using PHP, MySQL, and modern front-end design. It supports:

- Discovering featured events
- Browsing events by category
- Searching events by name
- Viewing event details and schedules
- Signing up / logging in as a user
- Accessing user profile and logout flow
- Managing events, venues, and users via backend controllers

---

## 🚀 Live Preview

Access the deployed version here:

- **Live site:** https://eventify.free.nf/

---

## 🧩 Core Features

- Dynamic featured events section on the home page
- Category-based event browsing
- Search bar for keyword-driven event lookup
- User authentication and profile navigation
- Admin-oriented controllers for managing events, promos, and user actions
- Newsletter signup interface and contact page layout
- Clean UI powered by CSS and Remix Icon

---

## 🛠️ Technology Stack

- PHP
- MySQL / MariaDB
- HTML5, CSS3, JavaScript
- XAMPP (Windows)
- Remix Icon library

---

## ⚙️ Installation Guide

1. Install **XAMPP** on Windows.
2. Copy the project folder to `C:\xampp\htdocs\Event-Booking`.
3. Start **Apache** and **MySQL** from the XAMPP Control Panel.
4. Open `http://localhost/phpmyadmin`.
5. Create a new database named `event_booking`.
6. Import the SQL schema from `Model/event_booking.sql`.

---

## 🔌 Database Configuration

The database connection is set in `Model/DataBase.php`.

Default connection values:

- Host: `127.0.0.1`
- User: `root`
- Password: `` (empty)
- Database: `event_booking`

If your environment uses a different MySQL username or password, update the values in `Model/DataBase.php`.

---

## ▶️ Run the App Locally

1. Ensure XAMPP is running.
2. Open a browser.
3. Visit:
   - `http://localhost/Event-Booking/index.php`
4. Use the site navigation to explore Home, Events, Contact, Login, and Signup.

---

## 📂 Project Structure

- `index.php` — Landing page with featured events and search.
- `Model/` — Database connection and business models.
- `Controller/` — Action handlers for login, signup, search, logout, and management.
- `View/` — PHP page templates and user interface views.
- `Asset/CSS/` — Stylesheets.
- `Asset/js/` — Front-end scripts.
- `Asset/Image/` — Image assets.

---

## 💡 Notes & Tips

- Make sure **PHP sessions** are enabled in your PHP configuration.
- If login or form actions fail, verify the `event_booking` database import and `Model/DataBase.php` settings.
- For production use, secure credentials and sanitize input data thoroughly.

---

## 📝 Contact

For improvements, bugs, or deployment questions, use the contact page in the application or review the `Controller` and `View` folders for customization.
