CREATE TABLE users 
(
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  name VARCHAR(255) NOT NULL, 
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  remember_token VARCHAR(255),
  remember_identifier VARCHAR(255)
);

INSERT INTO users (id, name, email, password, remember_token, remember_identifier)
VALUES (1, "Israel Morales", "imoralescs@gmail.com", "$2a$12$jWz5man/w84aqb5Tu7I7JuP8.CSo8VNN/g7spotrfD7EGIgJkA0G.", null, null);
