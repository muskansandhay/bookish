<?php
require_once("template/header.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname =$_POST['fname'];
    $lastname =$_POST['lname'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    $sql="SELECT email FROM user where email=:email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email'=> $email]); 
    $count=$stmt->rowCount();

    if($count){
        $emailerr="You already have account. please sign up instead";
    }else{
        $sql="INSERT INTO user (fname,lname,email,password) VALUES (:firstname,:lastname,:email,:password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['firstname'=> $firstname,'lastname'=> $lastname,'email'=> $email,'password'=> $password]);
        $count=$stmt->rowCount();
        if($count){
            echo "<br> You Successfully Created Your Account";
            $_SESSION['email']=$email;
            $_SESSION['fname']=$firstname;
            $_SESSION['lname']=$lastname;
            header("location: profile.php");
            exit();
        }
    }

}
?>




<h1>Create An Account</h1>
<form method="post" action="<?php print $_SERVER["PHP_SELF"]; ?>">
    <div class="form">
        <div>
            <label>First Name</label>
            <input type="text" required="required" name="fname" placeholder="Your first name">
            <br>
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" required="required" name="lname" placeholder="Your last name">
            <br>
        </div>
        <div>
            <label>Email</label>
            <input type="email" required="required" name="email" placeholder="Your email">
            <br>
        </div>
        <div>
            <label>Password</label>
            <input type="password" required="required" name="password" placeholder="Your password">
            <br>
        </div>
        <?php if(isset($emailerr)){
            echo $emailerr;
            echo " <a href='index.php/#loginform'> Sign up</a>";

        }?>
    </div>
    <div class="btn">
        <div class="login-btn">
            <input type="submit" name="submit" value="Login">
        </div>
        <div class="reset-btn">
            <input type="reset" name="Clear">
        </div>
    </div>    
</form>


<?php
require_once("template/footer.php");
?>
