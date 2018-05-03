


Create Table deductions(
codeDescription     Int Not Null Auto_Increment Unique Primary Key,
employeeno          Int,
effectivityDate   	date Not Null,
terminationDate	  	date Not Null,
deductedAmount      Float(2) Default 0,
total_deductions	  Float(2) Default 0 Not Null,
FOREIGN KEY(employeeno) REFERENCES employee(employeeno)
);
