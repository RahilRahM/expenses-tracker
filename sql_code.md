CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(150) NOT NULL
);



CREATE TABLE BUDGET(
    budget_id int NOT NULL,
    category_id int NOT NULL,
    amount int,
    budget_date DATE,
    CONSTRAINT PK_Budget PRIMARY KEY(budget_id),
    CONSTRAINT FK_Budget_Category FOREIGN KEY(category_id) REFERENCES Category(category_id) ON DELETE CASCADE
);



CREATE TABLE Category(
	category_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
	category_name varchar(255),
	CONSTRAINT PK_Category PRIMARY KEY(category_id) ,
	CONSTRAINT FK_Category_User FOREIGN KEY(id) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE Expense(
	expense_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
	category_id int NOT NULL,
	expense_name varchar(255),
	expense_date date,
	amount int NOT NULL,
	notes varchar(255),

	CONSTRAINT PK_Expense PRIMARY KEY(expense_id),
	CONSTRAINT FK_Expense_User FOREIGN KEY(id) REFERENCES users(id) ON DELETE CASCADE,
	CONSTRAINT FK_Expense_Category FOREIGN KEY(category_id) REFERENCES Category(category_id) ON DELETE CASCADE

);
