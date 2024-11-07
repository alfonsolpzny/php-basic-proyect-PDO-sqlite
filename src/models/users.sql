CREATE TABLE users(
  id int(5) auto_increment NOT NULL UNIQUE,
  username varchar(35) NOT NULL UNIQUE,
  password varchar(255) NOT NULL,
  user_type varchar(20) NOT NULL DEFAULT "user",
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=UTF8_UNICODE_CI;