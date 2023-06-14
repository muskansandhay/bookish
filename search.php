<?php
require_once("template/header.php");
if(isset($_GET["submit1"])){
    $book=$_GET["book"];
    $sql="SELECT * FROM book WHERE name LIKE '%$book%' ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);
    $count=$stmt->rowCount();
    if(!$count){
      echo "No Book Found !!!";
    }else{
        echo"<div style='display:flex; flex-direction:row; flex-wrap:wrap;'>";
        while($row = $stmt->fetch( PDO::FETCH_ASSOC )  ){
            var_dump ($row['id']);
            echo '<button onClick="bookInfo('.$row['id'].')"><img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" style=" margin-right:25px; width:200px; border-radius:10px;" /></button>';



        }
    }
     
  }
?>
<script src="JS/general.js"></script>