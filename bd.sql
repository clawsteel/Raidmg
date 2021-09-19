create table if not exists Usuario(
cod varchar(12) unique,
nick varchar(100) not null  unique,
nom varchar(30) not null unique,
cel varchar(10) not null unique,
vscel varchar(10) not null,
vscod varchar(10) not null,
team varchar(1) not null,
rol varchar(5) not null,
fechna varchar(50),
pass varchar(255),
primary key (cod)
);

create table if not exists Sec(
 insec int auto_increment unique ,
 nom varchar(255) ,
 cod varchar(255) unique,
 team varchar(255) ,
 codas varchar(255),
 cel varchar(255),
 primary key (insec)
);

create table if not exists Noti(
    codnot int auto_increment unique ,
    titulo varchar(255),
    notis  varchar(2000),
    ri     varchar(255),
    fi     varchar(255),
    ff     varchar(255),
    act    varchar(255),
primary key (codnot)
);


