create table user(
	id varchar(128),
	password varchar(128),
	email varchar(128),
	nation varchar(128),
	primary key(id)
)engine=innodb;


create table app(
	id varchar(128),
	name varchar(128),
	gpa int,
	degree varchar(128), 
	phoneNumber varchar(128),
	email varchar(128),
	graduateDate date,
	workPlace varchar(256),
	primary key(id),
	foreign key(id) references user(id) on delete cascade
)engine=InnoDB;

create table undergraduate(
	id varchar(128),
	program varchar(128),
	level varchar(128),
	primary key(id),
	foreign key(id) references app(id) on delete cascade
)engine=innodb;

create table graduate(
	id varchar(128),
	degree varchar(128),
	adviseName varchar(128),
	primary key(id),
	foreign key(id) references app(id) on delete cascade
)engine=innodb;


create table interStudent(
	id varchar(128),
	score varchar(128),
	semester varchar(128),
	primary key(id),
	foreign key(id) references app(id) on delete cascade
)engine=innodb;


create table course(
	courseName varchar(128),
	deptment varchar(128),
	primary key(courseName)
)engine=innodb;

create table curTeach(
	id varchar(128),
	courseName varchar(128),
	primary key(id,courseName),
	foreign key(id) references app(id) on delete cascade,
	foreign key(courseName) references course(courseName) on delete cascade
)engine=innodb;


create table preTeach(
	id varchar(128),
	courseName varchar(128),
	primary key(id,courseName),
	foreign key(id) references app(id) on delete cascade,
	foreign key(courseName) references course(courseName) on delete cascade
)engine=innodb;

create table likeTeach(
	id varchar(128),
	courseName varchar(128),
	score double,
	primary key(id,courseName),
	foreign key(id) references app(id) on delete cascade,
	foreign key(courseName) references course(courseName) on delete cascade
)engine=innodb;


 CREATE TABLE `admin` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;