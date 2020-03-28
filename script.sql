create database hotel;
use hotel;

create table hotel_master(
	id int(11) primary key auto_increment,
	hotel_name varchar(100) default null,
	contact_number varchar(100) default null,
	image varchar(200) default null,
	address text default null,
	total_rooms int(11) default null,
	created_at timestamp default current_timestamp,
	updated_at timestamp null default null,
	deleted_at timestamp null default null
);

create table package_master(
	id int(11) primary key auto_increment,
	package_name varchar(200) default null,
	created_at timestamp default current_timestamp,
	updated_at timestamp null default null,
	deleted_at timestamp null default null
);

create table hotel_package(
	id int(11) primary key auto_increment,
	detail text default null,
	image varchar(200) default null,
	price float default 0,
	hotel_package_id int(11) not null,
	package_id int(11) not null,
	hotel_id int(11) not null,
	created_at timestamp default current_timestamp,
	updated_at timestamp null default null,
	deleted_at timestamp null default null
);
 
create table user_booking(
	id int(11) primary key auto_increment,
	package_id int(11) not null,
	hotel_package_id int(11) not null,
	hotel_id int(11) not null,
	user_id int(11) not null,
	price float default 0,
	created_at timestamp default current_timestamp,
	updated_at timestamp null default null,
	deleted_at timestamp null default null
);