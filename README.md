# 🎓 Student Enrollment System (Classic CRUD)

A fundamental implementation of a **Student Registration System** built with **Native PHP** and **MySQL**. This project demonstrates the core logic of backend development, database connectivity, and data manipulation without relying on modern frameworks.

It serves as a deep dive into how server-side scripting interacts with relational databases.

## 📸 Screenshots
*(Ganti link gambar di bawah dengan screenshot yang sudah kamu upload ke repo)*

<div align="center">
  <img src="path/to/menu-screenshot.png" alt="Main Menu" width="45%">
  <img src="path/to/form-screenshot.png" alt="Registration Form" width="45%">
</div>

## ✨ Key Features
* **Database Connectivity:** Established a robust connection between PHP and MySQL using `mysqli`.
* **Data Insertion (Create):** Securely captures user input from HTML forms and stores it in the database.
* **Data Retrieval (Read):** Fetches student data and displays it dynamically (Coming Soon).
* **Error Handling:** Implemented validation logic to prevent empty submissions and SQL injection risks.
* **Status Feedback:** Provides immediate user feedback (Success/Failure alerts) via URL parameters.

## 🛠️ Tech Stack
* **Language:** PHP 8.x (Hypertext Preprocessor)
* **Database:** MySQL / MariaDB
* **Server:** Apache (via XAMPP)
* **Frontend:** HTML5 (Classic Semantic Structure)

## 📂 Project Structure
```text
/smk_coding
├── config.php                # Database connection credentials
├── index.php                 # Main dashboard/landing page
├── form-daftar.php           # Input form for new students
├── proses-pendaftaran.php    # Backend logic for processing data
└── README.md                 # Project documentation
