# PHP Basic Calculator

This is a simple web-based calculator built using PHP and Docker. It supports basic arithmetic operations like addition, subtraction, multiplication, and division.

## Features

- **Addition**: Adds two numbers.
- **Subtraction**: Subtracts one number from another.
- **Multiplication**: Multiplies two numbers.
- **Division**: Divides one number by another (with a check for division by zero).

## Requirements

- PHP 7.4 or higher
- Apache server
- Docker (for easy containerization)

## Getting Started

### 1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/php-basic-calculator.git
    cd php-basic-calculator
    ```
### 2. Build and Run the Docker container:

Make sure you have Docker installed, then run the following commands to build and run the container:
    ```bash
    docker build -t php-basic-calculator .
    docker run -p 8080:80 php-basic-calculator
    ```
### 3. Access the application:
Once the container is running, open your browser and go to http://localhost:8080 to access the calculator.

## Files
### Dockerfile
    ```bash
    # Use the official PHP image with Apache
    FROM php:7.4-apache

    # Copy the application files into the container
    COPY . /var/www/html/

    # Expose port 80 to access the application
    EXPOSE 80
    ```
The Dockerfile sets up a container with PHP and Apache, copies the application files, and exposes port 80 for web access.

## Usage
Open the page: Once the application is running, open it in your web browser.
Enter the numbers and select the operation: Enter two numbers and choose the operation you want to perform.
Submit the form: Click the "Calculate" button to see the result.

## License
    ```bash
    This README file provides an overview of the project, installation instructions, and details about the `Dockerfile` and `index.php` files. It also explains the functionality of the PHP calculator and how to use it.
    ```