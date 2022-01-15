<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <?php include 'head.php';?>

    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   </head>
<body>
  
 <?php 
  include 'navbar.php';
 ?>

  <section class="home-section">
    <div class="text"></div>
    

    <div class="grey-bg container-fluid">

    
    <section id="stats-subtitle">
      <div class="row">
        <div class="col-12 mt-3 mb-1">
          <h4 class="text-uppercase">Statistics for LUCKY WINGS!</h4>
       
        </div>
      </div>

      <?php 
      include 'connect.php';
        $sql = "SELECT SUM(total_price) as sum FROM `sale-history`;";
        $query_result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($query_result))
        {
          $output = "₱" . " ".$row['sum'];
        }
        $sql = "SELECT SUM(total_price) as sum FROM `sale-history`;";
        $query_result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($query_result))
        {
          $output = "₱" . " ".$row['sum'];
        }
      ?>
      <div class="row">
        <div class="col-xl-6 col-md-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-stretch">
                  <div class="align-self-center">
                  <h1 class="mr-2"><?php echo $output; ?></h1>
                  </div>
                  <div class="media-body">
                    <h4>Total Sales</h4>
                    <span> Sales Amount</span>
                  </div>
                  <div class="align-self-center">
                    <i class="icon-heart danger font-large-2"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
        
        $sql = "Select product_name as sum from menu where total_orders = (select max(total_orders) from menu);";
        $query_result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($query_result))
        {
          $bestwings = " ".$row['sum'];
        } 
      ?>   
        <div class="col-xl-6 col-md-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body cleartfix">
                <div class="media align-items-stretch">
                  <div class="align-self-center">
                    <h1 class="mr-2"><?php echo $bestwings; ?></h1>
                  </div>
                  
                    
                            <div class="media-body">
                    <h4>BEST SELLING WINGS!</h4>
                    <span></span>
                  </div>
                  <div class="align-self-center">
                    <i class="icon-wallet success font-large-2"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section id="minimal-statistics">
        <div class="row">
          <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Minimal Statistics Cards</h4>
            <p>Statistics on minimal cards.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12"> 
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                  <?php
           $query = "SELECT MONTHNAME(date), SUM(total_price) FROM `sale-history` WHERE MONTH(date) = MONTH(CURRENT_DATE());";
           $result = mysqli_query($con, $query, MYSQLI_USE_RESULT);
      
           ?>
             <div class="media-body text-right">
               <h3><?php 
               if ($result) {
                 while ($row = mysqli_fetch_row($result)) {
                  echo $row[0] . '<br> ₱' .$row[1];
                 }
              } else {
                     echo 0;
              }
              ?></h3>
                      <span>THIS MONTH TOTAL SALES!</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-speech warning font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>156</h3>
                      <span>New Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
                      $sql = "SELECT SUM(customer_count) as sum FROM `sale-history`;";
                      $query_result = mysqli_query($con, $sql);
                      while($row = mysqli_fetch_assoc($query_result))
                      {
                        $output = $row['sum'];
                      }
                      $sql = "SELECT SUM(customer_count) as sum FROM `sale-history`;";
                      $query_result = mysqli_query($con, $sql);
                      while($row = mysqli_fetch_assoc($query_result))
                      {
                        $output = $row['sum'];
                      }
                    ?>
                                    <h3 class="danger"><?php echo $output; ?></h3>
                      <span>Total Visits</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-direction danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress mt-1 mb-0" style="height: 7px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <script type="text/javascript" src="javaScript.js"></script>
  <?php 
$query = "SELECT sum(total_price) as 'total_price', MONTHNAME(date) as 'month', DAY(date) as 'day' FROM `sale-history` WHERE MONTH(date) = MONTH(CURRENT_DATE()) GROUP BY DATE(date);;";
$result = mysqli_query($con, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{Date:'".$row["month"]." ".$row["day"]."', dailySales:".$row["total_price"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 class="text-center">THIS MONTH SALES! </h2>
   <h3 class="text-center">THIS IS CHART PER DAY IN THIS MONTH!</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'Date',
 ykeys:['dailySales'],
 labels:['Price'],
 hideHover:'auto',
 stacked:true
});
</script>
</body>
</html>
