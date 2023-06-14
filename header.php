<?php
require_once("dconfig/dbconfig.php");
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT email FROM user WHERE email=:email AND password=:password";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['email'=>$email, 'password'=>$password]);
  $count = $stmt->rowCount();
  if($count){
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header("Location: profile.php");
    exit();
  }else{
    $err="Invalid Credentials !!!!!";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/comic.css" rel="stylesheet" type="text/css">
  <link href="css/education.css" rel="stylesheet" type="text/css">
  <link href="css/fantasy.css" rel="stylesheet" type="text/css">
  <link href="css/kid.css" rel="stylesheet" type="text/css">
  <link href="css/Register.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/1ffbe32919.js" crossorigin="anonymous"></script>

</head>

<body>

  <header>
    <nav>
      <div class="icon"><img src="img/th.jpg"></div>
      <div class="search_bar">
        <form method="get" action="search.php">
          <input type="text" name="book" value="search your books here">
          <button type="submit"name="submit1" ><i class=" fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
      <div class="home"><a href="index.php"><i class="fa-solid fa-home " style="color:black;text-decoration: none;">
          </i> </a></div>
      <div class="favourite"><a href="contactUs.php"><i class="fa-solid fa-star"></i></a></div>
      <div class="cart"><a href="purchase.php"><i class="fa-solid fa-cart-shopping"></i></a></div>
      <div class="signup">
      <?php if (!isset($_SESSION['email']) && !isset($_SESSION['password'])): ?>
        <button class="btn-login" onclick="showModal()">LOGIN</button>

        <div class="overlay"></div>
        <div class="loginform" id="loginform">
          <span onclick="closeModal()">&times;</span>
          <form method="post"action="<?php print $_SERVER["PHP_SELF"];?>">
            <div>
              <label for="">Email</label>
              <input type="email" name="email">

            </div>
            <div>
              <label for="">Password</label>
              <input type="password" name="password">
            </div>
            <?php if(isset($err)){
            echo $err;
            }?>

            <button type="submit">SUBMIT</button>
          </form>
          <div>
            <p><strong>Don't have account?</strong></p>
            <a href="Register.php">create an account</a>
          </div>

        </div>

      <?php endif; ?>
      <?php if (isset($_SESSION['email']) && isset($_SESSION['password'])): ?>
        <button class="btn-login"><a href="logout.php">Logout</a></button>
      <?php endif; ?>
      </div>
      
    </nav>
    
  </header>


  <main>
