create database dunia;

use dunia;

create table `manusia` (
    `id` int NOT NULL auto_increment,
    `no_id` int,
    `nama` varchar(50),
    `komentar` varchar(255),
    PRIMARY KEY(`id`)
);