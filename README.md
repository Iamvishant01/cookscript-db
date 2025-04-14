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

![image](https://github.com/user-attachments/assets/b65fcf09-0aca-4b66-98c2-a5b795b988bc)
![image](https://github.com/user-attachments/assets/77e11bb0-bec7-4756-9663-3197e43b2f8c)
![image](https://github.com/user-attachments/assets/88b59582-c1d1-4e1f-a001-0b13a5ab99af)



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



