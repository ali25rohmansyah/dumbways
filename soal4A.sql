-- membuat table user
CREATE TABLE users( id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20), email VARCHAR(225) NOT NULL);

-- membuat table news
CREATE TABLE news ( id INTEGER AUTO_INCREMENT PRIMARY KEY , title VARCHAR(20) NOT NULL , image VARCHAR(255) NOT NULL , deskripsi VARCHAR(50) NOT NULL , creat_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , User_id INTEGER, FOREIGN KEY (User_id) REFERENCES users(id));

-- menampilkan semua berita dengan user/penulis
select * FROM news INNER JOIN users ON news.User_id = users.id;

-- menampilkan berita sesuai user yang membuat
SELECT * FROM news WHERE User_id = 1;

-- menampilkan detail berita
SELECT * FROM news WHERE id = 1;

-- menambah data berita
INSERT INTO news (title, image, deskripsi) VALUES ('judul 1', 'gambar2.jpg', 'ini adalah berita pertama');

-- menambah users
INSERT INTO users (name, email) VALUES ('Ali Rohmansyah', 'ali25rohmansyah@gmail.com');



