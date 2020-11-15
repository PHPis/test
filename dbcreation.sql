CREATE DATABASE IF NOT EXISTS ermak;
CREATE TABLE IF NOT EXISTS ermak.cafe (cafe_name VARCHAR(20), menu_dir VARCHAR(20),
       phone VARCHAR(20), address VARCHAR(50), time_work VARCHAR(20), ok VARCHAR(50), file_name VARCHAR(100));

GRANT SELECT ON ermak.* TO user;