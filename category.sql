
CREATE TABLE Category(
	category_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
	category_name varchar(255),
	CONSTRAINT PK_Category PRIMARY KEY(category_id) ,
	CONSTRAINT FK_Category_User FOREIGN KEY(id) REFERENCES users(id) ON DELETE CASCADE
);
