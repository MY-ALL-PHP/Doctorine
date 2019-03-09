
--------------
Dctorine 2.6
--------------
To install and configure Doctrine by connecting it to a database
Mapping PHP-objects to database-tables
Generating a [[ database schema ]] from PHP objects
Using the EntityManager to insert, update, delete and find objects in the database.

Command - Command Optons		app:hello > is a command name

Transparent persistence :
in object database products refers to the ability to directly manipulate data stored in a database using an object programming language.

Schema - Data Base schema is to be generated to map a php object to the my sql table
Entity manager - Is used to work with allready created schema

Presistable Properties : is a instance varible of entity that is saved into or retrived from the database.
presistance memory is allocated using emaloc() function with zend engine, and that memory is not tracked through the default memory mgt. of zend eng

>> An entity class can't contain final field or it can't be final class.







While developing an ORM project, keep the following thngs in mind : :

||Schema : Is a Logical view of a Entire Database.

||Entity Manager : An entity in database represents an person, sth.. that can be directly comparied with Language Object
                 Its Main purpose - It does something with schema. 
||Object / Database Object : Instead of sending a large string as part of query it is preferable to send OBJECTS that have direct co-relation with relational database.
Where the following co-relation are done.
CLASS NAME/OBJECT NAME  <===>   TABLE NAME
OBJECT PROPERTIES VALUE <===>   TABLES DATA
OBJECT PROPERTIES NAME  <===>   COLUMN NAME IN TABLE
The mapping is done through Object Relational Mapping (-ORM-)

||Transparent presistance in object database : 




A schema represents :
-----------------------------------------------------------------
TABLE NAME:
-----------------------------------------------------------------
|    col_nam1    |   clo_nam2   |   col_nam3    |   col_nam4    |
-----------------------------------------------------------------

A outer class holds all the name that are retrived from from submit
<input type="text" name="form_name">

Here we are mapping the Form_Name With Table_COLUMN_Name

and then finally trying to send that object.
and instructing the database program to extract the data from the object & and do insert into the data base.


::
Also the data type needs to be handled properly
for the coding help  :  you can declare constant such as MYSQLI_INT, MYSQLI_CHAR
BE CAREFUL WITH HOW TO HANDLE the data type such as bolb and other large data file











..
