# CS122DatabaseDevelopment
Prototype Database for DigiLog
# All files to be named according to their Table Names, and will be compiled at a later date
# Record all changes made to the database files in this README. Spaces will be alloted for each file.

April, 28, 2018
Note from Korean: I finished most parts of creating tables but I need someone to double check the code. 
Specifically:
- dtr -> minutesLate
- foreign keys (especially if we need to add keys in other tables)

And DigiLog Database is the file where I added everything together so... yeah... go check that.
I added dummy values for table employee as well except im missing one value (exepmted_amount)

# Employee

# DTR

/*
minutesLate - there is no attribute that is specifically for minutes so I made it "int" temporarily. 
Checking the eerd, it seems that minutesLate is a derived attribute. 
We could subtract timeIn and the time boundary of late but in the case that they are not late I'm not sure what to do.

Getting minutes from time: 

Method 1: hour(datefield) * 60 +  minute(datefield)

Method 2: SELECT CONVERT(mi,YourDateHere)

Method 3: datediff(Mi,datecolumn1,datecolumn1) %1440

(I'm not sure if they work but the internet says they do...)

absent and onLeave - since there is no boolean in sql, I decided to use "bit" which has 3 values, 0, 1, and null. 
We don't need to worry about null since I set both of them as not null. According to the data dictionary and eerd,
there is no primary or foreign key. I'm not sure if we need to revise this but for now I didn't assign anything.
*/

# Payroll

# Deduction

# Wage


In case it gets lost in the Messenger group chat:
https://drive.google.com/drive/folders/1w7TlFXi8xQYwg-nS1NVj-PH80LV4gHG9
^^^ DigiLog Interface Assets

12 May, 2018

From AL: Cleaned up the Repository, fixed the Database code

PENDING: Status of employeeno as FOREIGN KEY, Connection between MySQL and HTML.

13 May, 2018

From Alf: Added php connectivity to the admin_index.php file. 

NOTE: Php will only run natively with .php files so all files we need to use php with and access the database need to be in that format.
They're essentially the same as .html files anyway so it shouldn't be too hard to understand.

PENDING: Still don't know how to display the number of lates and absences in the faculty tab, so I'll leave that to Ricci muna. Will probably convert the other files into .php files just in case.

From AL: Edited the DTR dummy data. Edited comments
