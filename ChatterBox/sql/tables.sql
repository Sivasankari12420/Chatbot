-- Create the 'posts' table
CREATE TABLE posts(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(1000),
    name VARCHAR(200),
    date TIMESTAMP
);

-- Insert a question and its answer into the 'posts' table
INSERT INTO posts (message, name, date) 
VALUES
('What is the capital of France?', 'Answer: The capital of France is Paris.', NOW());

-- Select query for 'posts'
SELECT SUBSTRING_INDEX(name, ':', -1) AS answer FROM posts WHERE message = 'What is the capital of France?';

-- Create the 'science' table
CREATE TABLE science(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(1000),
    name VARCHAR(200),
    date TIMESTAMP
);

-- Insert a question and its answer into the 'science' table
INSERT INTO science (message, name, date)
VALUES
('What is the chemical symbol for water?', 'Answer: The chemical symbol for water is H2O.', NOW());

-- Select query for 'science'
SELECT SUBSTRING_INDEX(name, ':', -1) AS answer FROM science WHERE message = 'What is the chemical symbol for water?';

-- Create the 'medicine' table
CREATE TABLE medicine(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(1000),
    name VARCHAR(200),
    date TIMESTAMP
);

-- Insert a question and its answer into the 'medicine' table
INSERT INTO medicine (message, name, date)
VALUES
('What is the normal human body temperature?', 'Answer: The normal human body temperature is 98.6°F (37°C).', NOW());

-- Select query for 'medicine'
SELECT SUBSTRING_INDEX(name, ':', -1) AS answer FROM medicine WHERE message = 'What is the normal human body temperature?';

-- Create the 'other' table
CREATE TABLE other(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(1000),
    name VARCHAR(200),
    date TIMESTAMP
);

-- Insert a question and its answer into the 'other' table
INSERT INTO other (message, name, date)
VALUES
('What is the most spoken language in the world?', 'Answer: The most spoken language in the world is English.', NOW());

-- Select query for 'other'
SELECT SUBSTRING_INDEX(name, ':', -1) AS answer FROM other WHERE message = 'What is the most spoken language in the world?';

-- Create the 'art' table
CREATE TABLE art(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(1000),
    name VARCHAR(200),
    date TIMESTAMP
);

-- Insert a question and its answer into the 'art' table
INSERT INTO art (message, name, date)
VALUES
('Who painted the Sistine Chapel ceiling?', 'Answer: Michelangelo painted the Sistine Chapel ceiling.', NOW());

-- Select query for 'art'
SELECT SUBSTRING_INDEX(name, ':', -1) AS answer FROM art WHERE message = 'Who painted the Sistine Chapel ceiling?';

-- Create the 'finance' table
CREATE TABLE finance(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(1000),
    name VARCHAR(200),
    date TIMESTAMP
);

-- Insert a question and its answer into the 'finance' table
INSERT INTO finance (message, name, date)
VALUES
('What is the definition of GDP?', 'Answer: GDP stands for Gross Domestic Product and measures a country’s economic output.', NOW());

-- Select query for 'finance'
SELECT SUBSTRING_INDEX(name, ':', -1) AS answer FROM finance WHERE message = 'What is the definition of GDP?';
