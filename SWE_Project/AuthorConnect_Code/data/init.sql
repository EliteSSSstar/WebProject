/*This file will contain the sql query that execute below
  - CREATE A DATABASE
  - CREATE TABLES
  */
CREATE  DATABASE authorconnect_db1;
    use authorconnect_db1;

-- Create User table
CREATE TABLE User (
                      userID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      roleID INT(11) ,
                      authorID INT(11) ,
                      empID INT(11) ,
                      username VARCHAR(50) NOT NULL,
                      password VARCHAR(50) NOT NULL,
                      image VARCHAR(50) ,
                      firstname VARCHAR(50) NOT NULL,
                      lastname VARCHAR(50) NOT NULL,
                      email VARCHAR(50) NOT NULL ,
                      phoneNum VARCHAR(20) NOT NULL ,
    /*dob VARCHAR(20) NOT NULL ,*/
                      verify_status BOOL ,
                      link VARCHAR(70)
);

-- Create role table
CREATE TABLE Role (
                      roleID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      role_name VARCHAR(20)
);

-- Create FavBook table
CREATE TABLE FavBook (
                         userID INT(11) PRIMARY KEY NOT NULL,
                         isbn INT(20) NOT NULL
);

-- Create author_action table
CREATE TABLE Author_Action (
                               postID     INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                               authorID   INT (11) ,
                               postTypeID INT (11) ,
                               heading VARCHAR(80) ,
                               description VARCHAR(100) ,
                               date VARCHAR(100) ,
                               time VARCHAR(100) ,
                               place VARCHAR(40) ,
                               answer1 VARCHAR(40) ,
                               answer2 VARCHAR(40) ,
                               answer3 VARCHAR(40)
);

-- Create Book Table
CREATE TABLE Book (
                      isbn INT(20) PRIMARY KEY NOT NULL,
                      postID INT(11) ,
                      authorID INT(11) ,
                      genreID INT(11) NOT NULL,
                      bookName VARCHAR(50) NOT NULL ,
                      description VARCHAR(255) NOT NULL ,
                      image VARCHAR(50) NOT NULL ,
                      rating INT(10) NOT NULL
);

-- create review Table
CREATE TABLE Review (
                        reviewID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        userID INT(11) ,
                        date VARCHAR(50) NOT NULL ,
                        comment VARCHAR(255) NOT NULL
);

-- create postType Table
CREATE TABLE postType (
                          postTypeID INT(10) PRIMARY KEY,
                          postType_name VARCHAR(50)
);

-- create genre Table
CREATE TABLE Genre (
                       genreID INT(5) PRIMARY KEY,
                       genre_name VARCHAR(50)
);

-- create publish Table
CREATE TABLE Publish (
                         publishID INT(5) PRIMARY KEY,
                         authorID INT(11)
);