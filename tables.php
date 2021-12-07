<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <?php include 'head.php';?>
  </head>
<body>

<?php 
include 'navbar.php';
 ?>

  <section class="home-section">
    <div class="text">Tables</div>
    <!-- tables -->

    <div class="container-fluid">

      <div class="row">

        <!-- start of table 1 div -->
        <div class="col-xl-6">
          
          <div class="card">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-stretch">
                  <div class="text">Table Number: 1 </br></br>
                    <?php
                      // Displaying the name of customer in occupied table number 1
                      $sql = "SELECT * FROM customers;";
                      $result = $con-> query($sql);
                      $table = '1';
                      if ($result-> num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                          if($table == $row["table_num"]){
                            echo $row["name"];
                          }
                        }
                      }
                    ?>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-responsive table-borderless">
                          <thead>
                
                              <tr class="bg-light">
                            
                                  <th scope="col" width="5%">Order</th>
                                  <th scope="col" class="text-end" width="5%">Quantity</th>
                                  <th scope="col" class="text-end" width="5%">Status</th>
                                
                           

                                  <th scope="col" class="text-end" width="5%">
                                <a class="btn-dark " href="process.php?tableDelete=<?php echo $row['order']?>"> CLEAR </a>
                              </tr>
                          </thead>
                          <tbody>
                            <form action="" method="post">
                              <tr>
                             
                                <?php
                                $sql = "SELECT * FROM order_list;";
                                $result = $con-> query($sql);
                                if ($result-> num_rows > 0)
                                {
                                  while ($row = $result-> fetch_assoc())
                                  {?>
                                    <tr>
                                      
                                            <td scope='row'> <?php echo $order = $row["order"] ."</td>"?> 
                                          <td scope='row' > <?php echo $torder = $row['order_total'] ?></span></i></td>
                                           <?php
                                           if ($row["status"] == "Served"){
                                            echo "<td scope='row'><i class='fas fa-check-circle green'></i></td>";
                                          }
                                          else{
                                            echo "<td><i class='fas fa-circle yellow'></i>";    
                                          echo " <span class='ms-1'> " . $row["status"] . "</td>";
                                          }  
                                        ?>
                                           <td> <button type="submit" name="tableServe"><a href="process.php?tableServe=<?php echo $row['order']?>"> Serve </a></button>
                                        </td></span></i>
                                          </tr>
                                            <?php
                                      } 
                                      
                                  } 
                             
                                ?>   
                                
                              </tr>                               
                          </tbody>       
                      </table>
                               </form>
                    </div>
                    <!-- end of table div -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of table 1 div -->

        <!-- start of table 2 div -->
        <div class="col-xl-6">
          
          <div class="card">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-stretch">
                  <div class="text">Table Number: 2 </br></br>
                    <?php
                      // Displaying the name of customer in occupied table number 2
                      $sql = "SELECT * FROM customers;";
                      $result = $con-> query($sql);
                      $table = '2';
                      if ($result-> num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                          if($table == $row["table_num"]){
                            echo $row["name"];
                          }
                        }
                      }
                    ?>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-responsive table-borderless">
                          <thead>
                              <tr class="bg-light">
                                  <th scope="col" width="5%">Order</th>
                                  <th scope="col" class="text-end" width="5%"><span>Status</span></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <form method="post">
                                <?php
                                    $sql = "SELECT * FROM order_list;";
                                    $result = $con-> query($sql);
                                    if ($result-> num_rows > 0){ 
                                      while ($row = $result-> fetch_assoc()){
                                        if($row["table_num_order"] == '2'){
                                          echo "<tr>
                                          <td scope='row'>" . $row["order"] . "</td><td>";
                                          if ($row["status"] == "Served"){
                                            echo "<i class='fas fa-check-circle green'></i>";
                                          }
                                          else{
                                            echo "<i class='fas fa-circle yellow'></i>";
                                          } echo "<span class='ms-1'> " . $row["status"] . " <button name='btn btn-danger btnServe'type='submit'>Serve</button></span></td></tr>";
                                        } 
                                  } 
                                }
                                ?>
                               
                              </tr>
                               
                          </tbody>
                          <button name="btnDelete" type="submit" class="btn btn-delete btn-dark">Clear</button>
                          </form>
                                <?php
                                 include 'connect.php';
                                if (isset($_POST['btnServe'])) 
                                {
                                 
                                  $sql = mysqli_query($con,"SELECT`table_num_order` FROM `order_list` WHERE 2;");
                                  $row = mysqli_fetch_assoc($sql);
                                  $num = $row['table_num_order'];
                                  mysqli_query($con, "UPDATE `order_list` SET `status`='Served' WHERE `table_num_order`='$num'");
                                }
                                if (isset($_POST['btnDelete'])) 
                                {      
                                  mysqli_query($con, "DELETE FROM `order_list` WHERE table_num_order = 2");
                                  echo "
                                  <script>
                                  Swal.fire(
                                    'SUCCESS!',
                                    'Succesfully cleared the table!',
                                    'success'
                                  )
                                 </script>";
                               

                                }
                                  ?>
                      </table>
                    </div>
                    <!-- end of table div -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of table 2 div -->

        <!-- start of table 3 div -->
        <div class="col-xl-6">
          
          <div class="card">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-stretch">
                  <div class="text">Table Number: 3 </br></br>
                    <?php
                      // Displaying the name of customer in occupied table number 3
                      $sql = "SELECT * FROM customers;";
                      $result = $con-> query($sql);
                      $table = '3';
                      if ($result-> num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                          if($table == $row["table_num"]){
                            echo $row["name"];
                          }
                        }
                      }
                    ?>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-responsive table-borderless">
                          <thead>
                              <tr class="bg-light">
                                  <th scope="col" width="5%">Order</th>
                                  <th scope="col" class="text-end" width="5%"><span>Status</span></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <form method="post">
                                <?php
                                    $sql = "SELECT * FROM order_list;";
                                    $result = $con-> query($sql);
                                    if ($result-> num_rows > 0){ 
                                      while ($row = $result-> fetch_assoc()){
                                        if($row["table_num_order"] == '3'){
                                          echo "<tr>
                                          <td scope='row'>" . $row["order"] . "</td><td>";
                                          if ($row["status"] == "Served"){
                                            echo "<i class='fas fa-check-circle green'></i>";
                                          }
                                          else{
                                            echo "<i class='fas fa-circle yellow'></i>";
                                          } echo "<span class='ms-1'> " . $row["status"] . " <button name='btn btn-danger btnServe'type='submit'>Serve</button></span></td></tr>";
                                        } 
                                  } 
                                }
                                ?>
                               
                              </tr>
                               
                          </tbody>
                          <button name="btnDelete" type="submit" class="btn btn-delete btn-dark">Clear</button>
                          </form>
                                <?php
                                 include 'connect.php';
                                if (isset($_POST['btnServe'])) 
                                {
                                 
                                  $sql = mysqli_query($con,"SELECT`table_num_order` FROM `order_list` WHERE 3;");
                                  $row = mysqli_fetch_assoc($sql);
                                  $num = $row['table_num_order'];
                                  mysqli_query($con, "UPDATE `order_list` SET `status`='Served' WHERE `table_num_order`='$num'");
                                }
                                if (isset($_POST['btnDelete'])) 
                                {      
                                  mysqli_query($con, "DELETE FROM `order_list` WHERE table_num_order = 3");
                                  echo "
                                  <script>
                                  Swal.fire(
                                    'SUCCESS!',
                                    'Succesfully cleared the table!',
                                    'success'
                                  )
                                 </script>";
                               

                                }
                                  ?>
                      </table>
                    </div>
                    <!-- end of table div -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of table 3 div -->

        <!-- start of table 4 div -->
        <div class="col-xl-6">
          
          <div class="card">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-stretch">
                  <div class="text">Table Number: 4 </br></br>
                    <?php
                      // Displaying the name of customer in occupied table number 4
                      $sql = "SELECT * FROM customers;";
                      $result = $con-> query($sql);
                      $table = '4';
                      if ($result-> num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                          if($table == $row["table_num"]){
                            echo $row["name"];
                          }
                        }
                      }
                    ?>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-responsive table-borderless">
                          <thead>
                              <tr class="bg-light">
                                  <th scope="col" width="5%">Order</th>
                                  <th scope="col" class="text-end" width="5%"><span>Status</span></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <form method="post">
                                <?php
                                    $sql = "SELECT * FROM order_list;";
                                    $result = $con-> query($sql);
                                    if ($result-> num_rows > 0){ 
                                      while ($row = $result-> fetch_assoc()){
                                        if($row["table_num_order"] == '4'){
                                          echo "<tr>
                                          <td scope='row'>" . $row["order"] . "</td><td>";
                                          if ($row["status"] == "Served"){
                                            echo "<i class='fas fa-check-circle green'></i>";
                                          }
                                          else{
                                            echo "<i class='fas fa-circle yellow'></i>";
                                          } echo "<span class='ms-1'> " . $row["status"] . " <button name='btn btn-danger btnServe'type='submit'>Serve</button></span></td></tr>";
                                        } 
                                  } 
                                }
                                ?>
                               
                              </tr>
                               
                          </tbody>
                          <button name="btnDelete" type="submit" class="btn btn-delete btn-dark">Clear</button>
                          </form>
                                <?php
                                 include 'connect.php';
                                if (isset($_POST['btnServe'])) 
                                {
                                 
                                  $sql = mysqli_query($con,"SELECT`table_num_order` FROM `order_list` WHERE 4;");
                                  $row = mysqli_fetch_assoc($sql);
                                  $num = $row['table_num_order'];
                                  mysqli_query($con, "UPDATE `order_list` SET `status`='Served' WHERE `table_num_order`='$num'");
                                }
                                if (isset($_POST['btnDelete'])) 
                                {      
                                  mysqli_query($con, "DELETE FROM `order_list` WHERE table_num_order = 4");
                                  echo "
                                  <script>
                                  Swal.fire(
                                    'SUCCESS!',
                                    'Succesfully cleared the table!',
                                    'success'
                                  )
                                 </script>";
                               

                                }
                                  ?>
                      </table>
                    </div>
                    <!-- end of table div -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of table 4 div -->

        <!-- start of table 5 div -->
        <div class="col-xl-6">
          
          <div class="card">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-stretch">
                  <div class="text">Table Number: 5 </br></br>
                    <?php
                      // Displaying the name of customer in occupied table number 5
                      $sql = "SELECT * FROM customers;";
                      $result = $con-> query($sql);
                      $table = '5';
                      if ($result-> num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                          if($table == $row["table_num"]){
                            echo $row["name"];
                          }
                        }
                      }
                    ?>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-responsive table-borderless">
                          <thead>
                              <tr class="bg-light">
                                  <th scope="col" width="5%">Order</th>
                                  <th scope="col" class="text-end" width="5%"><span>Status</span></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <form method="post">
                                <?php
                                    $sql = "SELECT * FROM order_list;";
                                    $result = $con-> query($sql);
                                    if ($result-> num_rows > 0){ 
                                      while ($row = $result-> fetch_assoc()){
                                        if($row["table_num_order"] == '5'){
                                          echo "<tr>
                                          <td scope='row'>" . $row["order"] . "</td><td>";
                                          if ($row["status"] == "Served"){
                                            echo "<i class='fas fa-check-circle green'></i>";
                                          }
                                          else{
                                            echo "<i class='fas fa-circle yellow'></i>";
                                          } echo "<span class='ms-1'> " . $row["status"] . " <button name='btn btn-danger btnServe'type='submit'>Serve</button></span></td></tr>";
                                        } 
                                  } 
                                }
                                ?>
                               
                              </tr>
                               
                          </tbody>
                          <button name="btnDelete" type="submit" class="btn btn-delete btn-dark">Clear</button>
                          </form>
                                <?php
                                 include 'connect.php';
                                if (isset($_POST['btnServe'])) 
                                {
                                 
                                  $sql = mysqli_query($con,"SELECT`table_num_order` FROM `order_list` WHERE 5;");
                                  $row = mysqli_fetch_assoc($sql);
                                  $num = $row['table_num_order'];
                                  mysqli_query($con, "UPDATE `order_list` SET `status`='Served' WHERE `table_num_order`='$num'");
                                }
                                if (isset($_POST['btnDelete'])) 
                                {      
                                  mysqli_query($con, "DELETE FROM `order_list` WHERE table_num_order = 5");
                                  echo "
                                  <script>
                                  Swal.fire(
                                    'SUCCESS!',
                                    'Succesfully cleared the table!',
                                    'success'
                                  )
                                 </script>";
                               

                                }
                                  ?>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
    </div>
  </div>
  </section>
  <script type="text/javascript" src="javaScript.js"></script>
</body>
</html>
