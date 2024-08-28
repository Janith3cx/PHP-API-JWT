# PHP API with JWT Authentication
##Overview

This project is a simple PHP-based API that uses JWT (JSON Web Token) for authentication. It allows secure communication between a client and server by ensuring that only authorized users can access certain endpoints.

##Features

JWT Authentication: Secure API endpoints using JWT tokens.
PDO for Database Connection: Efficiently connect to a MySQL database using PDO.
JSON Responses: API responses are formatted as JSON for easy integration with front-end applications.
Error Handling: Proper error handling for database connections and JWT validation.

##Installation

Clone the repository:

git clone https://github.com/janith3cx/PHP-API-JWT.git
cd PHP-API-JWT
Install dependencies: If you are using Composer, install dependencies by running:


##composer install

Configure the environment: Create a .env file based on the .env.example file and configure your database settings, secret key, and other environment variables.

##Run the API: You can start the API server using the built-in PHP server:

php -S localhost:8000 
