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
    authorName VARCHAR(255) NOT NULL,
    numberLikes INT,
    categorie VARCHAR(100) NOT NULL
    -- publishDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    -- FOREIGN KEY (authorName) REFERENCES users(id)
);
-- on nom les constraints pour savoir l'erreur s'il survient , si tu fait un foreign key une constraint est généré avec un nom aléatoire .
CREATE TABLE IF NOT EXISTS comments(
    id INT AUTO_INCREMENT PRIMARY KEY,
    comment text NOT NULL ,
    articleId INT NOT NULL ,
    userId INT NOT NULL ,
    CONSTRAINT fk_article_comments FOREIGN KEY (articleId) REFERENCES articles(id) ON DELETE CASCADE,
    CONSTRAINT fk_user_comments FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    categorie VARCHAR(100) NOT NULL UNIQUE,
    description TEXT NOT NULL,
    admin INT NOT NULL ,
    CONSTRAINT fk_admin_categories FOREIGN KEY (admin) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS likes(
    articleId INT NOT NULL,
    userId INT NOT NULL ,
    CONSTRAINT fk_article_likes FOREIGN KEY(articleId) REFERENCES articles(id) ON DELETE CASCADE,
    CONSTRAINT fk_user_likes FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT user_like_per_article UNIQUE (articleId, userId)
);

-- admin INT NOT NULL UNIQUE , si on met unique là bas l'admin sera capable de créer une unique catégorie 