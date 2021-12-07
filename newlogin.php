<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body style="background-color: #ffeee0;">

<script src="js/bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="javaScript.js"></script>
  <script src="ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  

<div class="container mt-5 pt-5 px-5 position-relative">
    <div class="container-fluid mt-5 pt-5 px-5 position-relative" style=" width: 50%;">
  <form class="m-3 p-3 rounded shadow-lg position-relative" method="post" style="background-color: #FA8334; font-family: 'Poppins', sans-serif;">
  <img class="d-block mx-auto" src="logo.png" style="width: 80px; height: 80px; filter: invert(100%);" alt="logo"><h3 class="mb-4" style="color: white;" >Log In</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color: White;">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" >
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="color: White;">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn" style="color: White; background-color: #ffa86e" name="login">Log In</button>
</form>

</div>
</div>



</body>
</html>
<?php 
///////////////////////LOGIN


if (isset($_POST["login"])) {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
        if (empty($username)) 
        {
           
            echo "
            <script>			
            Swal.fire({
            icon: 'error',
            title: 'Empty Field(s)',
            text: '',
            timer: 5000
            
        })
        </script>";
       
        }
        else if (empty($password))
        {
            
            echo "
            <script>			
            Swal.fire({
            icon: 'error',
            title: 'Empty Field(s)',
            text: '',
            timer: 5000
        })
        </script>";
        
        }

        else 
        {
            $sql = mysqli_query($con,"SELECT * FROM `login` WHERE username = '$username' and password = '$password'");
            $row = mysqli_fetch_assoc($sql);
                if ($row['username'] == $username && $row['password'] == $password) 
                {
                    header('Location: dashboard.php?Successfully LoggedIn');
                }
                else
                {
                    echo "
                    <script>			
                    Swal.fire({
                    icon: 'error',
                    title: 'Wrong Password',
                    text: '',
                    timer: 5000
                })
                </script>";  
                }
        }   


}?>