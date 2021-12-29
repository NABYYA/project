
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
                                      <a href="<?php echo $row["table_num"]?>" class="delete btn btn-danger"></a>
                                    </td></span></i></td>
                                      </tr>
                                        <?php
                              } 
                            }
                          ?>
                          </tbody>
                      </table>
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
                                      "</td><td>" . $row["orders"] . "</td><td>";
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
          <form method="post" action="process.php">
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
  <script>
    $('.delete').on('click',function (e){
        e.preventDefault();
        var self = $(this);
        var table_id = self.attr('href');
        console.log(self.data('title'));
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
        url: "ajax_delete.php",
        type: "post",
       
        data: {'id': table_id},
        success: function (response) {
          var data = JSON.parse(response);
          console.log(data);
          if (data.alert == 1) 
          {
            self.parents('tr').remove();
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
          }
          else
          {
            Swal.fire(
            'NOT!',
            'Your has not been deleted.',
            'danger'
            )
          }
          
        },

        });
           
        }
        })
    })

</script>
</body> 
</html>


                      