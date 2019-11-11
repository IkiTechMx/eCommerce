CREATE DATABASE tienda;
USE tienda;

CREATE TABLE videojuegos(

id      INT     (10) AUTO_INCREMENT, 
nom     VARCHAR (30),
precio  INT 	(10),
img_url VARCHAR (100),

PRIMARY KEY(id)

);

create table user(

	id int not null auto_increment primary key,
	username varchar(100) not null,
	password varchar(255) not null
);

create table admi(

	id int not null auto_increment primary key,
	admini varchar(100) not null unique,
	password varchar(255) not null
	
);

create table cart (

id_us int(10) null,
prod int(10) null

);

INSERT INTO videojuegos ( nom , precio, img_url ) VALUES 

( 'Mario Kart 8 Deluxe' , '1100' , 'http://127.0.0.1/MyStore/img/nin1.png' ),

( 'Super Mario Odyssey' , '1000' , 'http://127.0.0.1/MyStore/img/nin2.png' ),

( 'Super Mario Bros U Deluxe ' , '1150' , 'http://127.0.0.1/MyStore/img/nin3.png' ),

( 'Kirby Star Allies ' , '1250' , 'http://127.0.0.1/MyStore/img/nin4.png' ),

( 'Minecraft' , '900' , 'http://127.0.0.1/MyStore/img/nin5.png' ),

( 'Arms' , '1100' , 'http://127.0.0.1/MyStore/img/nin6.png' ),

( 'The Witcher III Wild Hunt' , '1400' , 'http://127.0.0.1/MyStore/img/nin7.png' ),

( 'Lego DC Super Villains' , '1350' , 'http://127.0.0.1/MyStore/img/nin8.png' );

insert into user ( username, password ) values 
( "Jeremy" , "12345");

insert into admi ( admini , password ) values 
( "Admin" , "1234" );