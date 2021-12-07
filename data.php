<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <?php include 'head.php';?>
    <style>
      * {
        box-sizing: border-box;
      }

      #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
      }

      #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
      }

      #myTable th, #myTable td {
        text-align: left;
        padding: 12px;
      }

      #myTable tr {
        border-bottom: 1px solid #ddd;
      }

      #myTable tr.header, #myTable tr:hover {
        background-color: #f1f1f1;
      }
    </style>
  </head>
<body>

 
  <?php 
  include 'navbar.php';
  ?>
   <div class="home-section">
    <div class="container-fluid"> 
      <div class="row">
        <!-- Customers Card -->
        <div class="col-xl-8 col-md-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media align-items-stretch">         
                  <div class="container mt-5 px-2">
                    <div class="text" style="margin-top:-30px;">TRANSACTION HISTORY</div>    
                    <div class="text" style="margin-right: 30px;"> 
                  </div>  
                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

                  <table class="table table-responsive table-borderless" id="myTable">
                          <thead>
                              <tr class="bg-light">
                                  <th scope="col" width="5%">Transaction ID</th>
                                  <th scope="col" width="5%" >Customer Name</th>
                                  <th scope="col" width="5%" >Customer Count</th>
                                  <th scope="col" width="5%">Total Price</th>
                                  <th scopse="col" width="5%">Date</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            $sql = "SELECT * FROM `sale-history`;";
                            $result = $con-> query($sql);
                            if ($result-> num_rows > 0)
                            {
                              while ($row = $result-> fetch_assoc())
                              {?>
                                <tr>
                                        <td scope='row'> <?php echo $row["customer_id"] ?> </td>
                                         <td><?php echo $row["customer_name"]; ?></td>
                                        <td> <?php echo $row["customer_count"]?></td>
                                        <td class='text-end'><?php echo $row['total_price'] ?></span></i></td>
                                       <td class='text-end'><?php echo $row['date'] ?></td>
                                      </tr>
                                        <?php
                              } 
                            }
                          ?>
                          </tbody>
                      </table>


                     <div class="table-responsive">
                     
                    </div> 
                  </div>
                
                </div>

              </div>

            </div>
            
          </div>
 
        </div>
        
      </div>  
<?php       
include 'footer.php'
?>


       