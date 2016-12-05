<?php

  ini_set('error_reporting', 2047);
  ini_set('display_errors', 1);

  session_start();
  $dbInfo = "mysql:host=localhost; dbname=hospital";
  $dbUser = "root";
  $dbPassword = "";
  $db = new PDO($dbInfo, $dbUser, $dbPassword);

  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $sql = "select * from doctors where email = '$email' and password = '$pwd'";
    $result = $db->query($sql);
    $row = $result->fetchObject();

    if($row){
      $_SESSION['id'] = $row->id;
      $_SESSION['firstname'] = $row->firstname;
      $_SESSION['lastname'] = $row->lastname;
      $_SESSION['email'] = $row->email;
      $_SESSION['photo'] = $row->photo;
      $firstname = $_SESSION['firstname'];

      header('Location: admin.php');

    }else{
      header('Location: index.php?rejected');
    }
  }else{
    //header('Location: index.php');
  }

?>
