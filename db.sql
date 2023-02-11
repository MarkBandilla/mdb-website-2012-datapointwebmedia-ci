-- See README.md if you don't understand how to use this file.
-- If you need to clone the database, use this:

CREATE DATABASE glitch;
USE glitch;

create table dreams(
   dream VARCHAR(100) NOT NULL,
   epoch int(30) NOT NULL
);
-- End of file...