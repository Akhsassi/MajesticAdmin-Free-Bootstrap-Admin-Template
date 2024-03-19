<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shop Agadir Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>


<?php
require_once __DIR__ . "/../conn.php";

session_start();


$stmt = $pdo->query("SELECT SUM(quantity * price) AS total_sales FROM orders");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$total_sales = $row['total_sales'];

?>

<body>

  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand brand-logo" href="index.php"><img src="../img/logow.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-4 w-100">
        <li class="nav-item nav-search d-none d-lg-block w-100">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="search">
                <i class="mdi mdi-magnify"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Search now" aria-label="search"
              aria-describedby="search">
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown me-1">
          <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
            id="messageDropdown" href="#" data-bs-toggle="dropdown">
            <i class="mdi mdi-message-text mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
              </div>
              <div class="item-content flex-grow">
                <h6 class="ellipsis font-weight-normal">David Grey
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  The meeting is cancelled
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
              </div>
              <div class="item-content flex-grow">
                <h6 class="ellipsis font-weight-normal">Tim Cook
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  New product launch
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
              </div>
              <div class="item-content flex-grow">
                <h6 class="ellipsis font-weight-normal"> Johnson
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  Upcoming board meeting
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown me-4">
          <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
            id="notificationDropdown" href="#" data-bs-toggle="dropdown">
            <i class="mdi mdi-bell mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-success">
                  <i class="mdi mdi-information mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">Application Error</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Just now
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-warning">
                  <i class="mdi mdi-settings mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">Settings</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Private message
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-info">
                  <i class="mdi mdi-account-box mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">New user registration</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <img src="images/faces/face5.jpg" alt="profile" />
            <span class="nav-profile-name">Louis Barnett</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a href="../logout.php" class="dropdown-item">
              <i class="mdi mdi-logout text-primary"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper overflow-hidden vh-100">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel overflow-auto">
      <div class="content-wrapper">

        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
              <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">
                  <h2>Welcome back,</h2>
                  <p class="mb-md-0">Your analytics dashboard.</p>
                </div>
                <div class="d-flex">
                  <i class="mdi mdi-home text-muted hover-cursor"></i>
                  <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                  <p class="text-primary mb-0 hover-cursor">Analytics</p>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-end flex-wrap">
                <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                  <i class="mdi mdi-cart-outline text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                  <i class="mdi mdi-clock-outline text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                  <i class="mdi mdi-plus text-muted"></i>
                </button>
                <button class="btn btn-primary mt-2 mt-xl-0" onclick="window.location.href='../all.php';">Add
                  Product</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body dashboard-tabs p-0">
                <div class="tab-content py-0 px-0">
                  <div class="tab-pane show active" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                      <div
                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-calendar-heart icon-lg me-3 "></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted"> Date</small>
                          <h5 class="mb-0 d-inline-block text-dark">
                            <?php echo date('d M Y'); ?>
                          </h5>


                        </div>
                      </div>
                      <div
                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-cash icon-lg  me-3"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted">Sales</small>
                          <b>
                            <?= $total_sales ?> DH
                          </b>
                        </div>
                      </div>

                      <?php
                     

                      
                     
                      $stmt = $pdo->query("SELECT COUNT(*) as num_customers FROM users WHERE role = 'customer'");
                      $result = $stmt->fetch(PDO::FETCH_ASSOC);
                      $num_customers = $result['num_customers'];
                      ?>

                      <div
                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-account-group me-3 icon-lg"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted">Customers</small>
                          <?php
                         
                          echo '<h5 class="me-2 mb-0">' . $num_customers . '</h5>';
                    
?>
                        </div>
                      </div>


                      <?php

                      $stmt = $pdo->query("SELECT COUNT(*) as total_orders FROM orders");
                      $result = $stmt->fetch(PDO::FETCH_ASSOC);
                      $total_orders = $result['total_orders'];
                      ?>

                      <div
                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="mdi mdi-cart-outline me-3 icon-lg "></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted">Orders</small>
                          <h5 class="me-2 mb-0">
                            <?php echo $total_orders;
                                  $ratio_products_per_customer = $total_orders > 0 ? $total_orders / $num_customers : 0;
                              
                              ?>
                          </h5>
                          
                        </div>
                      </div>
                      <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
    <i class="mdi mdi-percent me-3 icon-lg"></i>
    <div class="d-flex flex-column justify-content-around">
        <small class="mb-1 text-muted">Product per cust.</small>
        <h5 class="me-2 mb-0"><?php echo $ratio_products_per_customer; ?></h5>
    </div>
</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Cash deposits</p>
                <?php

                $date7daysAgo = date('Y-m-d', strtotime('-7 days'));

                $stmt = $pdo->prepare("SELECT p.category, SUM(o.quantity) AS total_orders
                       FROM orders o
                       INNER JOIN products p ON o.product_id = p.id
                       WHERE o.date_added >= :date
                       AND p.category = 'F'");
                $stmt->execute(['date' => $date7daysAgo]);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);



                $salesData = [];
                foreach ($result as $row) {
                  $salesData[$row['category']] = $row['total_orders'];
                }


                ?>
                <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write
                  details</p>
                <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                <canvas id="cash-deposits-chart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Total sales</p>
                <h1>
                  <?= $total_sales ?> DH
                </h1>
                <h4>Gross sales over the years</h4>
                <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store
                  useful information. Therefore, it is important </p>
                <div id="total-sales-chart-legend"></div>
              </div>
              <canvas id="total-sales-chart"></canvas>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Data</p>
                <div class="table-responsive">
                  <table id="recent-purchases-listing" class="table">
                    <thead>
                      <tr>
                        <th>Client</th>
                        <th>Product</th>
                        <th>Phone</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total Price</th>
                        <th>Date</th>
                        <th>Address</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                     
                      $stmt = $pdo->prepare("SELECT os.*, pd.name as product FROM orders os INNER JOIN products pd ON os.product_id = pd.id");
                      $stmt->execute();
                      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


                      if (count($result) > 0) {
                        foreach ($result as $row) {
                          ?>
                          <tr>
                            <td>
                              <?= $row['first_name'] . $row['last_name']; ?>
                            </td>
                            <td>
                              <?= $row['product']; ?>
                            </td>
                            <td>
                              <?= $row['phone']; ?>
                            </td>
                            <td>
                              <?= $row['quantity']; ?>
                            </td>
                            <td>
                              <?= $row['price'] . ' DH'; ?>
                            </td>
                            <td>
                              <?= ($row['quantity'] * $row['price']) . ' DH'; ?>
                            </td>
                            <td>
                              <?= $row['date_added']; ?>
                            </td>
                            <td>
                              <?= $row['address'] . ' ' . $row['city']; ?>
                            </td>
                          </tr>
                          <?php
                        }
                      } else {
                        echo "<tr><td colspan='6'>No data found</td></tr>";
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
  </div>
  </div>
  </div>
  </div>
 
  </div>
  
  <script src="vendors/base/vendor.bundle.base.js"></script>
 
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>


  </script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>