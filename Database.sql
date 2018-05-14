DROP DATABASE dtrdb;
CREATE DATABASE dtrdb;
USE dtrdb;
/*
DROP TABLE employee;
DROP TABLE dtr;
DROP TABLE payroll;
DROP TABLE deductions;
DROP TABLE wages;
*/

CREATE TABLE employee(
employeeno  	   INT NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
pincode            VARCHAR(255) NOT NULL,
fname    	       VARCHAR(255) NOT NULL,
lname		       VARCHAR(255) NOT NULL,
dateofHiring	   DATE NOT NULL,
dateofRetirement   DATE,
position	       VARCHAR(255) NOT NULL,
taxCode		       VARCHAR(255) DEFAULT 'Single' NOT NULL,
exempted_amount    FLOAT(2) DEFAULT 50000 NOT NULL
);

CREATE TABLE deductions(
codeDescription      INT NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
effectivity_date     DATE NOT NULL,
termination_date     DATE NOT NULL,
deducted_amount      FLOAT(2) DEFAULT 0
);

CREATE TABLE wages(
employeeno              INT, 
baseSalary	            FLOAT(2) DEFAULT 0 NOT NULL,
pera_compensation       FLOAT(2) NOT NULL,
FOREIGN KEY(employeeno) REFERENCES employee(employeeno)
);

CREATE TABLE payroll(
employeeno              INT,
codeDescription         INT,
basic_deduction         FLOAT(2) DEFAULT 0,
PRIMARY KEY (employeeno, codeDescription), 
FOREIGN KEY(employeeno) REFERENCES employee(employeeno),
FOREIGN KEY(codeDescription) REFERENCES deductions(codeDescription)
);

CREATE TABLE dtr(
reference_number          INT NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
employeeno                INT,
date   	                  DATE NOT NULL,
timeReg                   TIME,
FOREIGN KEY(employeeno) REFERENCES employee(employeeno)
);

INSERT INTO employee 
VALUES (001, 0101, "JACO","ABAT",'2018-04-28','2018-04-29',"FACULTY", '11:30:00', "SINGLE", 45000.00 );

INSERT INTO employee 
VALUES (002, 1212, 'BRIAN','PACIA', '2017-03-27','2019-05-30','FACULTY', '11:30:00', 'MARRIED', 50001 );

INSERT INTO employee 
VALUES (003, 1234, 'OWEN','MEDINA', '2016-02-26',null,'FACULTY', '11:30:00', 'MARRIED', 52023 );

INSERT INTO employee 
VALUES (004, 5678,'ANDREA','ANG', '2015-01-25','2021-07-02','FACULTY', '06:30:00', 'SINGLE', 48204);

INSERT INTO employee 
VALUES (005, 9012, 'PIEL','ARCILLA', '2014-12-20','2022-08-03','FACULTY','06:30:00', 'SINGLE', 37708 );

INSERT INTO employee 
VALUES (006, 3456, 'STEPHANIE','ROBLES', '2013-11-19','2023-09-04','FACULTY', '06:30:00', 'MARRIED', 38963);

INSERT INTO employee 
VALUES (007, 0934, 'GOMER','ABESAMIS', '2012-10-18','2024-10-05','ADMIN', '06:30:00', 'WIDOWER', 53198 );

INSERT INTO employee 
VALUES (008, 5937, 'KRISTI','INGCO', '2011-09-17','2025-11-06','ADMIN', '06:30:00', 'WIDOW', 54000);

INSERT INTO employee 
VALUES (009, 0321, 'KENNETH','ALOG', '2010-08-16','2023-12-20','FACULTY', '11:30:00', 'MARRIED', 41101 );


INSERT INTO deductions  
VALUES (100, '2017-05-28', '2019-05-28', 1767.50);

INSERT INTO deductions  
VALUES (101, '2018-03-15', '2018-12-10', 2765.00);

INSERT INTO deductions 
VALUES (102, '2017-11-18', '2018-09-20', 990.00);

INSERT INTO deductions 
VALUES (103, '2016-08-13', '2018-07-18', 1220.50);

INSERT INTO deductions 
VALUES (104, '2018-02-03', '2019-01-12', 600.00);

INSERT INTO deductions 
VALUES (105, '2017-04-16', '2018-03-22', 550.00);

INSERT INTO deductions 
VALUES (106, '2018-04-25', '2020-03-20', 1000.00);

INSERT INTO deductions 
VALUES (107, '2017-07-06', '2018-08-15', 1200.00);

INSERT INTO deductions 
VALUES (108, '2018-09-17', '2019-08-23', 850.00);


INSERT INTO wages 
VALUES (001, 19850.00, 2000.00);

INSERT INTO wages 
VALUES (002, 17750.00, 1330.00);

INSERT INTO wages 
VALUES (003, 18220.00, 1200.00);

INSERT INTO wages 
VALUES (004, 18150.00, 1000.00);

INSERT INTO wages 
VALUES (005, 19850.00, 1300.00);

INSERT INTO wages  
VALUES (006, 20250.00, 2200.00);

INSERT INTO wages 
VALUES (007, 21950.00, 1000.00);

INSERT INTO wages 
VALUES (008, 17850.00, 1450.00);

INSERT INTO wages 
VALUES (009, 18750.00, 2300.00);


INSERT INTO payroll 
VALUES (001, 108, 850.00);

INSERT INTO payroll 
VALUES (002, 101, 2765.00);

INSERT INTO payroll 
VALUES (003, 103, 1220.50);

INSERT INTO payroll 
VALUES (004, 102, 990.00);

INSERT INTO payroll 
VALUES (005, 106, 850.00);

INSERT INTO payroll 
VALUES (006, 104,600.00);

INSERT INTO payroll 
VALUES (007, 100, 1767.50);

INSERT INTO payroll 
VALUES (008, 105, 2000.00);

INSERT INTO payroll 
VALUES (009, 107, 1000.00);


INSERT INTO dtr 
VALUES (NULL, 001, '2018-02-01', '10:55:00');

INSERT INTO dtr 
VALUES (NULL, 001, '2018-02-01', '18:35:00');

INSERT INTO dtr 
VALUES (NULL, 002, '2018-02-01', '11:25:00');

INSERT INTO dtr 
VALUES (NULL, 002, '2018-02-01', '18:32:00');

/*
INSERT INTO dtr 
VALUES (NULL, 003, '2018-02-01', '11:13:00', '16:30:00', 0, '02:00:00', 0, 0, 'Due to sickness', 'Ask for proof or documentation');

INSERT INTO dtr 
VALUES (NULL, 001, '2018-02-02', '11:40:00', '18:33:00', '00:10:00', 0, 0, 0, null, 'Give warning');

INSERT INTO dtr 
VALUES (NULL, 002, '2018-02-02', '11:27:00', '18:35:00', 0, 0, 0, 0, null, null);

INSERT INTO dtr 
VALUES (NULL, 003, '2018-02-02', 0, 0, 0, 0, 1, 0, 'Due to sickness', 'Ask for proof or documentation');

INSERT INTO dtr 
VALUES (NULL, 001, '2018-02-03', '11:28:00', '17:30:00', 0, '01:00:00', 0, 0, null , 'Give warning'); 

INSERT INTO dtr 
VALUES (NULL, 002, '2018-02-03', 0, 0, 0, 0, 1, 0, 'Due to death in family', 'Ask for proof or documentation');

INSERT INTO dtr 
VALUES (NULL, 003, '2018-02-03', '11:50:00', '18:32:00', '00:20:00', 0, 0, 0, null, 'Give tardiness warning');

*/
-- Extra Values:
/*

INSERT INTO employee 
VALUES (010, 6834,'NIGEL' ,'YU','2910', '2012-07-15',null,'FACULTY', 'WIDOWER', 42593);

INSERT INTO employee 
VALUES (011, 2784,'JAKE','CHENG', '4020','2014-06-14','2019-02-18','FACULTY','MARRIED',35000 );

INSERT INTO employee 
VALUES (012, 4756, 'CARLO','ACOSTA', '3921','2016-05-13','2020-03-17','FACULTY','WIDOWER', 39303);

INSERT INTO employee 
VALUES (013, 2039, 'ALEC','AQUINO', '3522','2018-04-12','2022-04-16','ADMIN','WIDOWER', 54999);

INSERT INTO employee 
VALUES (014, 1738,'CHRIS','DIZON', '4123','2017-03-11',null,'FACULTY','MARRIED', 46666);

INSERT INTO employee 
VALUES (015, 0284, 'MIK','FUENTES', '4324','2015-02-10','2018-12-10','FACULTY','SINGLE', 38293);


INSERT INTO deductions 
VALUES (109, '2017-03-11', '2019-03-11', 2000.00);


INSERT INTO wages 
VALUES (010, 20000.00, 1500.00, 21500.00);

INSERT INTO wages 
VALUES (011, 17660.00, 1200.00, 19660.00);

INSERT INTO wages 
VALUES (012, 17500.00, 1750.00, 19250.00);

INSERT INTO wages 
VALUES (013, 19870.00, 900.00, 20770.00);

INSERT INTO wages 
VALUES (014, 18230.00, 1760.00, 19990.00);

INSERT INTO wages 
VALUES (015, 18860.00, 1450.00, 20310.00);


INSERT INTO payroll 
VALUES (010, 105, null, null, null, null, 550.00, 1500.00);

INSERT INTO payroll 
VALUES (011, 107, null, null, null, null, 1200.00 ,1200.00);

INSERT INTO payroll 
VALUES (012, 101, null, null, null, null, 2765.00, 1750.00);

INSERT INTO payroll 
VALUES (013, 104, null, null, null, null, 900.00, 600.00);

INSERT INTO payroll 
VALUES (014, 103, null, null, null, null, 1220.50, 1760.00 );

INSERT INTO payroll 
VALUES (015, 109, null, null, null, null, 2000.00, 1450.00);


INSERT INTO dtr 
VALUES (010, '2018-02-01', '10:51:00', '18:32:00', 0, 0, 0);

INSERT INTO dtr 
VALUES (011, '2018-02-01', '11:00:00', '18:33:20', 0, 0, 0);

INSERT INTO dtr 
VALUES (012, '2018-02-01', '11:24:00', '18:31:30', 0, 0, 0);

INSERT INTO dtr 
VALUES (013, '2018-02-01', '11:20:00', '18:40:00', 0, 0, 0);

INSERT INTO dtr 
VALUES (014, '2018-02-01', '11:30:00', '18:30:00', 0, 0, 0);

INSERT INTO dtr
VALUES (015, '2018-02-01', '11:29:00, '18:31:30', 0, 0, 0);
*/

