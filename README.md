# 🛒 Laravel 9 – Ecommerce Application

A full-featured **Grocery Shopping E-commerce Web Application** built using **Laravel 9**.  
This project demonstrates a complete real-world e-commerce system including product management, cart, checkout, and payment integration.

---

## 📸 Screenshots
![preview img](/preview.png)

---

## 📌 Project Description

This Laravel 9 based e-commerce application allows users to browse grocery products, add them to cart, place orders, and complete payments securely.  
It also includes an admin panel for managing products, categories, orders, and users.

---

## ✨ Features

### 👤 User Features
- User registration and login
- Browse products by category
- Product search
- Shopping cart functionality
- Secure checkout
- Online payment integration
- Order history
- Newsletter subscription

### 🛠️ Admin Features
- Product management (CRUD)
- Category management
- Order management
- User management
- Newsletter subscriber management
- Payment monitoring

---

## 🧰 Technologies Used

- **Framework:** Laravel 9
- **Language:** PHP 8+
- **Frontend:** Blade, Bootstrap
- **Database:** MySQL
- **Authentication:** Laravel Auth
- **Payment Gateway:** Integrated
- **Version Control:** Git & GitHub

---

## 🗂️ Project Structure

```text
app/                Application logic
bootstrap/          Framework bootstrap files
config/             Configuration files
database/           Migrations & seeders
lang/               Language files
public/             Public assets
resources/          Views & frontend resources
routes/             Web routes
storage/            Logs & uploads
tests/              Test cases

## Step 1: Clone Repository
git clone https://github.com/your-username/Grocery_Shopping.git
cd Grocery_Shopping

## Step 2: Install Dependencies
composer install
npm install
npm run dev

## Step 3: Setup Environment
cp .env.example .env
php artisan key:generate

##Step 4: Run Migrations
php artisan migrate

## Step 5: Run the Application
php artisan serve

http://127.0.0.1:8000

