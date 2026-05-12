/*
PROGRAM: MySQL User Insert Statement
This SQL statement inserts a new user record
into the sdemonteverdeDB.user table.

FEATURES:
- Inserts username
- Stores encrypted password
- Adds user description

TABLE:
sdemonteverdeDB.user

FIELDS:
- USER
- PASSWORD
- description

NOTES:
- Uses MySQL PASSWORD() function
- Designed for beginner database practice
*/

INSERT INTO sdemonteverdeDB.user(USER,PASSWORD,description) 
VALUES ('sdemonteverde', PASSWORD('sdpassword'), 'Web publisher'); 
