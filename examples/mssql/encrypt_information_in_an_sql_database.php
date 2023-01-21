How to Encrypt Credit Card Information in an SQL Database
https://smallbusiness.chron.com/changing-name-gmail-account-65286.html

Credit card information in your business's database is much more secure if you encrypt it. If you store this information as plain text, unscrupulous users can easily steal the data either through online SQL queries or by scanning the files on the database server's hard drive. Microsoft's SQL Server database software offers two easy-to-use functions, one of which encrypts data using a passphrase, the other decrypting it with the same passphrase. Use these functions in your SQL INSERT, SELECT and UPDATE statements to store and retrieve information in encrypted form.

1.
Click the "Start" button. Move your cursor to "Microsoft SQL Server" in the "All Programs" section, then click "SQL Server Management Studio." This starts the Management Studio program and displays the "Connect to Server" dialog box.

2.
Choose a SQL server computer entry in the "Connect to Server" dialog by clicking on it. Set the "Authentication" pull-down list to "Windows Authentication," then click the "Connect" button.

3.
Click "New Query" in the Management Studio's toolbar. This opens a text editor on the right side of the screen.

4.
Add a "VARBINARY" data field to the database table into which you want to store encrypted credit card information. Use the following SQL code as a guide:

ALTER TABLE customer_info ADD cc_number VARBINARY(100) null;

Click the "Run" symbol -- a green, right-pointing triangle in the Management Studio toolbar -- to execute this code. This adds a 100-byte variable binary field, "cc_number," to the existing table, "customer_info." The encryption functions convert text and numerical data into binary, so the table needs a binary field to hold the data.

5.
Add a record to the table using the "Encryptbypassphrase()" function to encrypt the credit card information, such as in the following example:

INSERT INTO customer_info ('customer_id','name','cc_number') VALUES ('50120','Sam Jones', Encryptbypassphrase('secretcode','1212704331100'));

Click the "Run" symbol. This adds a record to the customer_info table for Sam Jones, whose credit card number is 1212704331100. The "Encryptbypassphrase" function transforms the credit card number into an encrypted binary field using the "secret code" password.

6.
Read the record with a SQL SELECT statement. To retrieve the credit card information, use the "Decryptbypassphrase()" function, supplying it with the original passphrase. Without the passphrase, the encrypted data remains unreadable. After decrypting the credit card number, use the "Convert()" function to convert the binary data back into characters. The SELECT statement appears as follows:

SELECT name, Convert(varchar(20), Decryptbypassphrase('secretcode', cc_number)) FROM customer_info WHERE customer_ID = '50120';

Click the "Run" symbol to execute the SELECT statement.