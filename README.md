# Cyber Cafe Management System – DevOps Automation Project

A containerized Cyber Cafe Management System deployed using Docker, Docker Compose, and Jenkins CI/CD automation.

This project demonstrates end-to-end DevOps practices including containerization, automated build & deployment pipelines, GitHub webhook integration, persistent database storage, and multi-container orchestration.

---

# Tech Stack

- Docker
- Docker Compose
- Jenkins
- GitHub Webhooks
- PHP 8.2
- Apache
- MySQL 8
- Linux

---

# Features

- Multi-container application deployment
- Dockerized PHP-Apache application
- MySQL database container with persistent storage
- Automated CI/CD pipeline using Jenkins
- GitHub webhook integration for auto-triggered builds
- Docker image push to Docker Hub
- Environment variable configuration using `.env`
- Container health checks and dependency management
- Automated deployment using Docker Compose

---

# Project Architecture

```text
Developer Pushes Code
        │
        ▼
GitHub Repository
        │
        ▼
GitHub Webhook
        │
        ▼
Jenkins Pipeline
        │
 ┌──────┴──────┐
 ▼             ▼
Docker Build   Docker Push
        │
        ▼
Docker Compose Deployment
        │
 ┌──────┴──────┐
 ▼             ▼
Web Container   MySQL Container
```

---
---

# Dockerfile

- Uses `webdevops/php-apache:8.2-alpine`
- Installs required PHP extensions:
  - mysqli
  - pdo
  - pdo_mysql
- Copies application source code into container

---

# Docker Compose Setup

Services included:

## 1. Database Service

- MySQL 8 container
- Persistent volume storage
- Automatic database initialization
- Health checks enabled

## 2. Web Application Service

- PHP-Apache application container
- Connected through custom Docker network
- Depends on healthy database container
- Exposed on port `8083`

---

# Jenkins CI/CD Pipeline

The Jenkins pipeline automates:

1. Source code checkout from GitHub
2. Docker image build
3. Docker image push to Docker Hub
4. Application deployment using Docker Compose
5. Workspace cleanup

---

# GitHub Webhook Integration

GitHub Webhooks are configured to automatically trigger Jenkins builds whenever code is pushed to the repository.

This enables continuous integration and continuous deployment (CI/CD).

---

# Environment Variables

Create a `.env` file:

```env
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=ccms

DB_HOST=db
DB_USER=root
DB_PASSWORD=root
DB_DATABASE=ccms
```

---

# Running the Project

## Clone Repository

```bash
git clone https://github.com/your-username/Cyber-Cafe-Management.git
cd Cyber-Cafe-Management
```

---

## Start Containers

```bash
docker compose up -d
```

---

## Stop Containers

```bash
docker compose down
```

---

# Access Application

Application URL:

```text
http://localhost:8083
```

---

# Docker Hub Image

```text
docker pull dpranit/ccms-app:latest
```

---

# Jenkins Pipeline Stages

- Greetings
- Code Checkout
- Docker Build
- Docker Push
- Deployment
- Workspace Cleanup

---

# DevOps Concepts Used

- CI/CD Automation
- Containerization
- Docker Networking
- Persistent Volumes
- Infrastructure Automation
- Environment Management
- Automated Deployment
- Health Checks
- GitHub Webhooks
- Jenkins Shared Libraries

---

# Future Improvements

- Add Nginx reverse proxy
- Implement Kubernetes deployment
- Add monitoring with Prometheus & Grafana
- Add SSL using Let's Encrypt
- Implement automated testing stage
- Add Terraform infrastructure provisioning

---

# Author

Pranit Dhekane

GitHub: https://github.com/pranitdhekane
