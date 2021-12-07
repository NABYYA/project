   <?php
    include 'connect.php';
   ?>
   <div class="sidebar">
    <div class="logo-details">
      <i>
        <img src="logo.png" alt="logoMain.png" class='icon' style="height: 40px; width: 40px; margin-top: -5px;">
      </i>
        <div class="logo_name">Lucky Wings</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      
      <li>
        <a href="dashboard.php">
          <i class='bx bx-bar-chart-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="orders.php" >
         <i class='bx bx-receipt'></i>
         <span class="links_name">Orders</span>
       </a>
       <span class="tooltip">Orders</span>
     </li>
     <li>
       <a href="tables.php">
         <i class='bx bxs-dashboard' ></i>
         <span class="links_name">Tables</span>
       </a>
       <span class="tooltip">Tables</span>
     </li>
     <li>
       <a href="data.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Data</span>
       </a>
       <span class="tooltip">Data</span>
     </li>
     <li>
       <a href="setting.php">
         <i class='bx bx-cog'></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
            <i class='bx bx-user'></i>
           <div class="name_job">
             <div class="name">Admin</div>
             <div class="job">Cashier</div>
           </div>
         </div>
         <a href="newlogin.php"><button  class='bx bx-log-out' id="log_out" ></button></a>
     </li>
    </ul>
  </div>