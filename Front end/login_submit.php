<?php
    require 'connection.php';
    session_start();
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        window.alert("Incorrect email. Redirecting you back...");
        ?>
        <meta http-equiv="refresh" content="1;url=index.php" />
        <?php
    }
    $password=$_POST['password'];
    if(strlen($password)<6){
        window.alert( "Password should have atleast 6 characters. Redirecting you back...");
        ?>
        <meta http-equiv="refresh" content="1;url=index.php" />
        <?php
    }
    $user_authentication_query="select id,email,name from users where email='$email' and password='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        ?>
        <script>
            window.alert( "Wrong username or password, Redirecting you back!");
        </script>
        <meta http-equiv="refresh" content="1;url=index.php" />
        <?php
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        header('location: dashboard.php');
    }
    
 ?>