-- This is the capture of the commands that you can execute in mysql shell / mysql commandline 

-- create database 
create database book_shop default character set utf8;

-- create user and password
create user 'shopadmin'@'localhost' identified by 'shopadmin1234!@#$';

-- grant privileges to the user
GRANT ALL PRIVILEGES ON * . * TO 'shopadmin'@'localhost';

-- if you get `access denied error` if you are loggedin as other than root, 
-- so login as root and try the same 

sudo mysql -u root 

-- Now after login as root user, try giving privileges to the user 

GRANT ALL PRIVILEGES ON * . * TO 'shopadmin'@'localhost';

-- Now login as shopadmin for rest of the tasks to be done.

mysql -u shopadmin -p

use book_shop;

create table books (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    author varchar(255)
);


INSERT into books (title, author) VALUES 
    ('Exploring C', 'Yashavant Kanetkar'),
    ('Object Oriented Programming with C++','Balagurusamy'),
    ('Introduction to algorithms','Thomas H Cormen'),
    ('Design of The Unix Operating System','Maurice J. Bach');
