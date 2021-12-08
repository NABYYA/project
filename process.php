
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>



 <?php 
include 'connect.php';
include 'tables.php';
if(isset($_GET['delete']))
{
   mysqli_query($con,"DELETE FROM `customers` WHERE table_num = $tbNum");
    header('Location: orders.php');
}
if(isset($_GET['serve']))
{
    $tbServe =$_GET['serve'];
    $sql = mysqli_query($con,"SELECT table_num_order FROM `order_list` WHERE $tbServe");
    $row = mysqli_fetch_assoc($sql);
    if ($row["table_num_order"] == $tbServe) {

        echo "
        <script>
        Swal.fire(-
          'ERROR!',
          'ERROR',
          'error'
        )
      </script>;";
      header('Location: orders.php?errorBusyTable');
    }
    else
    {
    mysqli_query($con,"UPDATE `customers` SET `status`='Served' WHERE table_num=$tbServe");
    $sql = mysqli_query($con,"SELECT * FROM `customers` WHERE $tbServe");
	$row = mysqli_fetch_assoc($sql);
    $id = $row["id"];
    $tbTable = $row["table_num"] ;
    $order = "No Order Yet" ;
    $tbStat = $row["status"] ;
    $tbServe =$_GET['serve'];
    mysqli_query($con, "INSERT INTO `order_list` (`order_id`,`order`, `table_num_order`, `status`) 
    VALUES ('$id','$order', '$tbTable' ,'$tbStat')");
     echo "
     <script>
     Swal.fire(
       'SUCCESS!',
       'Succesfully added to waitlist at TABLE: " .  $tbTable . "',
       'success'
     )
    </script>";
    header('Location: orders.php');
    }

    }
if(isset($_POST['delete_btn_set']))
{
        $tbNum =$_GET['delete'];
        mysqli_query($con,"DELETE FROM `customers` WHERE table_num = $tbNum");
        header('Location: orders.php');
}
if(isset($_GET['delete']))
{
    $tbNum =$_GET['delete'];
    mysqli_query($con,"DELETE FROM `customers` WHERE table_num = $tbNum");
    header('Location: orders.php');
}
if(isset($_GET['tdelete']))
{
  $tbNum =$_GET['tdelete'];
  mysqli_query($con,"DELETE * FROM `order_list` WHERE 'order' = $tbNum");
  header('Location: tables.php');
}
if(isset($_POST['tableServe']))
{
$trim= trim($order, '"');
mysqli_query($con,"UPDATE menu SET total_orders= (total_orders + '$torder') WHERE product_name = '$trim';");
$results = mysqli_query($con,"UPDATE order_list SET status= 'Served' WHERE order_id = '$orderid' AND orders = '$trim';");
echo "<script>window.location.replace('http://localhost:8080/project/tables.php');</script>";
}
if(isset($_POST['tableDelete']))
{
  mysqli_query($con,"DELETE FROM `order_list` WHERE 1");
  echo "<script>window.location.replace('http://localhost:8080/project/tables.php');</script>";
}
?>
 </body>