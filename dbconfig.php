<?php
// $host='localhost:3307'; // Just if you have another port number
$host = 'localhost'; // I didn't add the port number here (Only in my PC)
$dbname = 'bookish';
$user = 'root'; // The default username
$password = ''; // Empty by default => in your computer

/*
My server is changed to "localhost:3307" 
That's why I added the new port value to my dsn value
*/
$dsn = "mysql:host=$host;dbname=$dbname; port=3307";

try {
    // This object $pdo will the one to be used frequently through our CRUD operations
    // We can give it any name that makes sense to us
    $pdo = new PDO($dsn, $user, $password);
    // testing:
    // echo "Connection Done!";

} catch (PDOException $e) {
    // If there is an error in database connection, this message will be printed and the application will continue loading
    // php.net- Link: https://www.php.net/manual/en/exception.getmessage.php
    echo "Database Connection failed: " . $e->getMessage();
    // Using the keyword "throw" to STOP the execution of our app and display the error message
    throw new PDOException($e->getMessage());
}