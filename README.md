📰 News Site

A PHP-based News Site that allows displaying categorized news articles with user data stored in a MySQL database.
The project is containerized using Docker and version-controlled using GitHub.

🛠 Tech Stack

Backend: PHP 8.2

Frontend: HTML, CSS, JavaScript

Database: MySQL 8.0

Web Server: Apache

Containerization: Docker & Docker Compose

Version Control: Git & GitHub

📁 Project Structure (Simplified)
Projectdb/
│── Dockerfile
│── docker-compose.yml
│── project.sql
│── connectionondb.php
│── index.php
│── assets/
│── uploads/
│── README.md
│── .gitignore

⚙️ Configuration Notes

Web Port: 8080

Database Port: 3306

Database Name: project

MySQL User: root

MySQL Password: root

Database Import: Automatically loaded from project.sql

⚠️ Important:
The database host inside Docker is db, not localhost.

🚀 How to Build and Run the Project
1️⃣ Prerequisites

Make sure you have installed:

Docker Desktop

Git

2️⃣ Build and Start Containers

Open PowerShell / Command Prompt inside the project folder and run:

docker-compose build
docker-compose up


Docker will:

Build the PHP–Apache image

Start MySQL

Import project.sql automatically

3️⃣ Access the Application

Open your browser and go to:

http://localhost:8080


✅ The News Site UI should load
✅ Data should appear from the database

🧪 How to Test the Project

Open http://localhost:8080

Browse news categories

Verify news items are displayed

Confirm images and styles load correctly

If database data appears → Project is working correctly

🛑 How to Stop Containers and Clean Up
Stop containers:
docker-compose down

Stop and remove volumes (full cleanup):
docker-compose down -v