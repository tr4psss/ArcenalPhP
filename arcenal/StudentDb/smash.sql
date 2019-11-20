
create database hack;

use hack;

CREATE TABLE `smash` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `state` varchar(11) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `rollno` int(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `birth` date NOT NULL,
    PRIMARY KEY  (`id`)
);
