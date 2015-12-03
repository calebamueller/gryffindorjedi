DROP SCHEMA IF EXISTS slate CASCADE;

CREATE SCHEMA slate;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
  username varchar(75) PRIMARY KEY,
  password_hash varchar(75) NOT NULL,
  pwsalt varchar(75) NOT NULL,
  salt integer NOT NULL,
  class1 integer(11),
  class2 integer(11),
  class3 integer(11),
  class4 integer(11),
  class5 integer(11),
  class6 integer(11),
  professor tinyint(1),
  foreign key(class1) references classes(class_id) ON DELETE CASCADE,
  foreign key(class2) references classes(class_id) ON DELETE CASCADE,
  foreign key(class3) references classes(class_id) ON DELETE CASCADE,
  foreign key(class4) references classes(class_id) ON DELETE CASCADE,
  foreign key(class5) references classes(class_id) ON DELETE CASCADE,
  foreign key(class6) references classes(class_id) ON DELETE CASCADE
);
