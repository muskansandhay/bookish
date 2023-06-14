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

$id=$_POST['id'];
var_dump($_POST);
$sql="SELECT * FROM book WHERE id= $id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $count=$stmt->rowCount();
    $row = $stmt->fetch( PDO::FETCH_ASSOC );
    $name=$row['name'];
    $img=$row['img'];
    $type=$row['type'] ;
    $description=$row['description'];
       // echo '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" style=" margin-right:25px; width:200px; border-radius:10px;"/>';
        
    
?>
<div class="book-container" style=".img{
    grid-area: img;
}
.name{
    grid-area: name;
}
.type{
    grid-area: type;
}
.description{
    grid-area: description;
}
.book-container{
    width: 80%;
    margin:10vh;
    display:grid;
    grid-template:'img img img type type type'
    'name name name name name name '
    'description description description description description description';
    

}">
    <div class="img">
        <?php
            echo' <img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" style=" margin-right:25px; width:200px; border-radius:10px;"/>';
        ?>
    </div>
    <div class="name"><?php echo $name?></div>
    <div class="type"><?php echo $type?></div>
    <div class="description"><?php echo $description?></div>
</div>
<script src="JS/general.js"></script>