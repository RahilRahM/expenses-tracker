CREATE TABLE BUDGET(
    budget_id int NOT NULL AUTO_INCREMENT,
    category_id int NOT NULL,
    amount int,
    budget_date DATE,
    CONSTRAINT PK_Budget PRIMARY KEY(budget_id),
    CONSTRAINT FK_Budget_Category FOREIGN KEY(category_id) REFERENCES Category(category_id) ON DELETE CASCADE
);
