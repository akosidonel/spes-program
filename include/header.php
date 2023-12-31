<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../assets/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/adminStyle.css">
</head> 
<body>
     <div class="form-group">
    	<div class="footer">
        <img src="../assets/img/top-banner.jpg">
        </div>
         <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="dashboard.php"><b>Dashboard</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">SPES Accounts</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">            
                      <li><a class="dropdown-item" href="adminIndex.php">Active</a></li>
                      <li><a class="dropdown-item" href="blacklisted.php">Blacklisted</a></li>
                    </ul>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="SPESpending.php">SPES Application</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="spesDeployment.php">SPES Deployment</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="records.php">SPES Records</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="adminIndex2.php">Admin Account</a>
              </li>
              </ul>
              <ul class="nav justify-content-end">
              <li class="nav-item">
			        <a href="logout.php" class="btn btn-danger my-2">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      </div>
 </div>