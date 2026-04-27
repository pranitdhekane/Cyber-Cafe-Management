# CCMS (Cyber Cafe Management System)

A Dockerized PHP + MySQL web application for managing cyber café users, sessions, and billing.

---

## 🚀 Features

- User entry management
- Active / checkout tracking system
- Fee calculation support
- Admin dashboard
- MySQL database integration
- Dockerized environment (PHP + Apache + MySQL)

---

## 🧱 Tech Stack

- PHP 8.2 (Apache)
- MySQL 8.0
- Docker & Docker Compose
- Bootstrap (UI)
- HTML/CSS/JS

---

## 📁 Project Structure
cyber/
│
├── ccms/ # PHP application
│ ├── index.php
│ ├── add-users.php
│ ├── view-user-detail.php
│ └── includes/
│
├── db/
│ └── ccmsdb.sql # Initial database schema
│
├── docker-compose.yml
├── Dockerfile
└── .gitignore



---

## ⚙️ Setup Instructions

### 1️⃣ Clone Repository

```bash
git clone https://github.com/your-username/ccms.git
cd ccms

2️⃣ Create .env file
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=ccms

DB_HOST=db
DB_USER=root
DB_PASSWORD=root
DB_DATABASE=ccms
3️⃣ Run with Docker
docker compose up -d --build
4️⃣ Access Application
http://localhost:8080
🐳 Docker Services
MySQL Database
Image: mysql:8.0
Port: 3306
Database: ccms
Web Application
PHP + Apache container
Port: 8080
🗄️ Database Initialization

The database is automatically initialized using:

db/ccmsdb.sql

This file is mounted into:

/docker-entrypoint-initdb.d/
🔄 User Flow
Add new user
User status = Active
On checkout → status = Out
Fees + remarks stored
View history in dashboard
🧪 Common Issues & Fixes
❌ Users not showing

Check:

Status = 'Active'
❌ DB connection failed

Ensure:

DB_HOST=db
🧼 Cleanup
docker compose down -v
docker system prune -a
📌 Best Practices
Always use service name db (not container name)
Store secrets in .env
Do not commit .env or logs
Use Active/Out status instead of empty strings
👨‍💻 Author

Pranit Dhekane

📜 License

This project is for educational / practice purposes.