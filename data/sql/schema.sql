CREATE TABLE authors (id INT AUTO_INCREMENT, name VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE books (id INT AUTO_INCREMENT, title VARCHAR(50) NOT NULL, author_id INT NOT NULL, category_id INT NOT NULL, reading_status VARCHAR(6) DEFAULT 'Unread' NOT NULL, rating INT DEFAULT 1 NOT NULL, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX author_id_idx (author_id), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE categories (id INT AUTO_INCREMENT, name VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE books ADD CONSTRAINT books_category_id_categories_id FOREIGN KEY (category_id) REFERENCES categories(id);
ALTER TABLE books ADD CONSTRAINT books_author_id_authors_id FOREIGN KEY (author_id) REFERENCES authors(id);
