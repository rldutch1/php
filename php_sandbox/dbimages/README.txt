Insert and retrieve images to and from a database using PDO.

These PHP and SQL files will allow you to create a web page that can be used to insert images into a database table and view the image by the image ID number.


 blobimage_class.php - Class file that is used by
 blobimageshow.php - Shows the image (in a link) that is fetched by dbshowimages.php.
 blobimagesmain.php - Displays a searchbox to find an image by number.
 connect_pdo.php - Connects to the database. This should be included in all files that need to connect to the database.
 databaseimage.mysql - Creates the database, table, and username for MySQL Server or MariaDB Server.
 databaseimage.mssql - Creates the database, table, and username for Microsoft SQL Server.
 dbimages.php - File that inserts the image data into the database table.
 dbshowimages.php - File that retrieves the image from the database table and displays it.
 index.php - Main website file.
 README.txt - This file.
