DROP TABLE IF EXISTS 'users';

CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    password TEXT NOT NULL,
	user_type	varchar(20) NOT NULL DEFAULT user
);