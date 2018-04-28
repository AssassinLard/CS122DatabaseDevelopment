


Create Table deductions(
codeDescription     Int Not Null Auto_Increment Unique Primary Key,
facultyno           Int,
effectivityDate   	date Not Null,
terminationDate	  	date Not Null,
deductedAmount      Float(2) Default 0,
total_deductions	  Float(2) Default 0 Not Null,
FOREIGN KEY(facultyno) REFERENCES faculty(facultyno)
);
