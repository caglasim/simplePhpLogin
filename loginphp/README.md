# Simple Login UI with HTML, CSS AND PHP
## with database connection

#config.php
The first step is to connect to the database. Please adapt the data in the config.php file. 
Example:
$databaseHost= 'localhost';
$databaseName = 'demo'; // name of your your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = '';  // by defualt empty for localhost

#index.php
At first use the include() function to include configurations from the config.php file. Instead of the inclined() function, we can also use the require() function. By clicking the button,
mysqli_fetch_array () function is for fetching the username and password.
The POST method sends the information to the server without showing values in the URL. This is why I didn't use a GET method.
You can create a new php- file to redirect after login is successfully and put it to header(location:"") in line 44. 