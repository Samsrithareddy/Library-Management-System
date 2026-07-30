CREATE DATABASE IF NOT EXISTS library_db;
USE library_db;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    author VARCHAR(150) NOT NULL,
    category VARCHAR(100) NOT NULL,
    quantity INT NOT NULL
);

CREATE TABLE borrow_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_title VARCHAR(200) NOT NULL,
    borrower_name VARCHAR(100) NOT NULL,
    borrow_date DATE NOT NULL
);

INSERT INTO books (title, author, category, quantity) VALUES
('Java Programming', 'James Gosling', 'Programming', 5),
('Python Basics', 'Guido van Rossum', 'Programming', 4),
('Database Management System', 'Raghu Ramakrishnan', 'Database', 3),
('Operating Systems', 'Galvin', 'Computer Science', 2),
('Computer Networks', 'Andrew S. Tanenbaum', 'Networking', 6);
