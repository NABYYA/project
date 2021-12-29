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
                    <span>Monthly Sales Amount</span>
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
                    <div class="media-body text-right">
                      <h3>Buffallo</h3>
                      <span>Most Purchased Flavor</span>
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
                    <div class="align-self-center">
                      <i class="icon-graph success font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>64.89 %</h3>
                      <span>Bounce Rate</span>
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
                      <i class="icon-pointer danger font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3>423</h3>
                      <span>Total Visits</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">278</h3>
                      <span>New Projects</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-rocket danger font-large-2 float-right"></i>
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
                      <h3 class="success">156</h3>
                      <span>New Clients</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-user success font-large-2 float-right"></i>
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
                      <h3 class="warning">64.89 %</h3>
                      <span>Conversion Rate</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
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
                      <h3 class="primary">423</h3>
                      <span>Support Tickets</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-support primary font-large-2 float-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="primary">278</h3>
                      <span>New Posts</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-book-open primary font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress mt-1 mb-0" style="height: 7px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <h3 class="warning">156</h3>
                      <span>New Comments</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-bubbles warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress mt-1 mb-0" style="height: 7px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <h3 class="success">64.89 %</h3>
                      <span>Bounce Rate</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-cup success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress mt-1 mb-0" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <h3 class="danger">423</h3>
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
</body>
</html>
