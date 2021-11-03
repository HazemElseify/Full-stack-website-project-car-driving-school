<?php
  require ("All.php");
  $LocalTutor=new All();
  if(isset($_POST['AD']))
  {
  $LocalTutor->insertLocalTutor($_POST['username'],$_POST['firstname'],$_POST['lastname'],$_POST['Age'],$_POST['password'],$_POST['email']);}
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <!-- Mobile complitabilty -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin/AddTutor</title>
        <link rel='stylesheet' href="../css/bootstrap.css"/>
        <link rel='stylesheet' href="../css/Style.css"/>
        <script src="../js/html5shiv.min.js"></script>
        <script src="../js/respond.min.js"></script>
    </head>
    <body>
  <div class="AddTutor-Dark">
      <form action="" method="POST">
          <label><h2><span style="font-family: form; ">ADD LOCAL TUTOR</span></h2></label>
          <div class="form-group"><input class="form-control" type="text" name="username" placeholder="UserName"></div>
            <div class="form-group"><input class="form-control" type="text" name="firstname" placeholder="First Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Last Name"></div>
          <div class="form-group"><input class="form-control" type="text" name="Age" placeholder="Enter Age"></div>
          <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
          <div class="form-group"><input class="form-control" type="email" name="email" placeholder="E-mail"></div>
       <!--   <select id="Gender" class="form-control"><option selected>Male</option><option>Female</option> <option>Other</option></select><br> -->
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" href="#" name="AD">Add Tutor</button></div>
             <div class="back"><button class="btn btn-primary btn-block" type="submit" href="#">Back</button></div>
      </form>
    

        </div>
  <?php
  $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if(strpos($fullurl,"Addtutor=success")==true)
  {
      echo "<script> alert('inserted successfully');window.location='Admin.php'</script>";
  }
  if(strpos($fullurl,"Addtutor=Error")==true)
  {
      echo "<script> alert('inserted not successfully');window.location='Admin.php'</script>";
  }
  ?>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    </body>
</html>