<?php include 'header.php';?>
  <?php 
  session_start();
  //if the id is from to user ==> enter to dashboard || if id is from to admin enter to admin
    //$stmt = $con->prepare("SELECT email FROM users WHERE email = ? AND password=?");
    //$stmt->execute(array($_POST['email'], $_POST['pass']));
    //$count = $stmt->rowCount();
    if(isset($_GET['agid'])):
      $agid = $_GET['agid'];
        if(isset($_GET['do'])):
          $do = $_GET['do'];

    ?>
          <div class="container">
            
            <?php if($agid == 0): //admin access to some methods [add,active,delete,edit members]?>

              <?php if($do == 'notification'): ?>

                <div class="row">
                  <section class="mt-4 mb-4 text-center justify-content-center">
                    <h2 class="text-center alert alert-dark p-0">This Uslk,k,nkjner Not Found</h2>
                  </section>
                </div>

              <?php elseif($do == 'members'): ?>

                <div class="row">
                  <section class="mt-4 mb-4 text-center justify-content-center">

                      <?php //get the members not activate
                        $stmt = $con->prepare("SELECT * FROM users WHERE status = 0");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();
                      ?>
                      <?php //while(isset($row['email'])):?>
                          <table class="main-table taxt-center table table-bordered ">
                            <tr class="bg-dark" style="color: #fff;">
                              <td>#ID</td>
                              <td>User Name</td>
                              <td>Email</td>
                              <td>Age</td>
                              <td>Country</td>
                              <td>Links</td>
                            </tr>

                              <?php //foreach for show all items
                                  foreach ($rows as $row): ?>

                                    <tr>
                                      <td><?php echo $row['id'];?></td>
                                      <td><?php echo $row['user_name'];?></td>
                                      <td><?php echo $row['email'];?></td>
                                      <td><?php echo $row['age'];?></td>
                                      <td><?php echo $row['country'];?></td>
                                      <td>
                                        <a href="admin-0.php?do=activate&id=<?php echo $row['id'];?>" class="btn btn-success">Activate</a>
                                        <a href="admin-0.php?do=info&id=<?php echo $row['id'];?>" class="btn btn-primary">Info</a>
                                        <a href="admin-0.php?do=delete&id=<?php echo $row['id'];?>" class="btn btn-dark">Delete</a>
                                      </td>
                                    </tr>

                                  <?php endforeach;?>

                          </table>
                        <?php //endwhile;?>


                  </section>
                </div>

              <?php elseif($do == 'items'): ?>

                <div class="row">
                  <section class="mt-4 mb-4 text-center justify-content-center">
                    <h2 class="text-center alert alert-dark p-0">This User Not Founk;, nkj d items</h2>
                  </section>
                </div>

              <?php endif; ?>

            <?php elseif($agid == 1): //admin access to some methods [addproduct,activeproduct,deleteproduct,sendemail]?>
              

              <?php if($do == 'notification'): ?>

                <div class="row">
                  <section class="mt-4 mb-4 text-center justify-content-center">
                    <h2 class="text-center alert alert-dark p-0">This Uslk,k,nkjner Not Found</h2>
                  </section>
                </div>

              <?php elseif($do == 'members'): ?>

                  <div class="row">
                  <section class="mt-4 mb-4 text-center justify-content-center">
                    <h2 class="text-center alert alert-dark p-0">This Uslk,k,nkjner Not Found</h2>
                  </section>
                </div>

              <?php elseif($do == 'items'): ?>

                  <div class="row">
                  <section class="mt-4 mb-4 text-center justify-content-center">

                      <?php //get the members not activate
                        $stmt = $con->prepare("SELECT * FROM reserve WHERE status = 0");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();
                      ?>

                      <?php //while(isset($row['email'])):?>
                          <table class="main-table taxt-center table table-bordered ">
                            <tr class="bg-dark" style="color: #fff;">
                              <td>#ID</td>
                              <td>User Name</td>
                              <td>User ID</td>
                              <td>Date</td>
                              <td>Status</td>
                              <td>Links</td>
                            </tr>

                              <?php //foreach for show all items
                                  foreach ($rows as $row): ?>

                                    <tr>
                                      <td><?php echo $row['id'];?></td>
                                      <td><?php echo $row['userName'];?></td>
                                      <td><?php echo $row['userId'];?></td>
                                      <td><?php echo $row['date'];?></td>
                                      <td><?php echo $row['status'];?></td>
                                      <td>
                                        <a href="admin-1.php?do=activate&id=<?php echo $row['id'];?>" class="btn btn-success">Activate</a>
                                        <a href="admin-2.php?do=info&id=<?php echo $row['id'];?>" class="btn btn-primary">Info</a>
                                        <a href="admin-2.php?do=delete&id=<?php echo $row['id'];?>" class="btn btn-dark">Delete</a>
                                      </td>
                                    </tr>

                                  <?php endforeach;?>

                          </table>
                        <?php //endwhile;?>

                  </section>
                </div>

              <?php endif; ?>


            <?php elseif($agid == 2): //seller add any products ?>

              
              <?php if($do == 'notification'): ?>

                <div class="row">
                  <section class="mt-4 mb-4 text-center justify-content-center">
                    <h2 class="text-center alert alert-dark p-0">This Uslk,k,nkjner Not Found</h2>
                  </section>
                </div>

              <?php elseif($do == 'members'): ?>

                  <div class="row">
                    <section class="mt-4 mb-4 text-center justify-content-center">
                      <h2 class="text-center alert alert-dark p-0">This Uslk,k,nkjner Not Found</h2>
                    </section>    
                  </div>

              <?php elseif($do == 'items'): ?>

                  <div class="row">
                    <section class="mt-4 mb-4 text-center justify-content-center">

                        <?php //get the user name where gid = 2
                          $stmt = $con->prepare("SELECT user_name,id FROM users WHERE groupeID = 2");
                          $stmt->execute();
                          $row = $stmt->fetch();
                        ?>
                        <?php //get the members not activate
                          $stmt = $con->prepare("SELECT * FROM reserve WHERE userName = ?");
                          $stmt->execute(array($row['user_name']));
                          $rows = $stmt->fetchAll();
                        ?>

                          <?php //while(isset($row['email'])):?>
                            <table class="main-table taxt-center table table-bordered ">
                              <tr class="bg-dark" style="color: #fff;">
                                <td>#ID</td>
                                <td>User Name</td>
                                <td>User ID</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Links</td>
                              </tr>

                                <?php //foreach for show all items
                                    foreach ($rows as $row): ?>

                                      <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['userName'];?></td>
                                        <td><?php echo $row['userId'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        <td>
                                          <a href="admin-2.php?do=info&id=<?php echo $row['id'];?>" class="btn btn-primary">Info</a>
                                          <a href="admin-2.php?do=delete&id=<?php echo $row['id'];?>" class="btn btn-dark">Delete</a>
                                        </td>
                                      </tr>

                                    <?php endforeach;?>

                            </table>
                          <?php //endwhile;?>

                    </section>
                  </div>

              <?php endif; ?>



            <?php endif; ?>

          </div>

      <?php 

        else:?>
            <div class="container mt-5">
                <h2 class="text-center alert alert-danger">This Page Not Found</h2>
            </div>
      <?php endif;

    else:?>
        <div class="container mt-5">
          <h2 class="text-center alert alert-danger">This Page Not Found</h2>
        </div>


    <?php endif;
    ?>

    <?php include 'footer.php';?>