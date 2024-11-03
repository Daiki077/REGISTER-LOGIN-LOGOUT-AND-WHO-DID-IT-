create table User (
User_ID   int auto_increment primary key,
Username varchar (50),
first_name varchar (50),
last_name varchar (50),
Pass_word varchar (50)
);


create table Customer (
Customer_ID   int auto_increment primary key,
first_name varchar (50),
last_name varchar (50),
gender varchar (15),
age integer (2),
emailaddress varchar (50),
added_by varchar (50),
date_added timestamp default current_timestamp
);
create table Shoes (
Shoes_ID   int auto_increment primary key,
name_shoes varchar (50),
brand_shoes varchar (50),
size_shoes varchar (15),
color_shoes varchar (15),
Customer_ID varchar (10),
date_added timestamp default current_timestamp
);