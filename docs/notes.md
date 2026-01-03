 Docker Issues & Solutions
1. Database Connection Problem (Main Issue)

Problem:
While running the project inside Docker, the application was unable to connect to the MySQL database. The website either showed database connection errors or did not load data.

Cause:
Inside Docker containers, localhost does not refer to the MySQL service. The database runs in a separate container, so using localhost caused the connection to fail.

Solution:
I fixed this by changing the database host in the PHP connection file from:

"localhost"


to:

"db"


This works because db is the service name defined in docker-compose.yml, and Docker automatically handles internal networking between containers.

2. Forbidden (403) Error When Accessing the Site

Problem:
At one point, the project showed a 403 Forbidden error when accessed through the browser.

Cause:
Docker with Apache looks for a default entry file (usually index.php) inside /var/www/html.
If the main page is missing, named differently, or not properly included, Apache blocks access.

Solution:
I fixed this by ensuring that the main page of my project is accessible through index.php, which is the default file Apache checks when loading a website.

This allowed Docker to correctly load the project UI.

3. Accessing the Project in Docker

Problem:
Docker did not initially know which file should be loaded as the main entry point.

Solution:
I made sure the project’s main page is linked through index.php, allowing Docker and Apache to load the website correctly when accessing:

http://localhost:8080



 Lessons Learned (Docker & GitHub)

Docker containers do not share the same environment as the local machine, so configuration values like database hosts must be adjusted.

Docker Compose makes it much easier to run multiple services (PHP + MySQL) together.

Using clear documentation (README.md) is just as important as writing code.

GitHub is not just for storing code — it is a way to present a complete, runnable project.

Writing commits and organizing files properly makes the project easier to understand and grade.