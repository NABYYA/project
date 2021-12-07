<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'head.php';?>
    <script type="text/javascript" src="javaScript.js"></script>
  </head>
<body>
  <?php 
  include 'navbar.php';
  ?>
  <section class="home-section">
    <div class="text">Settings / Modify</div>
    <!-- Settings -->
      <div class="container-fluid">
        <button type="button" class="btn btn-lg" style="background-color: #FA8334; color: white;"> <a href="setting.php" style="background-color: #FA8334; color: white; text-decoration: none;"> Modify</a></button>
        <button type="button" class="btn btn-lg" style="background-color: #FA8334; color: white;"> <a href="account.php" style="background-color: #FA8334; color: white; text-decoration: none;">  Account </a></button>
      </div>
      <div class="container-fluid d-flex justify-content-between">
      <div class="row">
      <!-- modify -->
      <div class="col">
      <div class="container-fluid mt-2 mb-2 shadow-lg rounded" style="background-color: #ffa86e; width: 500px; height: 300px; border-radius: 10px;">

        <div class="input-group pt-2 pb-2">
          <span class="input-group-text" id="inputGroup-sizing-default" style="cursor: context-menu;">Flavor:</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group ">
          <label class="input-group-text" for="inputGroupSelect01">Categories:</label>
          <select class="form-select" id="inputGroupSelect01" style="width: 344px;">
            <option selected></option>
            <option value="1">Wings</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="input-group mt-2 mb-2">                 
          <?php if (isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
          <?php endif ?>
            <form action="upload.php" method="post" enctype="multipart/form-data">
              <input type="file" name="picture">
              <input type="submit" name="submit" value="Upload">
              </form>
        </div>
        <div class="d-grid d-md-block text-center">
          <button class="btn" style="background-color: #FA8334; color: white;" type="button">Add Item</button>
          <button class="btn" style="background-color: #FA8334; color: white;" type="button">Update Item</button>
          <button class="btn" style="background-color: #FA8334; color: white;" type="button">Delete Item</button>
        </div>
    </div>
    </div> 
          <!-- items list -->
        <div class="col">
              <div class="container-fluid mt-2 mb-2 p-2 shadow-lg rounded" style="background-color: #ffa86e; border-radius: 10px;">
            <!-- list starts here -->
            <table class="table table-striped table-hover">
            <thead>
              <th>Name</th>
              <th>Image</th>
              <th>Availability</th>
            </thead>
            <tbody>
            <?php
              $sql = "SELECT * FROM menu";
              $result = $con-> query($sql);
              if ($result-> num_rows > 0)
              {
                while ($row = $result-> fetch_assoc())
                {
                  echo "<tr>
                          <td scope='row'>" . $row["product_name"] . "</td>
                          <td></td>
                          <td> <label class='switch'>
                                  <input type='checkbox'>
                                  <span class='slider round'></span>
                                </label> 
                          </td>";
                          }                                           
                }
            ?>             
            </tbody>
            </table>
          </div>
      </div>
    </div>
</div>
  </section> 
</body>
</html>
