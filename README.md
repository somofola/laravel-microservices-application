# Laravel Microservices Application

This repository contains a simple microservices application developed using Laravel, consisting of two services: `users-service` and `notifications-service`. These services communicate via a message broker to achieve decoupled communication.

## Developer Information

- **Developer Name**: Shola Omofola
- **Email**: somofola@gmail.com
- **Version**: 1.0.1

## Table of Contents

- [Setup](#setup)
  - [Prerequisites](#prerequisites)
  - [Clone the Repository](#clone-the-repository)
  - [Build and Run Docker Containers](#build-and-run-docker-containers)
  - [Access Services](#access-services)
- [Running Tests](#running-tests)
- [Architecture Overview](#architecture-overview)
- [Contributing](#contributing)

## Setup

### Prerequisites

Before getting started, make sure you have the following tools installed:

- Docker
- Composer

### Clone the Repository

```bash
git clone https://github.com/somofola/laravel-microservices-application.git
cd laravel-microservices-application
docker-compose up --build

### Access Services
Users Service: http://localhost:8001
Notifications Service: http://localhost:8002

## Running Tests
Run tests for each service to ensure the application's functionality:

### Users Service
```bash
docker-compose exec users-service vendor/bin/phpunit

### Notifications Service
```bash
docker-compose exec notifications-service vendor/bin/phpunit


## Architecture Overview
The application follows a microservices architecture where the users-service handles user data submission and triggers an event upon successful data storage. The notifications-service consumes this event, saving the data to a log file.

### Users Service
Endpoint: POST /users
Request Body: {"email", "firstName", "lastName"}

### Notifications Service
Event Handling: user.created
Log File: storage/logs/notifications.log

