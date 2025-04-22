# Smart Student Portal

A modern PHP-based student portal application that provides students with access to their academic information, course management, document requests, and more.

## Features

- User authentication and authorization
- Dashboard with key statistics and notifications
- Profile management
- Course management
- Document request system
- Responsive design for all devices
- Secure database integration

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/student-portal.git
cd student-portal
```

2. Create a MySQL database:
```sql
CREATE DATABASE student_portal;
```

3. Import the database schema:
```bash
mysql -u your_username -p student_portal < database/schema.sql
```

4. Configure the database connection:
Edit `includes/config.php` and update the database credentials:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'student_portal');
```

5. Set up the web server:
- For Apache: Place the files in your web server's document root
- For Nginx: Configure your server block to point to the project directory

6. Set proper permissions:
```bash
chmod -R 755 student-portal
chmod -R 777 student-portal/uploads
```

## Project Structure

```
student-portal/
├── index.php             # Main entry point
├── includes/             # PHP includes
│   ├── config.php        # Database configuration
│   ├── functions.php     # Helper functions
│   ├── header.php        # Header template
│   └── footer.php        # Footer template
├── assets/               # Static assets
│   ├── css/              # Stylesheets
│   └── js/               # JavaScript files
├── pages/                # Page templates
│   ├── dashboard.php     # Dashboard page
│   ├── profile.php       # Profile page
│   └── courses.php       # Courses page
└── uploads/              # File uploads directory
```

## Security Features

- Password hashing using PHP's password_hash()
- Prepared statements for all database queries
- Input sanitization and validation
- CSRF protection
- Session management
- Secure file upload handling

## Usage

1. Access the application through your web browser
2. Login with your credentials
3. Navigate through the portal using the sidebar menu
4. Manage your profile, courses, and documents

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For support, email support@example.com or create an issue in the repository. 