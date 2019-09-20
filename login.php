<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
mysql_content('$host,$user,$password');
$mysql_select_db($db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1 ";
    $result=mysql_query($spl);
    if(mysql_num_rows($result)==1){
        echo"you have successfully Logged in";
        exit();

    }
    else{
        echo"you have entered incorrect password";
    }
}

?>






<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="container">
          <div class="row mt-5">
              <div class="col-sm-6">
                  <img src="pic.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|} pics" alt="">
              </div>
              <div class="col-sm-6" id="form">
                  <div class="row ml-5 team" >
                      <h1>Team Syntax</h1>
                      
                  </div>
                  <div class="row ml-3">
                    <h4>Are You A Member? Login</h4>
                  </div>
                  <div class="row mt-2">
                     <form method="POST" action="#">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text"
                              class="form-control" name="email" id="form1" aria-describedby="helpId" placeholder="Username">
                            <small id="helpId" class="form-text text-muted"></small>
                            <br>
                            <br>
                            <input type="text"
                            class="form-control" name="password" id="form1" aria-describedby="helpId" placeholder="Password">
                          <small id="helpId" class="form-text text-muted"></small>
                          </div>
                          <div class="row mt-4 ml-1 container-login100-form-btn">
                              <a name="" id="form2" class="btn btn-primary login login100-form-btn " href="#" role="button">LOGIN</a>
                          </div>
                     </form>
                  </div>
              
                </div>
               
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>