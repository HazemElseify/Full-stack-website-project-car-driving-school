<?php
require ("All.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <!-- Mobile complitabilty -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin/Remote Tutor</title>
        <link rel='stylesheet' href="../css/bootstrap.css"/>
        <link rel='stylesheet' href="../css/Style.css"/>
        <script src="../js/html5shiv.min.js"></script>
        <script src="../js/respond.min.js"></script>
    </head>
    <body>
        <h2 class="h2">REMOTE TUTOR LIST</h2>
        <div>
 <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"class="t">First Name</th>
      <th scope="col"class="t">Last Name</th>
      <th scope="col"class="t">UserName</th>
        <th scope="col"class="t">phone number</th>
      <th scope="col"class="t">age</th>
      <th scope="col"class="t">Email</th>
      <th scope="col"class="t" colspan="2">approve</th>
        </tr>
         </thead>


      <tbody>

      <?php
      while ($row=$result->fetch_assoc()):
      ?>
       <tr>
           <td ><?php echo $row['fristname'];?></td>
           <td > <?php echo $row['lastname'];?></td >
           <td > <?php echo $row['username'];?></td >
           <td > <?php echo $row['phone'];?></td >
           <td > <?php echo $row['age'];?></td >
           <td ><?php echo $row['email'];?> </td >
           <td ><a href="admin0.php?Approve=<?php echo $row['no']?>"><div class='bb' ><button class='btn btn-primary btn-block' type = 'submit' href = '#' > YES</button ></div ></a></td >
           <td > <a href="admin0.php?disapprove=<?php echo $row['no']?>"><div class='bb' ><button class='btn btn-primary btn-block' type = 'submit' href = '#' > NO</button ></div ></a></td >
   </tr >
     </tbody>
     <?php endwhile;?>

</table>
         <!-- <form ACTION="" METHOD="post">    <div class="back"><button class="btn btn-primary btn-block" type="submit" href="#" name="Show">Show</button></div></form> -->
            <div class="back"><button class="btn btn-primary btn-block" type="submit" href="#">Back</button></div>
</div>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>