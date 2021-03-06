<!DOCTYPE html>
<html lang="en"><head><link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"><link href="bootstrap.min.css" rel="stylesheet"><link href="font-awesome.min.css" rel="stylesheet" type="text/css"><script src="https://code.jquery.com/jquery-3.3.1.js"></script><script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>User Tables</title>
  <!-- Bootstrap core CSS-->
  <link href="bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="narrow.css" rel="stylesheet">
</head>

<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.php">Jquery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="selectphp.php">PHP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="byname.php">By Name</a>
            </li> <li class="nav-item">
              <a class="nav-link" href="byemail.php">By Email</a>
            </li><li class="nav-item">
              <a class="nav-link" href="bymobile.php">By Mobile</a>
            </li><li class="nav-item">
              <a class="nav-link" href="byage.php">By Age</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">User Input and Display</h3>
      </div>
<div class='container'><hr>

 
      

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Users</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Date of Birth</th>
                  <th>Age</th>
                  <th>Start Date</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Date of Birth</th>
                  <th>Age</th>
                  <th>Start Date</th>
                  <th>Email</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
              require "con.php";
              
       $stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch()) {
    
$now = date("Y-m-d");
$agx = date_diff(date_create($row["birthdate"]), date_create($now));
$ag = $agx->format('%y');


            echo "<tr>";
            
               echo "<td>" . $row["name"]. ' ' . $row["surname"] . "</td>";
               
               echo "<td>" . $row["mobile"] . "</td>"; 
               echo "<td>" . $row["birthdate"] . "</td><td>" . $ag . "</td><td>" . $row["ins_time"] . "</td><td>" . $row["email"] . "</td>"; 
               echo "</tr>";
               

               } 
               ?>
              
             
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Project 2018</small>
        </div>
      </div>
    </footer>
    
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>
    
  </div>
</body>

</html>
