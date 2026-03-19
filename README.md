# ITEC RPL Portal

A Recognition of Prior Learning (RPL) portal for ITEC (ITE Counsel), built with vanilla PHP. This application provides a streamlined interface for managing RPL applications, document submissions, and assessment workflows.

## Tech Stack

- **PHP** (vanilla, no framework)
- **HTML/CSS/JavaScript** for the frontend
- **Apache** with .htaccess URL rewriting

## Features

- RPL application submission and tracking
- Document upload and management
- Assessment workflow processing
- User authentication and role management
- Configurable application settings
- Image and asset management

## Getting Started

### Prerequisites

- PHP >= 7.0
- Apache web server with mod_rewrite enabled
- MySQL or compatible database

### Installation

```bash
# Clone the repository
git clone https://github.com/mhmalvi/itec-rpl-portal.git
cd itec-rpl-portal

# Configure the application
# Edit config.php with your database credentials and settings

# Set up the database
# Import the database schema (if provided) or configure as needed

# Ensure proper file permissions
chmod -R 755 assets/ images/
```

### Configuration

Edit `config.php` to set up:
- Database connection parameters
- Application-specific settings
- File upload paths

### Development

Deploy to a local Apache server (e.g., XAMPP, WAMP, or MAMP) and access via `http://localhost/itec-rpl-portal/`.

## Project Structure

```
itec-rpl-portal/
├── assets/         # CSS, JavaScript, and other static assets
├── images/         # Uploaded and static images
├── config.php      # Application configuration
├── index.php       # Main entry point and application logic
└── .htaccess       # Apache URL rewrite rules
```

## License

This project is private.