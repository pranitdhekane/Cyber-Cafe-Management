# CCMS (Cyber Cafe Management System)

A Dockerized PHP + MySQL web application used to manage cyber café users, sessions, and billing operations.

---

## 🚀 Features

- User entry management
- Active / checkout tracking system
- Fees calculation
- Admin dashboard
- MySQL database integration
- Dockerized setup (PHP + Apache + MySQL)
- Status-based workflow (Active → Out)

---

## 🧱 Tech Stack

- PHP 8.2 (Apache)
- MySQL 8.0
- Docker & Docker Compose
- Bootstrap UI
- HTML / CSS / JavaScript

---

## 📁 Project Structure


cyber/
│
├── ccms/ # PHP Application
│ ├── index.php
│ ├── add-users.php
│ ├── manage-newusers.php
│ ├── view-user-detail.php
│ └── includes/
│
├── db/
│ └── ccmsdb.sql # Database initialization script
│
├── Dockerfile
├── docker-compose.yml
├── .env
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
🗄️ MySQL Database
Image: mysql:8.0
Container: db
Port: 3306
Database: ccms
Auto-init: db/ccmsdb.sql
🌐 Web Application
PHP 8.2 + Apache
Container: web-ui
Port: 8080
Connected to MySQL via service name db
🗄️ Database Initialization

Database is automatically created using:

db/ccmsdb.sql

Mounted into:

/docker-entrypoint-initdb.d/
🔄 Application Workflow
1. User Entry
User is added into system
Status = Active
2. Active State
User is currently in system
Visible in "New Users" page
3. Checkout Process
Status changed to Out
Remark, Fees, OutTime stored
4. Completed State
User moved to history / old users
🧪 Common Issues & Fixes
❌ Users not showing

Ensure correct query:

SELECT * FROM tblusers WHERE Status='Active';
❌ DB connection error

Ensure:

DB_HOST=db
❌ Docker service name issue

Use service name:

db (NOT database)
🧼 Cleanup Commands
docker compose down -v
docker system prune -a
docker volume prune -f
📌 Best Practices
Always use service name db for database connection
Never use empty string status ("")
Use proper status flow: Active → Out
Store secrets in .env
Do not commit .env, logs, or runtime files
Enable proper PHP error handling in production
🔐 Security Notes
Avoid SQL injection → use prepared statements
Never expose DB credentials in code
Validate all user inputs
Disable display_errors in production
👨‍💻 Author

Pranit Dhekane

📜 License

This project is created for learning and educational purposes.