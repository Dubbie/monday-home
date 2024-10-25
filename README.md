# Monday Home Page

This repository contains the source code for the **Monday** company homepage, built with Laravel, Vue, and Inertia.js. It includes fundamental pages like "About Us," "Contact," and services information, as well as forms for insurance quote requests. Below you'll find details on setting up the development environment, deploying to production, and the tools used in this project.

## Features

-   Built with Laravel and the Breeze starter kit (Inertia.js + Vue integration)
-   Responsive UI
-   Insurance quote request forms
-   User-friendly navigation and design for accessibility

## Prerequisites

-   **Docker** and **DDEV**: To standardize local development
-   **Node.js** and **npm**: For frontend dependency management and builds
-   **Composer**: For PHP dependency management
-   **Ploi**: For deployment (see deployment instructions below)

## Getting Started

### Clone the Repository

```bash
git clone https://github.com/dubbie/monday-homepage.git
cd monday-homepage
```

### Set Up Environment Variables

Duplicate the `.env.example` file, name it `.env`, and adjust the settings as necessary. Don't forget to set the recipient.

```bash
cp .env.example .env
```

### Install Dependencies

Ensure that Composer and npm dependencies are installed.

```bash
composer install
npm install
```

## Development Environment with DDEV

This project uses [DDEV](https://ddev.readthedocs.io/en/stable/) for containerized local development, providing a consistent and isolated setup.

1. **Start DDEV**: Make sure Docker is running, then start DDEV.

    ```bash
    ddev start
    ```

2. **Install Composer Packages**: After setting up DDEV, install the composer packages.

    ```bash
    ddev composer install
    ```

3. **Install NPM Packages**: After the composer packages are installed, install the NPM packages.

    ```bash
    ddev npm install
    ```

4. **Run Migrations**:
   After the packages are installed, run the migrations to set up the database.

    ```bash
    ddev artisan migrate
    ```

5. **Run the Dev Server**:
   To start the development server and view your changes in real-time:
    ```bash
    ddev npm run dev
    ```

Access the application at `http://monday-home.ddev.site` (or as configured in your DDEV setup). You may need to run additional commands such as `ddev artisan key:generate` when first starting the application.

### Helpful DDEV Commands

-   **Stop DDEV**: `ddev stop`
-   **Access the Laravel Artisan CLI**: `ddev artisan`

## Deployment

For deployment, this project uses **Ploi** as a server management tool, although the deployment steps outlined here are general and can be adapted to other environments.

### Deployment Pipeline (Generalized)

1. **Set up the Server**:

    - Ensure PHP, Node.js, and Composer are installed.
    - Set up a database and update the `.env` file with the production database credentials.

2. **Clone the Repository**:
   Clone the project to the server.

    ```bash
    git clone https://github.com/dubbie/monday-homepage.git
    cd monday-homepage
    ```

3. **Install Production Dependencies**:
   Run Composer and npm installations in production mode.

    ```bash
    composer install --optimize-autoloader --no-dev
    npm ci --only=production
    npm run build
    ```

4. **Configure Environment**:

    - Copy `.env.example` to `.env` and update environment variables, including database credentials and any other production-specific settings.

5. **Run Migrations**:
   Apply database migrations to set up tables in the production database.

    ```bash
    php artisan migrate --force
    ```

6. **Optimize for Production**:
   Optimize application settings for improved performance.

    ```bash
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    ```

7. **Set Up a Deployment Workflow** (optional but recommended):
   Use a CI/CD tool or a Ploi deployment hook to automate steps like pulling changes from the main branch, installing dependencies, and clearing the cache.

8. **Configure Web Server and SSL**:
    - Use Nginx/Apache as a web server, and configure SSL (Ploi provides automatic SSL via Let's Encrypt).
