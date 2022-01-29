<?php include '../../init.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../<?php echo $css . 'main.css'; ?>">
    <link rel="stylesheet" href="../../<?php echo $css . 'users-style.css'; ?>">

    <title>Admin Dashboard</title>
  </head>
  <body>
    
    <header class="row bg-danger">
    <?php if(isset($_GET['agid'])):
            $agid = $_GET['agid'];
          endif;
      ?>
      <nav class="navbar float-start navbar-expand-lg navbar-light col-md-4 ">
        <div class="container-fluid col-md-2 col-sm-2">
          <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        </div>
        <div class="center col-md-8 col-sm-8">
          <!--
          <h3 class=" float-start mr-2"><?php 
            /*if(isset($_GET['do'])){
              echo $_GET['do'];
            }*/?></h3>-->
            
        </div>
      </nav>
      <div class=" col-md-8 col-sm-2 mt-4">

        <div class="dropdown float-start">
            <button class="btn dropdown-toggle bg-c-yellow mt-2" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="far fa-bell mr-1"></i>notifications
            </button>
            <ul class="dropdown-menu mt-4 bg-danger" aria-labelledby="dropdownMenuButton1">
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="?agid=<?php echo $agid;?>&do=items"><i class="far fa-user-circle mr-1"></i>Items</a></li>
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="?agid=<?php echo $agid;?>&do=members"><i class="fas fa-cog mr-1"></i>Members</a></li>
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="?agid=<?php echo $agid;?>&do=notification"><i class="far fa-bell mr-1"></i>Notification</a></li>
            </ul>
        </div>


        <div class="dropdown float-end mr-1">
            <button class="btn dropdown-toggle bg-c-yellow mt-2" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="far fa-user-circle mr-1"></i>Profile
            </button>
            <ul class="dropdown-menu mt-4 bg-danger" aria-labelledby="dropdownMenuButton1">
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="profile.php"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="settings.php"><i class="fas fa-cog mr-1"></i>Settings</a></li>
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="../../logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
            </ul>
        </div>
      </div>

    </header>

    