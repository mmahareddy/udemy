<?php
session_start();
include("connection.php");
if ($_POST['submit'] =="Sign Up") {
  if (!$_POST['email']) {
    $Err.= "<br />Enter a Valid Email";
  } else {
    $email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $Err.= "<br />Invalid email format";
}
  }

  if (!$_POST['password']) {
    $Err.= "<br />Enter a Valid Password";
  }elseif(strlen($_POST["password"]) <= '8') {
    $Err.="<br />Length of the passowrd must be greater than 8 characters";
  } elseif (!preg_match("#[A-Z]+#",$_POST["password"])) {
    $Err.="<br />Your Password Must Contain At Least 1 Capital Letter!";
  }

  if ($_POST['password'] !== $_POST['confpassword']) {
    $Err.="<br />Password does not match";
  }

  if ($Err) {
    echo "There are error(s) with signup page. Details:".$Err;
  } else {

    if (mysqli_connect_error()) {
      die("There are errors");
    }
    $emailEntry=$_POST["email"];
    $emailName=$_POST["name"];
    $emailPwd=$_POST["password"];
    $emailEntry=mysqli_real_escape_string($link,$emailEntry);
    $emailName=mysqli_real_escape_string($link,$emailName);
    $emailPwd=md5(mysqli_real_escape_string($link,$emailPwd));
    $query= "select `email` from user_info where email='".$emailEntry."'";
    if ($result=mysqli_query($link,$query)) {
      if (mysqli_num_rows($result) ===1) {
        echo "Member already Exist";
      }else {
        $query= "INSERT into user_info (`name`,`email`,`password`) VALUES ('$emailName','$emailEntry','$emailPwd')";
        mysqli_query($link,$query);
        echo "Member Inserted";
        $_SESSION['id']=mysqli_insert_id($link);
        print_r($_SESSION);
        //redirec to login page
      }
    }

  }

}

if ($_POST["submit"] = "Log In") {
$loginemail = $_POST['loginemail'];
$loginpwd = md5($_POST['loginpassword']);
$query= "select * from user_info where email='$loginemail' and password='$loginpwd'";
$result=mysqli_query($link,$query);
if($row=mysqli_fetch_array($result)){
  $_SESSION['id'] = $row['id'];
  echo "Valid User";
  //redited to loggedin page
}else {
  echo "No User found, SignUp to LogIn";
}

}


 ?>
