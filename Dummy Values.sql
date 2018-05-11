INSERT INTO employee
VALUES (001, 'JACO','ABAT', '2009','2018-04-28','2018-04-29','FACULTY','SINGLE', );

INSERT INTO employee
VALUES (002, 'BRIAN','PACIA', '2108','2017-03-27','2019-05-30','FACULTY','MARRIED', );

INSERT INTO employee
VALUES (003, 'OWEN','MEDINA', '4607','2016-02-26',null,'FACULTY', 'MARRIED' );

INSERT INTO employee
VALUES (004, 'ANDREA','ANG', '4806','2015-01-25','2021-07-02','FACULTY','SINGLE', );

INSERT INTO employee
VALUES (005, 'PIEL','ARCILLA', '2405','2014-12-20','2022-08-03','FACULTY','SINGLE', );

INSERT INTO employee
VALUES (006, 'STEPHANIE','ROBLES', '2504','2013-11-19','2023-09-04','FACULTY','MARRIED', );

INSERT INTO employee
VALUES (007, 'GOMER','ABESAMIS', '2603','2012-10-18','2024-10-05','ADMIN','WIDOWER', );

INSERT INTO employee
VALUES (008, 'KRISTI','INGCO', '2802','2011-09-17','2025-11-06','ADMIN','WIDOW', );

INSERT INTO employee
VALUES (009, 'KENNETH','ALOG', '2301','2010-08-16','2023-12-20','FACULTY','MARRIED', );

INSERT INTO employee
VALUES (010, 'NIGEL YU','2910', '2012-07-15',null,'FACULTY', 'WIDOWER', );

INSERT INTO employee
VALUES (011, 'JAKE','CHENG', '4020','2014-06-14','2019-02-18','FACULTY','MARRIED', );

INSERT INTO employee
VALUES (012, 'CARLO','ACOSTA', '3921','2016-05-13','2020-03-17','FACULTY','WIDOWER', );

INSERT INTO employee
VALUES (013, 'ALEC','AQUINO', '3522','2018-04-12','2022-04-16','ADMIN','WIDOWER', );

INSERT INTO employee
VALUES (014, 'CHRIS','DIZON', '4123','2017-03-11',null,'FACULTY','MARRIED', );

INSERT INTO employee
VALUES (015, 'MIK','FUENTES', '4324','2015-02-10','2018-12-10','FACULTY','SINGLE', );

INSERT INTO deductions
VALUES (100, '2017-05-28', '2019-05-28', 1767.50);

INSERT INTO deductions
VALUES (101, '2018-03-15', '2018-12-10' 2765.00);

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

INSERT INTO deductions
VALUES (109, '2017-03-11', '2019-03-11', 2000.00);

INSERT INTO wages
VALUES (001, 19850.00, 2000.00, 21850.00);

INSERT INTO wages
VALUES (002, 17750.00, 1330.00, 20080.00);

INSERT INTO wage
VALUES (003, 18220,00, 1200.00, 19420.00);

INSERT INTO wages
VALUES (004, 18150.00, 1000.00, 19150.00);

INSERT INTO wages
VALUES (005, 19850.00, 1300.00, 21150.00):

INSERT INTO wages
VALUES (006, 20250.00, 2200.00, 22450.00);

INSERT INTO wages
VALUES (007, 21950.00, 1000.00, 22950.00);

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
VALUES (001, 108, null, null, null, null, 850.00, 2000.00);

INSERT INTO payroll
VALUES (002, 101, null, null, null, null, 2765.00, 1330.00);

INSERT INTO payroll
VALUES (003, 103, null, '02:00:00', 'Due to sickness', 'Ask for doctor\'s note', 1220.50, 1200.00):

INSERT INTO payroll
VALUES (004, 102, null, null, null, null, 990.00, 1000.00);

INSERT INTO payroll
VALUES (005, 108, null, '00:01:00', 'NEGLIGIBLE', 'NEGLIGIBLE', 850.00, 1300.00);

INSERT INTO payroll
VALUES (006, 104, '2018-02-01', null, 'On maternity leave', null, 600.00, 2200.00);

INSERT INTO payroll
VALUES (007, 100, '2018-02-01', null, 'Unknown', 'Ask for cause of absence', 1767.50, 1000.00);

INSERT INTO payroll
VALUES (010, 105, null, null, null, null, 550.00, 1500.00); 

INSERT INTO dtr
VALUES (001, '2018-02-01', '10:55:00', '18:35:00', 0, 0, 0);

INSERT INTO dtr
VALUES (002, '2018-02-01', '11:25:00', '18:32:00', 0 ,0, 0);

INSERT INTO dtr
VALUES (003, '2018-02-01', '11:13:00', '16:30:00', 0, 0, 0);
        
INSERT INTO dtr
VALUES (004, '2018-02-01', '11:40:00', '18:31:00', '00:10:00', 0 ,0);

INSERT INTO dtr
VALUES (005, '2018-02-01', '11:22:00', '18:29:00', 0, 0, 0);

INSERT INTO dtr
VALUES (006, '2018-02-01', 0, 0, 0, 0, 1);

INSERT INTO dtr
VALUES (007, '2018-02-01', 0, 0, 0, 1, 0);

INSERT INTO dtr
VALUES (008, '2018-02-01');

INSERT INTO dtr
VALUES (009, '2018-02-01');

INSERT INTO dtr
VALUES (010, '2018-02-01', '10:51:00', '18:32:00', 0, 0, 0);

INSERT INTO dtr
VALUES (011, '2018-02-01');

INSERT INTO dtr
VALUES (012, '2018-02-01');

INSERT INTO dtr
VALUES (013, '2018-02-01');

INSERT INTO dtr
VALUES (014, '2018-02-01');

INSERT INTO dtr
VALUES (015, '2018-02-01');
