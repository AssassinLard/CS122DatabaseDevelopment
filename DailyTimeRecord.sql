

--time - hh:mm:ss -- military time 
--date - YYYY:MM:DD 
Create Table dailytimerecord(
facultyno     int,
date   	 	    date Not Null,
timeIn    	  time,
timeOut       time,
minutesLate   time Default 0, 
absent        bit Not Null,
onLeave	 	    bit Not Null,
FOREIGN KEY(facultyno) REFERENCES faculty(facultyno)
);
/*
minutesLate - there is no attribute that
is specifically for minutes so I made it 
"int" temporarily. Checking the eerd, 
it seems that minutesLate is a derived 
attribute. We could subtract timeIn and
the time boundary of late but in the case
that they are not late I'm not sure what 
to do.

Getting minutes from time:
Method 1: hour(datefield) * 60 + 
minute(datefield)
Method 2: SELECT CONVERT(mi,YourDateHere)
Method 3: datediff(Mi,datecolumn1,datecolumn1) 
%1440

(I'm not sure if they work but
the internet says they do...)

absent and onLeave - since there is no 
boolean in sql, I decided to use "bit" 
which has 3 values, 0, 1, and null. 
We don't need to worry about null since
I set both of them as not null.

According to the data dictionary and eerd,
there is no primary or foreign key. I'm 
not sure if we need to revise this but for
now I didn't assign anything.
*/

