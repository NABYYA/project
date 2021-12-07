
<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <?php include 'head.php';?>
  </head>
<body>
<body>
  <?php 
  include 'navbar.php';
  ?>
  <div class="home-section">
    <div class="text">Orders</div>

    <div class="container-fluid"> 


      <div class="row">

        <!-- Customers Card -->
        <div class="col-xl-8 col-md-12">

          <div class="card">
      
            <div class="card-content">

              <div class="card-body">

                <div class="media align-items-stretch">
                  
                  <div class="container mt-5 px-2">
                    <div class="text" style="margin-top:-30px;">Waiting Lobby</div>
                    <button id="myBtn" class="btn bg-blue white" name="addCust">Add Waitlist</button>
                    <!-- <div class="mb-2 w-100">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Name" aria-label="Search Name" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                      </div>
                    </div> -->
                    <div class="table-responsive">
                      <table class="table table-responsive table-borderless">
                          <thead>
                            
                              <tr class="bg-light">
                                  <th scope="col" width="5%">Customer ID</th>
                                  <th scope="col" width="5%" >Name</th>
                                  <th scope="col" width="5%" >Table No.</th>
                                  <th scope="col" width="5%">Head Count</th>
                                  <th scopse="col" class="text-end" width="5%"><span>Status</span></th>
                              </tr>
                          </thead>
                          <tbody>
                            <form action="process.php" method="post">
                          <?php
                          
                            $sql = "SELECT * FROM customers;";
                            $result = $con-> query($sql);
                            if ($result-> num_rows > 0)
                            {
                              while ($row = $result-> fetch_assoc())
                              {?>
                                <tr>
                                  
                                        <td scope='row'> <?php echo $row["id"] ?> </td>
                                         <td><?php echo $row["name"]; ?></td>
                                        <td> <?php echo $row["table_num"]?></td>
                                        <td class='text-end'><?php echo $row['head_count'] ?></span></i></td>
                                       <td class='text-end'><?php echo $row['status'] ?>
                                       <a href="process.php?serve=<?php echo $row["table_num"]?>"class="serve btn btn-success">                               
                                      <a href="process.php?delete=<?php echo $row["table_num"]?>" class="delete btn btn-danger"></a>
                                    </td></span></i></td>
                                      </tr>
                                        <?php
                              } 
                            }
                          ?>
                          </tbody>
                      </table>
                          </form>
                    </div>
                  </div>
                
                </div>

              </div>

            </div>
            
          </div>
 
        </div>
        <!-- Orders Card -->
        <div class="col-xl-4 col-md-12">

          <div class="card">
      
            <div class="card-content">

              <div class="card-body">

                <div class="media align-items-stretch">

                  <div class="container mt-5 px-2">
                    <div class="text" style="margin-top:-30px;">Order List</div>
                    <!-- <div class="mb-2 d-flex justify-content-between align-items-center">
                        <div class="position-relative d-flex justify-content-start">
                          <i class="fas fa-search ml-2 mt-2 mr-2"></i>
                          <input class="form-control w-100" placeholder="Search by order#, name...">
                        </div>
                    </div> -->
                    <div class="table-responsive-sm">
                      <table class="table table-responsive table-borderless">
                          <thead>
                              <tr class="bg-light">
                                  <th scope="col" width="5%">Table</th>
                                  <th scope="col" width="5%">Order</th>
                                  <th scope="col" class="text-end" width="5%"><span>Status</span></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <?php
                                  $sql = "SELECT * FROM order_list";
                                  $result = $con-> query($sql);

                                  if ($result-> num_rows > 0)
                                  {
                                    while ($row = $result-> fetch_assoc())
                                    {
                                      echo "<tr>
                                              <td scope='row'>" . $row["table_num_order"] . 
                                              "</td><td>" . $row["order"] . "</td><td>";
                                              if ($row["status"] == "Served")
                                              {
                                                echo "<i class='fas fa-check-circle green'></i>";
                                                echo "<span class='ms-1'> " . $row["status"] . "</span>";
                                              }
                                              else if ($row["status"] == "Pending")
                                              {
                                                echo "<i class='fas fa-circle yellow'></i>";
                                               echo "<span class='ms-1'> " . $row["status"] . "</span></td></tr>";  
                                              }                                           
                                    } 
                                  }
                                ?>
                              </tr>                              
                          </tbody>
                      </table>
                     <?php include 'footer.php'; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>
  <!-- The Modal -->
  <div id="myModal" class="modal">

  <!-- Modal content -->

  <div class="container">
    <div class="row"> 
      <div class="col-lg-6 mx-auto"> 
        <div class="modal-content">
          <div class="modal-header">
            <h2>Add Customer </h2>
            <i class="fas fa-user-plus mt-2 ml-1 fa-xl"></i>
         
            
          </div>
          <form method="post" action="">
            <div class="modal-body">

              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="Name" name="name" id="name">
              </div>

              <div class="row">

                <div class="col-xl-4">
                  <div class="input-group mb-3">
                    <div class="dropdown">
                      <div class="input-group">
                        <select name="table_num" data-placeholder="Select table..." class="btn btn-light dropdown-toggle" tabindex="2">                
                          <option value="1">TABLE 1</option>
                          <option value="2">TABLE 2</option>   
                          <option value="3">TABLE 3</option>
                          <option value="4">TABLE 4</option>
                          <option value="5">TABLE 5</option> 
                        </select>
                      </div>
                    </div>          
                  </div>
                </div>
                <div class="col-xl-8">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Head Count</span>
                    <input type="number" class="form-control" placeholder="Head Count" aria-label="Head Count" aria-describedby="basic-addon1" name="head_count" id="head_count" required>
                  </div>
                </div>

              </div>
            </div>
          
          <div class="modal-footer">
            <button type="submit" class="btn btn-light" name="btn_add" class='btn_add'>Add</button>
            <span class="close btn btn-warning">CLOSE</span>
          </div>
          </form>
        </div>
       
      </div> 
  </div>
  
  </div>
  

  <script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="javaScript.js"></script>
  <script src="ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body> 
</html>
<?php 

                
  if(isset($_POST['btn_add']))
  {
    include 'connect.php';
      $name =  $_POST['name'];
      $table_num =  $_POST['table_num'];
      $head_count =  $_POST['head_count'];
      $tableRes = "SELECT * FROM `order_list` WHERE `table_num_order` = $table_num";
      $tbNumRes = $con-> query($tableRes);
          
      $sql = "SELECT * FROM customers WHERE table_num = '$table_num';";
      $result = $con-> query($sql);
      
        if (empty($name) || empty($table_num) || empty($head_count)) 
        {
          echo "
          <script>			
          Swal.fire({
          icon: 'error',
          title: 'EMPTY FIELDS!',
        })
        location.reload()
        </script>;";
        exit();
        }
        else if($head_count <= 0)
        {
          echo "
          <script>			
          Swal.fire({
          icon: 'error',
          title: 'Invalid!',
          text: 'No negative value!',
          timer: 5000
        })
        </script>;";
        }
        else if($head_count >=6)
        {
          echo "
          <script>			
          Swal.fire({
          icon: 'error',
          title: 'Invalid!',
          text: 'MAXIMUM OF 6 PERSON(s) per table!',
          timer: 5000
        })
        </script>;";
        }
        else if($table_num <= 0)
        {
          echo "
          <script>			
          Swal.fire({
          icon: 'error',
          title: 'BUSY!',
          text: 'Dont enter negative value',
          'timer: 5000'
        })
        </script>;";
        }
       
      

        else if(mysqli_num_rows($result)>0)
        {
          echo "
          <script>			
          Swal.fire({
          icon: 'error',
          title: 'ALREADY!',
          text: 'Table no: " . $table_num ." is busy at the moment!',
          timer: 5000
        })
        </script>;";
        exit();
        }
        
        else
        {
          $dt2=date("Y-m-d H:i:s");
          mysqli_query($con, "INSERT INTO customers (`name`, `table_num`, `head_count` ) VALUES ('$name','$table_num','$head_count')");
          $price = $head_count*200;
          mysqli_query($con, "INSERT INTO `sale-history` (`customer_name`, `customer_count`, `total_price` ,`date`) 
          VALUES ('$name','$head_count','$price','$dt2')");
          echo "
          <script>
          Swal.fire(
            'SUCCESS!',
            'Succesfully added to waitlist at TABLE: ".$table_num."',
            'success'
          )
        </script>;";
          exit();
          }
        }

?>

                      