create table if not exists Usuario(
cod varchar(255) unique,
nick varchar(255) not null  unique,
nom varchar(255) not null,
cel varchar(255) not null,
team varchar(255) not null,
rol varchar(255) not null,
com varchar(255 ),
primary key (cod)
);

create table if not exists Msj(
cod int unique auto_increment,
nom varchar(255),
mail varchar(255),
men varchar(255),
primary key (cod)
);

create table if not exists Misiones(
cod int unique auto_increment,
cat varchar(255) not null,
descr varchar(255) not null,
reco varchar(255) not null,
est varchar(255) not null,
tipo varchar(255) not null,
primary key (cod)
);

create table if not exists Raid(
cod int unique auto_increment,
nivel varchar(255) not null,
poke varchar(255) not null,
cat varchar(255) not null,
est varchar(255) not null,
primary key (cod)
);

create table if not exists Huevo(
cod int unique auto_increment,
grupo varchar(255) not null,
poke varchar(255) not null,
est varchar(255) not null,
cat varchar(255) not null,
primary key (cod)
);

