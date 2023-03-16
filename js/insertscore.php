<?php
  $email = $_SESSION['username'];
  $score = "";

  function ex($score) 
  {
    $con = mysql_connect("localhost","root","","test");
    $sql = "INSERT INTO test_score (email, score) VALUES ('$GLOBALS[$email]','$score')";
    $res = mysql_query($sql);
    if($res){
      header("location: home.php");
      exit;
    }
    else{
      header("location: home.php");
      exit;
    }
  }
?>