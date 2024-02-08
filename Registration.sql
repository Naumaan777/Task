CREATE SCHEMA `dtbs`;

CREATE TABLE `dtbs`.`Registration`(
    ID INT AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL UNIQUE,
    DateOfBirth DATE,
    PRIMARY KEY (ID)
);

INSERT INTO `dtbs`.`Registration`(Name, Email, DateOfBirth)
VALUES 
('alexa', 'alexa.tr@gmail.com', '2000-07-01'),
('jaya', 'jaya@gmail.com', '1990-05-15'),
('akshar', 'akshar@gmail.com', '1992-08-20'),
('mukesh', 'mukesh@gmail.com', '1985-11-30'),
('alina', 'alina@gmail.com', '2007-05-25'),
('khushi', 'khushi@gmail.com', '1999-08-10'),
('pawan', 'pawan@gmail.com', '2014-21-05');



-- Retrieve all records
SELECT * FROM dtbs.Registration;

-- Retrieve a specific record
SELECT * FROM dtbs.Registration WHERE ID = 1;


-- Update an existing record:

UPDATE dtbs.Registration
SET Name = 'huso', Email = 'huso@outlook.com'
WHERE ID = 1;


-- Delete - Delete a record:

DELETE FROM dtbs.Registration WHERE ID = 1;


SELECT * FROM dtbs.Registration;