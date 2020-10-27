-- delete the database if it already exists
DROP DATABASE banque_php;

-- create a database 
CREATE DATABASE banque_php DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE banque_php;

-- delete the user if it is already present in the database
DROP USER IF EXISTS 'banquePHP'@'localhost';

-- create a user account with management rights on the database
CREATE USER 'banquePHP'@'localhost';

-- give rights to the created user
GRANT ALL PRIVILEGES ON banque_php.* To 'banquePHP'@'localhost' IDENTIFIED BY 'banquePHP';

CREATE TABLE User
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    firstname VARCHAR (50) NOT NULL,
    lastname VARCHAR (50) NOT NULL,
    birth_date DATE NOT NULL,
    email VARCHAR (50) NOT NULL UNIQUE,
    password VARCHAR (255) NOT NULL,
    country VARCHAR (50) NOT NULL,
    adress VARCHAR (50) NOT NULL,
    postal_code CHAR (10) NOT NULL,
    city VARCHAR (50) NOT NULL,
    PRIMARY KEY (id)
)
ENGINE=InnoDB;
-- creation of data rows in the table
INSERT INTO User (firstname, lastname, birth_date, email, password, country, adress, postal_code, city)
VALUES ('Lerouxel', 'Aurelie',"1981-08-19", 'aurelielerouxel@cacraint.fr', '$2y$10$EXcHoT0T2gEXVbN2pIf/NeGAVGIHzq/dgrgFJk4zKP.EfUKLVzbBO', 'france', '9 rue du buisson', 27180, 'st sebastien du mordor'),
    ('Penneflamme', 'Katty', "1978-11-07", 'tunes@pas.fr', '$2y$10$UC9Zmt.gpNALxoEvfD3ZDOj0J6HJqzdJ1isxwY0TfReemeCd0w4ka', 'france', '2 notre', 01010, 'galaxie');

CREATE TABLE Account
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_type VARCHAR (50) NOT NULL,
    account_number VARCHAR (30) NOT NULL,
    amount DECIMAL(11,2) NOT NULL,
    opening_date DATE NOT NULL,
    user_id INT UNSIGNED, 
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;
INSERT INTO Account (account_type, user_id, account_number, amount, opening_date)
VALUES ('livret a', 1, '0256kih2487', -435.25, '2009/10/02'),
    ('compte courant', 2, '2489fsf5487', 147.58, '2006/08/19'),
    ('compte courant', 1, '1464lol7458', 1435.25, '2001/04/24');

CREATE TABLE Operation
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    operation_type VARCHAR (50) NOT NULL,
    account_id INT UNSIGNED,
    operation_amount DECIMAL(11,2) NOT NULL,
    operation_date TIMESTAMP NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES Account(id)
)
ENGINE=InnoDB;
INSERT INTO Operation (operation_type, account_id, operation_amount, operation_date)
VALUES ('totol essence', 2, -65.25, NOW()),
    ('paye octobre', 2, 2596.36, NOW()),
    ('leclerc', 1, -40, NOW());
