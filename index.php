<?php include('server.php') ?>

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
    <title>Login-just4practice</title>
    
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
        background-color: white;
      }
    </style>
  </head>
  <body style="background-color: #eeeeee;" class="Site">

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
                <a class="nav-link ml-2" href="index.php">Login<span class="sr-only">(current)</span></a>                    
              </li>
            </ul>
          </div>    
        </nav>
      </div>  
    </div> 
  <main class="Site-content">
  <!-- Modal (contact us) -->
  <div class="modal fade" id="aboutUs" tabindex="-1" role="dialog" aria-labelledby="aboutUs" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
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

  <!-- cards (login and signup)-->
  <div class="container">
    <div class="row justify-content-center align-items-center" style="height:85vh">
      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-9">
        <div class="bg-light card mt-3 tab-card col-lg-12 col-md-12 col-sm-12 col-xs-10 ">
          <div class="bg-light card-header tab-card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link my-4 ml-2 float-left btn btn-outline-primary active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="Login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link my-4 ml-2 float-right btn btn-outline-primary" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="Signup" aria-selected="false">Sign up</a>
              </li>
            </ul>
          </div>

          <!-- Login-->
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active p-3" id="login" role="tabpanel" aria-labelledby="login-tab">
              <form class="mt-3 login" action="index.php" autocomplete="off" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="mt-4 mb-3 btn btn-primary btn-block" name="login_user">Login</button>
              </form>
            </div>

            <!-- Sign Up-->
            <div class="tab-pane fade p-3" id="signup" role="tabpanel" aria-labelledby="signup-tab">    
              <form class="signup" action="index.php" method="POST" autocomplete="off"> 
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="mt-4 mb-3 btn btn-primary btn-block" name="reg_user">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
  <!-- Footer -->
  <div class="footer container-fluid py-3">
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