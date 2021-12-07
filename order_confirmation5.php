<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="customer_side_style.css">
    <title>Confirm Order</title>
    <style>
        body {
            background-color: #FA8334ff;
        }
        .container {
            height: 700px;
            margin-top: 5%;
        }
        .ord {
            background-color: rgb(226, 226, 226);
            border-radius: 5px;
            padding: 10px;
            height: 100%;
        }
 
    </style>
</head>
<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="card order_total shadow m-auto p-3 col-xxl-4 h-75">
            
            <h3>Order Total:</h3>
            <div class="ord">
                <?php
                    if (isset($_POST['submit'])) 
                    {
                        include 'connect.php';
                        if(!empty($_POST["order"]))
                        {
                        
                        foreach($_POST["order"] as $key => $order)
                        {
                            
                                $num = $_POST['order_num'];
                                if ($num[$key] < 0) 
                                {
                                    echo "<h3>Dont enter negative values</h3>";
                                }
                                else if ($num[$key] > 9) 
                                {
                                    echo "<h3>Maximum of 9 orders per chicken only</h3>";
                                }
                                else
                                {   
                                    $sql =mysqli_query($con, "SELECT * FROM `sale-history`");
                                    $row = mysqli_fetch_assoc($sql);
                                    $id= $row['customer_id'];
                                    $forder = $order ." x" . $num[$key];
                                    mysqli_query($con,"INSERT INTO `order_list`(`order_id`, `order`, `table_num_order`, `status`) VALUES ('$id','$forder','5','Pending')");
                                    echo "<p>".$order. " x". $num[$key]."</p>";  
                                    // header('Location: customer_ordering.php?SUCCESSFULLYORDERED');
                                }
                            }
                        }
                        else
                        {
                            echo 'Please select at least one chicken';
                        }
                    }

                ?>
            </div>
            <div class="col-12">
                <hr>
            </div>
                <a type="button" name="submit" href="customer_side5.php" class="btn btn-dark">
                    Order Now
                </a>
        </div>
    </div>
</body>
</html>