<?php
include 'top.php';
?>

<main>
    <pre>

-- Products Table
CREATE TABLE products (
    id INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    category VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    PRIMARY KEY (id)
);

-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL,
    PRIMARY KEY (id)
);

-- Contact Submissions Table
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

-- Orders Table
CREATE TABLE orders (
    id INT AUTO_INCREMENT,
    user_id INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    status ENUM('pending', 'completed') NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Order Details Table
CREATE TABLE order_details (
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Inserting into products
INSERT INTO products (name, description, price, category, image) VALUES
('Product1', 'Description for Product1', 19.99, 'Category1', 'image1.jpg'),
('Product2', 'Description for Product2', 29.99, 'Category2', 'image2.jpg'),
('Product3', 'Description for Product3', 39.99, 'Category3', 'image3.jpg');

-- Inserting into users
INSERT INTO users (username, password, email, role) VALUES
('user1', 'password1', 'user1@example.com', 'user'),
('admin1', 'password2', 'admin1@example.com', 'admin');

-- Inserting into contact_submissions
INSERT INTO contact_submissions (name, email, subject, message) VALUES
('John Doe', 'john.doe@example.com', 'Subject1', 'This is a test message from John Doe.'),
('Jane Smith', 'jane.smith@example.com', 'Subject2', 'This is another test message from Jane Smith.');

-- Inserting into orders
INSERT INTO orders (user_id, total_price, status) VALUES
(1, 49.98, 'pending'),
(2, 19.99, 'completed');

-- Inserting into order_details
INSERT INTO order_details (order_id, product_id, quantity, price) VALUES
(1, 1, 2, 39.98),
(2, 2, 1, 19.99);

</pre>
</main>

<?php
include 'footer.php';
?>
