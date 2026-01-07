CREATE DATABASE IF NOT EXISTS articles;
use articles;

CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY , 
    firstName VARCHAR(100) NOT NULL , 
    lastName VARCHAR(100) NOT NULL ,
    email VARCHAR(150) NOT NULL UNIQUE ,
    password VARCHAR(255) NOT NULL , 
    role ENUM('reader','author','admin') 
);

CREATE TABLE IF NOT EXISTS articles(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content text NOT NULL ,
    authorId INT NOT NULL,
    numberLikes INT,
    categorie VARCHAR(100) NOT NULL,
    -- publishDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (authorId) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS comments(
    id INT AUTO_INCREMENT PRIMARY KEY,
    comment text NOT NULL ,
    articleId INT NOT NULL ,
    userId INT NOT NULL ,
    FOREIGN KEY (articleId) REFERENCES articles(id),
    FOREIGN KEY (userId) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    categorie VARCHAR(100) NOT NULL UNIQUE,
    description TEXT NOT NULL,
    admin INT NOT NULL ,
    FOREIGN KEY (admin) REFERENCES users(id)
);

-- admin INT NOT NULL UNIQUE , si on met unique là bas l'admin sera capable de créer une unique catégorie 