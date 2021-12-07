

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
    <title>Customer Side</title>
    <style>
    .clearfix {
        overflow: hidden;
        height: 100%;
        float:unset;
        width: 100%;
    }
    .ords {
        height: 800px;
        overflow: hidden;
        overflow-y: scroll;
    }
    .foot {
        padding-bottom: 0px;
    }
    </style>
</head>
<body>
    <!-- div for selection of order -->
    <div class="container-fluid mt-2">
        <div class="row">
            <!-- for order menu -->
            <div class="col-xl-12 col-xxl-12 pb-3">
                <div class="card shadow p-3 bg-white rounded order-menu">
                    <form action="order_confirmation4.php" method="post">  
                        <div class="row">
                            <div class="col title">
                                <h3>TABLE 4</h3>
                            </div>
                            <div class="col">
                                <button type="submit" name="submit" class="btn btn-lg btn-dark">
                                    Order Now
                                </button>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <hr>
                        </div>
                    <!-- order list -->
                        <div class="ords">                
                            <div class="row">
                                <?php
                                include 'connect.php';
                                $sql = "SELECT * FROM menu";
                                $result = $con-> query($sql);
                                if ($result-> num_rows > 0)
                                {
                                    while ($row = $result-> fetch_assoc())
                                    {
                                    echo"<div class='col-xl-4 col-xxl-4'>
                                            <div class='card shadow m-2'>
                                                <div class='p-4'>
                                                    <!-- for image -->
                                                    <div class='image mb-2 clearfix'>
                                                        <img src='mainpage.jpg' class='rounded' width='100%'>
                                                    </div>
                                                    <hr class='solid'>
                                                    <!-- for label -->
                                                    <div class='row'>                                      
                                                        <div class='text-label pt-3 col-xl-8 col-xxl-8'>" . $row["product_name"] . "</div> 
                                                        <label class='col-xl-4 col-xxl-4 switch p-2'>
                                                            <div class='form-check'>
                                                                <input type='checkbox' name='order[]' value=' ". $row['product_name'] ." ' class='form-check-input chckbox' id='order'>
                                                                <input type='number' name='order_num[]' class='input-group-text ordinput' value=''>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>";
                                        }                                           
                                    }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center foot">
        <p>All Rights Reserve @Lucky Wings Ph</p>
    </div>
    
</body>
</html>