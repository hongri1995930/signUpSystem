create table his_SignInfo(
	SidNr varchar(13) not null,
    Sname varchar(40) not null,
    Ssex varchar(6) not null,
    Cabb varchar(3) not null,
    SpassportNr varchar(10) not null,
    SphoneNr varchar(11) not null,
    Sreligion varchar(12) not null,
    Scollege varchar(30),
    Smajor varchar(20),
    Scomm varchar(500),
    Sdate datetime not null,
    constraint his_S_C foreign key(Cabb) references Country(Cabb)
)