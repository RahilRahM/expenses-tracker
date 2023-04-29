
CREATE TABLE Expense(
	expense_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
	category_id int NOT NULL,
	expense_name varchar(255),
	expense_date date,
	amount int NOT NULL,
	notes varchar2(8168),

	CONSTRAINT PK_Expense PRIMARY KEY(expense_id),
	CONSTRAINT FK_Expense_User FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE,
	CONSTRAINT FK_Expense_Category FOREIGN KEY(category_id) REFERENCES Category(category_id) ON DELETE CASCADE

);
