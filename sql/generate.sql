CREATE TABLE comment (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	author VARCHAR(255) NOT NULL,
	datePost DATETIME NOT NULL,
	content  VARCHAR(512) NOT NULL
);


INSERT INTO comment (id, author, datePost, content)
	VALUES
		(1, 'Jean-Jack', '2018-05-18 12:30:30', 'Ce site est magnifique et très instructif. Merci à vous ! :)');
		
