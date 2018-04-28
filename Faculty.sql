

Create Table faculty(
facultyno  	  		Int Not Null Auto_Increment Unique Primary Key,
fname    	 	    Varchar(255) Not Null,
lname		        Varchar(255) Not Null,
pera        	    Float(2) Default 2000.00 Not Null,
dateofHiring		date Not Null,
dateofRetirement  date,
position		    Varchar(255) Not Null,
taxCode			    Varchar(255) Default 'Single' Not Null,
exemptedAmount 		Float(2) Default 50000 Not Null
);