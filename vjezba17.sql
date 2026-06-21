CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country_name VARCHAR(100) NOT NULL
);

ALTER TABLE users
ADD country_id INT;

ALTER TABLE users
ADD CONSTRAINT fk_country
FOREIGN KEY (country_id)
REFERENCES countries(id);

INSERT INTO countries (country_name)
VALUES
('Croatia'),
('Germany'),
('Slovenia'),
('Austria');

UPDATE users
SET country_id = 1
WHERE id = 1;

SELECT
    users.id,
    users.name,
    users.lastname,
    countries.country_name
FROM users
INNER JOIN countries
ON users.country_id = countries.id;
