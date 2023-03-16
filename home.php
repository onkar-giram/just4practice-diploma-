<?php 
	session_start(); 
	if (!isset($_SESSION['username'])) {
		header('location: index.php');
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href ="img/favicon.png" type="image/x-icon" />

    <title>Just4Practice</title>

    <style>
      .site{
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
        right: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
        background-color: #e8e8e8;
      }
    </style>
  </head>

<body style="background-color: white" class="site">
  <!-- navbar -->       
  <div style="background-color: white;">  
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
            <a class="navbar-brand" href="home.php">
              <img class="img-fluid" height="100" width="240" src="img/logo.jpg" alt="image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>  
            </button>
            <div class="collapse navbar-collapse" id="navbarMobile">
                <ul class=" navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#aboutUs">ABOUT US</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="logout.php">LOG OUT <span class="sr-only">(current)</span></a>                    
                    </li>
                </ul>
            </div>    
        </nav>
    </div>  
  </div> 

  <main class="Site-content">

  <!-- Modal (contact us) -->
  <div class="modal fade" id="aboutUs" tabindex="-1" role="dialog" aria-labelledby="aboutUs" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        
        <div class="modal-header ">
          <h5 class="modal-title text-center justify-content-center" id="aboutUs">ABOUT US</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            <div class="jumbotron">
              <h1 class="mb-2 display-5 text-center">About Us</h1>
              <hr class="my-4">
              <p class="lead">We are providing an online platform where final year students can practice for their exams. </p>
              <p>Due to this lockdown, teachers are unable to communicate with students properly, and thus they provide them some online exam links but many of those show issues or aren't that flexible. This is where our website stands out and provides that flexibility.</p>
              <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
              <hr class="my-4">
              <h1 class="display-5 text-center mt-3 my-3">Meet our team</h1>
                <div class="row justify-content-center"> 
                  <div class="card col-xl-5 col-lg-5 col-md-10 col-sm-10 col-10 my-3 ml-auto mr-auto" style=" background-color: #e8e8e8">
                    <div class="card-body">
                      <h5 class="card-title">Onkar Giram</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Student </h6>
                      <p class="card-text">Student, <br/> From Computer, <br/> Final Year Diploma.</p>
                      <a href="https://www.facebook.com/onkar.giram.31"><i class="fa fa-2x fa-facebook ml-5 mr-3 " style="color: #3b5998;"></i></a>
                      <a href="https://instagram.com/me_onkar_patil"><i class="fa fa-2x fa-instagram ml-3"  style="color: #E1306C;"></i></a>    
                    </div>
                  </div>
                  <div class="card col-xl-5 col-lg-5 col-md-10 col-sm-10 col-10 my-3 ml-auto mr-auto" style=" background-color: #e8e8e8">
                    <div class="card-body">
                      <h5 class="card-title">Ganesha Bansa</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Student</h6>
                      <p class="card-text">Student, <br/> From Computer, <br/> Final Year Diploma.</p>
                      <a href="https://www.facebook.com/profile.php?id=100007932272052"><i class="fa fa-2x fa-facebook  ml-5 mr-3 " style="color: #3b5998;"></i></a>
                      <a href="https://www.instagram.com/jr._jumper/"><i class="fa fa-2x fa-instagram ml-3" style="color: #E1306C;"></i></a>
                    </div>
                  </div>

                  <div class="card col-xl-5 col-lg-5 col-md-10 col-sm-10 col-10 my-3 ml-auto mr-auto" style=" background-color: #e8e8e8">
                    <div class="card-body">
                      <h5 class="card-title">Suyog Kulkarni</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Student</h6>
                      <p class="card-text">Student, <br/> From Computer, <br/> Final Year Diploma.</p>
                      <a href="https://www.facebook.com/Kulkarni.suyog.7"><i class="fa fa-2x fa-facebook  ml-5 mr-3 " style="color: #3b5998;"></i></a>
                      <a href="https://instagram.com/kulkarni_suyog_7"><i class="fa fa-2x fa-instagram ml-3" style="color: #E1306C;"></i></a>
                    </div>
                  </div>
                </div>
              <hr class="my-4">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Available exams -->
  <div class="container pb-4 justify-content-center" style=" background-color: white">
    <div class="text" style="background-color: #eeeeee; border-radius: 5px;">
      <h5 class="mb-4 text-center py-3 text-success">Available exams</h5>
    </div>
    <div class="row justify-content-center">
      
      <div class="ml-4 card mb-4" style="border-radius: 12px; width: 14rem; background-color: #e7e5e5;">
        <img class="card-img-top pr-2 pl-2 mt-3" src="img/Management.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Sub: Management<br/>
            Marks: 50<br/>
            New Question Coming.<br/>
          </p>
          <h5 class="card-title text-center">
          <form action="test.php" method="POST">
            <button class="btn btn-primary float-center" type="submit" name="management">Comin Soon..</button>          
          </form>
        </div>
      </div>

      <div class="ml-4 card mb-4" style="border-radius: 12px; width: 14rem; background-color: #e7e5e5;">
        <img class="card-img-top mt-3" src="img/ETI.jpg" alt="Card image cap">
        <div class="card-body">
        <p class="card-text">Sub: ETI(Co)<br/>
            Marks: 50<br/><br/>
          </p>
          <h5 class="card-title text-center">
          <form action="test.php" method="POST">
            <button class="btn btn-primary float-center" type="submit" name="eti">Start Exam</button>          
          </form>
        </div>
      </div>

      <div class="ml-4 card mb-4 justify-content-center" style="border-radius: 12px; width: 14rem; background-color: #e7e5e5;">
        <p class="card-text text-center py-5">
          Coming Soon <br> Stay Tuned...
        </p>
      </div>
    </div>
  </div>

  <!-- previous exams -->
  <div class="container" style=" background-color: white">
    <div class="text" style="background-color: #eeeeee; border-radius: 5px;">
      <h5 class="mb-4 text-center text-dark pt-4">Previous Exams Score< /h5>
      <hr>
      <p class="text text-center pb-4"> No Records Found </p>
    </div>
  </div>

  </main>

  <!-- Footer -->
  <div class="footer container-fluid py-3 bottom">
        Developed by: YZ's <br> 
        <b> &copy; Copyright 2020</b>
  </div>

  <!-- JavaScript Libraries -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- Bootstrap JS-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>