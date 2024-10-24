DELIMITER //
CREATE PROCEDURE AddUser(
    IN p_name VARCHAR(100),
    IN p_password VARCHAR(255),
    IN p_email VARCHAR(100)
)
BEGIN
    INSERT INTO users (name, password, email)
    VALUES (p_name, p_password, p_email);
END //
DELIMITER ;
