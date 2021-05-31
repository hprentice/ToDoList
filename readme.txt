goto /controllers/conn.php to configure a connection to your database.

Create the database 'todo' and create the following table

CREATE TABLE tasks (
	id varchar(255) NOT NULL,
	task varchar(255)
);