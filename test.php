<?php 
    session_start(); 

	if (!isset($_SESSION['username'])) {
		header('location: index.php');
    }

  if (isset($_POST['management'])){
    $_SESSION['subject'] = "management";
    $_SESSION['number'] = 1;
    $_SESSION['score'] = array();
  }

  if (isset($_POST['eti'])){
    $_SESSION['subject'] = "eti";
    $_SESSION['number'] = 1;
    $_SESSION['score'] = array();
  }
  
  $number = $_SESSION['number'];
  $subject = $_SESSION['subject'];
  $username = $_SESSION['username'];

  include('config.php');

  if (isset($_POST['blood'])){
    if(isset($_POST['quest'])){
      $answer = $_POST["quest"];
      array_push($_SESSION['score'], $answer);
    }
  }

  if ($number >= 51) {
    $query = "SELECT answer FROM $subject";
    
    if ($result = mysqli_query($db, $query)) {
      $final_score = 0;
      $i = 0;
      while($row = $result->fetch_array(MYSQLI_NUM)) {

        if ($row[0] == $_SESSION['score'][$i]) {
          $final_score++;
        }
      $i++;
      }
      $query = "INSERT INTO test_score (email, score, subject) VALUES ('$username','$final_score','$subject')";
      mysqli_query($db, $query);
      echo '<script language="javascript">';
      echo "window.alert('Your Score is '+$final_score+'/50')";
      echo '</script>';
      echo "<script>window.location.href='home.php';</script>";
      exit;
    }
  }

  $question_no = "";
  $question = "";
  $option1 = ""; 
  $option2 = ""; 
  $option3 = "";   
  $option4 = "";

  $query = "SELECT * FROM $subject where no=$number";

  if ($results = mysqli_query($db, $query)) {   
    while($row = $results->fetch_assoc()) {    
      $question_no = $row["no"];
      $question = $row["question"];
      $option1 = $row["A"]; 
      $option2 = $row["B"]; 
      $option3 = $row["C"];   
      $option4 = $row["D"];
      $number++;
      $_SESSION['number'] = $number;
    }
  }else {
    echo '<script language="javascript">';
    echo 'window.alert("Sorry, No Exams Are Available")';
    echo '</script>';
  } 
?>

<!doctype html>
<html lang="en">
<head>
  <!-- metatags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" href ="img/favicon.png" type="image/x-icon" />
  <title>Exam-just4practice</title>
    
  <!-- Style -->
  <style>
    .Site{
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    .Site-content{
      flex: 1;
    }
    .footer {
      position: relative;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
        background-color: #e8e8e8;
    }
  </style>
</head>

<body style="background-color: white;" class="Site">
  <!-- navbar -->
  <div style="background-color: white;">  
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
            <a class="navbar-brand" href="home.php">
              <img class="img-fluid" height="100" width="240" src="img/logo.jpg" alt="image">
            </a>
        </nav>
    </div>  
  </div>  
  <main class="Site-content">

  <!-- Question -->
  <div class="container h-200 d-flex">
    <div class="jumbotron ml-auto my-5 mr-auto" style="width:100vh;">
      <p class="float-left text-uppercase" id="exam_name"><?php echo "$subject"; ?></p>
      <p class="float-right" id="demo" >All The Best!</p><br>
      <hr>
      <p class="lead text-dark font-weight-bold float-left mr-2" id="que_number">Q.<?php echo "$question_no"; ?> </p>
      <p class="lead text-dark font-weight-bold" id="question"><?php echo "$question"; ?></p>
      <hr>
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="radio" name="quest" value="a" onclick="document.getElementById('butn').disabled = false;">
        <label for="1"><?php echo "$option1"; ?></label><br>
        <input type="radio" name="quest" value="b" onclick="document.getElementById('butn').disabled = false;">
        <label for="2"><?php echo "$option2"; ?></label><br>
        <input type="radio" name="quest" value="c" onclick="document.getElementById('butn').disabled = false;">
        <label for="3"><?php echo "$option3"; ?></label><br>
        <input type="radio" name="quest" value="d" onclick="document.getElementById('butn').disabled = false;">
        <label for="4"><?php echo "$option4"; ?></label><br>
        <hr>
        <button type="submit" class="btn btn-primary mt-2 float-right" disabled name="blood" id="butn">Next Question</button>
      </form>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <div class="footer container-fluid py-3 ">
        Developed by: YZ's <br> 
        <b> &copy; Copyright 2020</b>
  </div>

  <!-- JavaScript Libraries -->
  <!-- question answer script -->
  <!-- <script src="js/question.js"></script> -->
  <!-- Time Script -->
  <!-- <script src="js/time.js"></script> -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- Bootstrap JS-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>