<?php include 'init.php';?>
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
    <link rel="stylesheet" href="<?php echo $css . 'main.css'; ?>">
    <link rel="stylesheet" href="<?php echo $css . 'style.css'; ?>">

    <title>OReservation</title>
</head>
<body>
    
<header class="row">
  <nav class="navbar float-start navbar-expand-lg navbar-light bg-light col-md-12">
    <div class="container-fluid col-md-9 col-sm-9">
      <a class="float-start fs-2" href="index.php">OReservation</a>
    </div>
      <a href="login.php" id="login" class="col-md-1 col-sm-2">Login</a>
      
      <button class="float-end bg-c-yellow ml-1 col-md-1" style="background-color: #f7cd6e !important; padding-top: 1px; padding-bottom: 1px;border: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="fas fa-caret-square-up"></i>
      </button>
    <!--<button class="navbar-toggler col-md-1" style="margin-right : 1rem !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>-->
  </nav>      

 
  <div class="offcanvas offcanvas-start bg-info" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Others</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body  bg-info">
            <div>
              others pzeodkzpeod,pzekdf,ozk,dlk,dakz
            </div>

            
            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Pages 
              </button>
              <ul class="dropdown-menu mt-4  bg-info" aria-labelledby="dropdownMenuButton2">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="page.php?do=show"><i class="far fa-user-circle mr-1"></i>Show</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="page.php?do=pay"><i class="fas fa-cog mr-1"></i>Pay</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="page.php?do=reserve"><i class="fas fa-sign-out-alt mr-1 flip"></i>Reserve</a></li>
              </ul>
            </div>


            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Ministries
              </button>
              <ul class="dropdown-menu mt-4 bg-info" aria-labelledby="dropdownMenuButton1">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

          <div class="dropdown  dropend mt-2 bg-info">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Embassies 
              </button>
              <ul class="dropdown-menu mt-4  bg-info" aria-labelledby="dropdownMenuButton2">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

          <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>transport
              </button>
              <ul class="dropdown-menu mt-4  bg-info" aria-labelledby="dropdownMenuButton3">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>works & courses
              </button>
              <ul class="dropdown-menu mt-4  bg-info" aria-labelledby="dropdownMenuButton4">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Pay Online
              </button>
              <ul class="dropdown-menu mt-4  bg-info" aria-labelledby="dropdownMenuButton5">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Hotels Online
              </button>
              <ul class="dropdown-menu mt-4  bg-info" aria-labelledby="dropdownMenuButton6">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>E-Commerce
              </button>
              <ul class="dropdown-menu mt-4  bg-info" aria-labelledby="dropdownMenuButton7">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Hotels Online
              </button>
              <ul class="dropdown-menu mt-4 bg-info" aria-labelledby="dropdownMenuButton8">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Registre Online
              </button>
              <ul class="dropdown-menu mt-4 bg-info" aria-labelledby="dropdownMenuButton9">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Studies
              </button>
              <ul class="dropdown-menu mt-4 bg-info" aria-labelledby="dropdownMenuButton9">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>




          </div>
      </div>


</header>