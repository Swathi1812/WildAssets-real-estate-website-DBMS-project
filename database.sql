create table property(
locations varchar(40) NOT NULL,
propertyname varchar(40) NOT NULL,
propertystatus varchar(40)NOT NULL,
price int NOT NULL,
placetype varchar(20) NOT NULL,
area varchar (20) NOT NULL,
propertyid varchar(20) UNIQUE NOT NULL,
primary key(propertyid)
);

insert into property values('Munkur Mangalore 575014 ','Queens residency','taken',1500000,'urban',40,'xx12');
insert into property values('Rajshekar Banglore 575004','Bright Garden','Not Taken',8500000,'Rural',56,'xx13');
insert into property values('St Louis Church Manipal 576103','Sherlocks Club','Not Taken',1228000,'Urban',90,'xx14');
insert into property values('Rishikesh Delhi 57112','Ragiv Gully','Taken',2200000,'Rural',35,'xx15');
insert into property values('Gandhinagar Gujrath 57318','Indra Nagar','Not Taken',1850000,'Urban',62,'xx16');

select * from property;

create table Customer(
fname varchar(20) NOT NULL,
lname varchar(20) NOT NULL,
dob date,
custid int UNIQUE IDENTITY,
phoneno bigint,
email varchar(30) NOT NULL,
custpwd varchar(8) NOT NULL,
primary key(custid));

insert into Customer values('Rajesh','Shetty','1990-11-10',9686288086,'abc@gmail.com','abc123*');
insert into Customer values('Rajya','Mittal','1978-04-06',9873456271,'bcd@hotmail.com','swa?456');
insert into Customer values('Shashi','Tagore','1993-01-20',8104536728,'abc123@yahoo.com','pqrs!789');
insert into Customer values('Aishwarya','Gandhi','1989-08-24',9637245379,'ghy672@gmail.com','pra**20');
insert into Customer values('Muhammed','Sadaf','1992-09-17',7354682435,'erhjw892@gmail.com','ms20*');
SET IDENTITY_INSERT Customer ON;
select * from Customer;


create table cancellation(
cancellationid int UNIQUE IDENTITY,

cancellationdate date NOT NULL,
amountrefunded int NOT NULL,
propertyid varchar(20),
foreign key (propertyid) REFERENCES property(propertyid),
custid int,
reason varchar(25),
foreign key (custid) REFERENCES Customer(custid)
);

insert into cancellation  values ('2014-10-20',185000,'xx12',1,'not interested');
insert into cancellation  values ('2017-09-06',1880000,'xx13',2,'not suitable location');
insert into cancellation  values ('2016-05-14',186500,'xx14',3,'found better site');
insert into cancellation  values ('2015-11-20',1166994,'xx15',4,'not in budget');
insert into cancellation  values ('2016-05-10',1425645,'xx16',5,'other');

select * from cancellation;


create table registration (
registrationid bigint UNIQUE IDENTITY,
Registrationdate date,
Registrationstatus varchar(20) NOT NULL,
propertyid varchar(20),
foreign key (propertyid) REFERENCES property(propertyid)  ,
custid int ,
foreign key (custid) REFERENCES Customer(custid)  
);

insert into registration  values ('1990-10-12', 'DONE', 'xx12', 1);
insert into registration  values (NULL, 'NOT DONE', 'xx13', 2);
insert into registration  values ('2014-07-20', 'DONE', 'xx14', 3);
insert into registration  values ('2006-01-16', 'NOT DONE', 'xx15',4);
insert into registration  values ('2014-03-17', 'DONE', 'xx16',5);

select * from registration;

create table loan(
loanid int not null,
bankname varchar(20) not null,
roi int not null,
processing_fee int not null,
no_of_investment int not null,
primary key(loanid),
custid int,
foreign key(custid) REFERENCES Customer(custid),
propertyid varchar(20),
foreign key(propertyid) REFERENCES property(propertyid));

insert into loan values(1001,'Syndicate',12,450,12,1,'xx12');
insert into loan values(1002,'ICICI',9,350,10,2,'xx13');
insert into loan values(1003,'Karnataka',11,450,15,3,'xx14');
insert into loan values(1004,'Corporation',18,250,20,4,'xx15');
insert into loan values(1005,'Syndicate',12,450,12,5,'xx16');

select * from loan;

create table testimonial(
custid int,
profession varchar(20) not null,
propertyid varchar(20) not null,
custsatisfaction varchar(10),
foreign key(custid) references Customer(custid),
foreign key(propertyid) references property(propertyid)
);

insert into testimonial values(1,'teacher','xx12','GOOD');
insert into testimonial values(2,'Engineer','xx13','BEST');
insert into testimonial values(3,'Doctor','xx14','AWESOME');
insert into testimonial values(4,'Lawyer','xx15','GOOD');
insert into testimonial values(5,'Driver','xx16','BEST');

select * from testimonial;

create table transactions(
transaction_id int UNIQUE,
refno int,
transaction_status varchar(20) NOT NULL,
transaction_mode varchar(20),
primary key(transaction_id, refno),
custid int,
loanid int,
foreign key(custid) REFERENCES Customer(custid),
foreign key(loanid) REFERENCES loan(loanid));
insert into transactions values(7543876,5469875,'COMPLETED','Credit',1,1001);
insert into transactions values(7543873,5769876,'NOT COMPLETED','Debit',2,1002);
insert into transactions values(4531027,5691607,'NOT COMPLETED','NEFT',3,1003);
insert into transactions values(210510,5579810,'COMPLETED','UPI-GPay',4,1004);
insert into transactions values(6579101,5454113,'COMPLETED','Cheque',5,1005);


select * from transactions;




 
 

 
