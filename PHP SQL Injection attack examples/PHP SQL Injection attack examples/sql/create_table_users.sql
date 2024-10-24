CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
);

-- Inserting users into the Users table
INSERT INTO Users (name, password, email) VALUES
('John Doe', 'password123', 'john.doe@banksite.com'),
('Jane Smith', 'mypassword456', 'jane.smith@banksite.com'),
('Michael Brown', 'securepass789', 'michael.brown@banksite.com'),
('Emily Davis', 'passw0rd321', 'emily.davis@banksite.com'),
('David Wilson', 'myp@ssw0rd', 'david.wilson@banksite.com'),
('Emma Johnson', 'letmein987', 'emma.johnson@banksite.com'),
('Chris Taylor', 'chrisT@123', 'chris.taylor@banksite.com'),
('Olivia Martinez', 'oliviaM#456', 'olivia.martinez@banksite.com'),
('Daniel White', 'danielW789!', 'daniel.white@banksite.com'),
('Sophia Harris', 'sophiaH123$', 'sophia.harris@banksite.com'),
('Admin', 'admin123$', 'admin@banksite.com');
