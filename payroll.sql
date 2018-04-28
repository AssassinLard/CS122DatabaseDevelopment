

Create Table payroll(
absence_date        date,
undertime			time,
cause   	        Varchar(max),
division_action 	Varchar(255),
basic_deduction     Float(2) Default 0,
pera_compensation	Float(2) Default 0,
);