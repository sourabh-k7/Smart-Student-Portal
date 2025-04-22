-- Create the database
CREATE DATABASE IF NOT EXISTS student_portal;
USE student_portal;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    dob DATE,
    major VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Document requests
CREATE TABLE IF NOT EXISTS document_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    document_type VARCHAR(50) NOT NULL,
    purpose TEXT NOT NULL,
    delivery_method VARCHAR(50) NOT NULL,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Courses
CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(20) NOT NULL UNIQUE,
    name VARCHAR(100) NOT NULL,
    instructor VARCHAR(100) NOT NULL,
    schedule VARCHAR(100) NOT NULL,
    credits INT NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- User courses
CREATE TABLE IF NOT EXISTS user_courses (
    user_id INT NOT NULL,
    course_id INT NOT NULL,
    grade VARCHAR(5),
    status ENUM('enrolled', 'completed', 'dropped') DEFAULT 'enrolled',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (user_id, course_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

-- Notifications
CREATE TABLE IF NOT EXISTS notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    type ENUM('info', 'warning', 'success', 'danger') DEFAULT 'info',
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Messages
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (receiver_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Events
CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    start_date DATETIME NOT NULL,
    end_date DATETIME NOT NULL,
    location VARCHAR(200),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- User events
CREATE TABLE IF NOT EXISTS user_events (
    user_id INT NOT NULL,
    event_id INT NOT NULL,
    status ENUM('attending', 'not_attending', 'maybe') DEFAULT 'attending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (user_id, event_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE
);

-- Insert sample data
INSERT INTO users (name, email, password, phone, address, dob, major) VALUES
('John Doe', 'john@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1234567890', '123 Main St, City', '1995-05-15', 'cs'),
('Jane Smith', 'jane@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0987654321', '456 Oak Ave, Town', '1996-08-20', 'eng');

INSERT INTO courses (code, name, instructor, schedule, credits, description) VALUES
('CS101', 'Introduction to Computer Science', 'Dr. Smith', 'Mon/Wed 10:00-11:30', 3, 'Basic concepts of computer science'),
('MATH201', 'Calculus II', 'Prof. Johnson', 'Tue/Thu 13:00-14:30', 4, 'Advanced calculus topics'),
('ENG101', 'English Composition', 'Dr. Williams', 'Mon/Wed 14:00-15:30', 3, 'Writing and composition skills');

INSERT INTO user_courses (user_id, course_id, grade, status) VALUES
(1, 1, 'A', 'completed'),
(1, 2, 'B+', 'enrolled'),
(2, 1, 'A-', 'completed'),
(2, 3, 'B', 'enrolled');

INSERT INTO notifications (user_id, title, message, type) VALUES
(1, 'Grade Posted', 'Your grade for CS101 has been posted', 'info'),
(1, 'Document Approved', 'Your transcript request has been approved', 'success'),
(2, 'Course Registration', 'Course registration deadline approaching', 'warning');

INSERT INTO events (title, description, start_date, end_date, location) VALUES
('Orientation Day', 'Welcome new students', '2024-01-15 09:00:00', '2024-01-15 16:00:00', 'Main Auditorium'),
('Career Fair', 'Meet potential employers', '2024-02-20 10:00:00', '2024-02-20 16:00:00', 'Student Center'); 