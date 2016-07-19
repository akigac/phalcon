drop table test.user;

CREATE TABLE test.user
(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255),
  created_datetime TIMESTAMP NOT NULL DEFAULT current_timestamp,
  created_user VARCHAR(255) NOT NULL DEFAULT 'system',
  updated_datetime TIMESTAMP NOT NULL DEFAULT current_timestamp,
  updated_user VARCHAR(255) NOT NULL DEFAULT 'system'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

insert into test.user (name,password) values('123', 'bLXidBPaUZSe7hcihw8NSsCN1xdg4f7edBvEMWIB0/Y5xMUmeP8xs1ogNeFCnPIyUbcjwP79Ok4miZOgrbNKCw==');