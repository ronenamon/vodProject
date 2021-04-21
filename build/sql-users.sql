CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    unique_id varchar(23) NOT NULL,
    username varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    pass varchar(256) NOT NULL,
    created_at datetime DEFAULT NULL,
    updated_at datetime DEFAULT NULL,
    admin int(1) DEFAULT 0,
    login int(1) DEFAULT 0,
    PRIMARY KEY (id)
)