<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <?php
      require 'connect.php';
    ?>
   </head>
<body>
<script type="text/javascript" src="javaScript.js"></script>
<?php 
include 'navbar.php';
 ?>
 
  <section class="home-section">
    <div class="text">Settings / Account</div>
    <!-- Settings -->


      <div class="container-fluid">
      <button type="button" class="btn btn-lg" style="background-color: #FA8334; color: white;"> <a href="setting.php" style="background-color: #FA8334; color: white; text-decoration: none;"> Modify</a></button>
        <button type="button" class="btn btn-lg" style="background-color: #FA8334; color: white;"> <a href="account.php" style="background-color: #FA8334; color: white; text-decoration: none;">  Account </a></button>
      </div>
    
<div class="container-fluid">
      <!-- Modify -->
      <div class="container-fluid mt-2 mb-2 p-2 shadow-lg rounded" style="background-color: #ffa86e; width: 1000px; height: 390px; border-radius: 10px; font-size: 35px; color: white;"> General Account Settings
      <hr style="background-color: white;">
      <div class="mt-1 row" style="font-size: 20px; color: white;">
    <label for="staticEmail" class="col-sm-2 col-form-label">Username:</label>
    <div class="col-sm-10">
      <input  style="font-size: 20px; color: white;" type="text" readonly class="form-control-plaintext" id="staticEmail" value="Ruwidski">
    </div>
  </div>

  <div class="mt-1 row" style="font-size: 20px; color: white;">
    <label for="staticEmail" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input  style="font-size: 20px; color: white;" type="text" readonly class="form-control-plaintext" id="staticEmail" value="*******">
    </div>
  </div>

  <div class="mt-1 row" style="font-size: 20px; color: white;">
    <label for="staticEmail" class="col-sm-2 col-form-label">Contact:</label>
    <div class="col-sm-10">
      <input  style="font-size: 20px; color: white;" type="text" readonly class="form-control-plaintext" id="staticEmail" value="+63912345678">
    </div>
  </div>
  
  <button type="button" class="btn btn-lg float-right mt-2" style="background-color: #FA8334; color: white;">Edit Profile</button>



    </div>
</div>
 


  </section>
  
</body>
</html>
