# 🍽️ CookScript

**CookScript** is a lightweight recipe sharing platform built using **PHP**, **SQL**, **HTML**, and **CSS**. It allows users to view, share, and explore a collection of recipes through a simple and elegant interface — perfect for food lovers and beginner web developers!

---

## 🚀 Features

- 🍲 Browse a variety of delicious recipes
- 📝 Add and share new recipes
- 🗃️ Recipes stored using SQL database
- 📄 Blogger-style individual recipe view
- 🎨 Clean and responsive UI using HTML & CSS
- 🔍 Easy to customize and expand

---

## 📸 Screenshots

<img src="screenshots/homepage.png" width="100%">
<img src="screenshots/recipe-page.png" width="100%">
<img src="screenshots/add-recipe.png" width="100%">

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3
- **Backend:** PHP 7+
- **Database:** MySQL

---

## 📂 Project Structure

CookScript/
│
├── css/               # Stylesheets
│   └── style.css
│
├── img/               # Images and thumbnails
│
├── recipes/           # Dynamically generated recipe pages
│
├── includes/          # Reusable PHP components
│   ├── db.php         # Database connection
│   └── header.php     # Site header
│
├── add-recipe.php     # Form to add new recipes
├── index.php          # Home page listing all recipes
├── recipe.php         # Individual recipe viewer
└── README.md


---

## ⚙️ Setup Instructions

1. **Clone this repository**
   ```bash
   git clone https://github.com/Iamvishant01/cookscript-db.git
   cd cookscript
2. Import the Database
   Import the cookscript.sql file into your MySQL server using phpMyAdmin or the command line.

3. Configure Database Connection
   ```bash
   $conn = mysqli_connect("localhost", "your_username", "your_password", "cookscript");
##🙌 Acknowledgments

Inspired by a passion for food and web development. Built with ❤️ by Vishant Netke



