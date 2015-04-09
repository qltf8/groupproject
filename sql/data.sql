create table user(
	student_id varchar(128),
	password varchar(128),
	email varchar(128),
	nation varchar(128),
	primary key(student_id)
)engine=innodb;


create table app(
	student_id varchar(128),
	firstName varchar(128),
	lastName varchar(128),
	gpa double,
	degree varchar(128), 
	phoneNumber varchar(128),
	email varchar(128),
	graduateDate date,
	workPlace varchar(256),
	primary key(student_id),
	foreign key(student_id) references user(student_id) on delete cascade
)engine=InnoDB;

create table undergraduate(
	student_id varchar(128),
	program varchar(128),
	level varchar(128),
	primary key(student_id),
	foreign key(student_id) references app(student_id) on delete cascade
)engine=innodb;

create table graduate(
	student_id varchar(128),
	degree varchar(128),
	adviseName varchar(128),
	primary key(student_id),
	foreign key(student_id) references app(student_id) on delete cascade
)engine=innodb;


create table interStudent(
	student_id varchar(128),
	score varchar(128),
	semester varchar(128),
	primary key(student_id),
	foreign key(student_id) references app(student_id) on delete cascade
)engine=innodb;


create table course(
	courseName varchar(128),
	deptment varchar(128),
	primary key(courseName)
)engine=innodb;

create table curTeach(
	student_id varchar(128),
	courseName varchar(128),
	primary key(student_id,courseName),
	foreign key(student_id) references app(student_id) on delete cascade,
	foreign key(courseName) references course(courseName) on delete cascade
)engine=innodb;


create table preTeach(
	student_id varchar(128),
	courseName varchar(128),
	primary key(student_id,courseName),
	foreign key(student_id) references app(student_id) on delete cascade,
	foreign key(courseName) references course(courseName) on delete cascade
)engine=innodb;

create table likeTeach(
	student_id varchar(128),
	courseName varchar(128),
	score double,
	primary key(student_id,courseName),
	foreign key(student_id) references app(student_id) on delete cascade,
	foreign key(courseName) references course(courseName) on delete cascade
)engine=innodb;


 CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table instructor(
	faculty_id varchar(128),
	email varchar(128),
	primary key(faculty_id)
)engine=InnoDB;

create table comment(
	student_id varchar(128),
	faculty_id varchar(128),
	comment text,
	primary key(student_id,faculty_id),
	foreign key(student_id) references user(student_id) on delete cascade,
	foreign key(faculty_id) references instructor(faculty_id) on delete cascade
)engine=InnoDB;