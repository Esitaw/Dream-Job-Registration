CREATE TABLE system_admin_registration (
    admin_id INT(50) AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    email varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    gender varchar(50) NOT NULL,
    age INT(2) NOT NULL,
    college_degree varchar(255) NOT NULL,
    skills TEXT NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)