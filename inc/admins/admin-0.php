<?php include 'header.php';?>

<?php

        if(isset($_GET['do'])):
            $do = $_GET['do'];
            
            if(isset($_GET['id'])):
                $id = $_GET['id'];
                if ($do == 'activate'):           //travel page   ?> 

                    <div class="container">

                        <h2 class="text-center">Welcome To <?php echo $do;?> Page</h2>

                        <?php 
                            
                            
                            $stmt = $con->prepare("UPDATE users SET status = 1 WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();
                            echo $row;
                            
                            
                            $stmt = $con->prepare("SELECT user_name,email FROM users WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();?>
                            <h2 class="text-center alert alert-success"><?php echo $row['user_name'] . ' ' . $row['email'];?> ARE ACTIVATED <h2>
                        
                        
                    </div>


                <?php elseif ($do == 'info'):            //transport page   ?> 
                
                    <div class="container">

                        <h2 class="text-center">Welcome To <?php echo $do;?> Page</h2>

                        <?php 
                            
                            $stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();?>

                            <table class="table">
                              <tr class="bg-dark" style="color: #fff">
                                  <td>ID</td>
                                  <td>GroupID</td>
                                  <td>User Name</td>
                                  <td>Name</td>
                                  <td>Birthday Date</td>
                                  <td>Age</td>
                                  <td>Email</td>
                                  <td>Country</td>
                                  <td>Status</td>
                              </tr>
                              <tr>
                                  <td>#<?php echo $row['id']; ?></td>
                                  <td><?php echo $row['groupeID']; ?></td>
                                  <td><?php echo $row['user_name']; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['birthday_date']; ?></td>
                                  <td><?php echo $row['age']; ?></td>
                                  <td><?php echo $row['email']; ?></td>
                                  <td><?php echo $row['country']; ?></td>
                                  <td><?php echo $row['status']; ?></td>
                              </tr>
              
                            </table>

                    </div>


                <?php elseif ($do == 'delete'):           //hospital page   ?> 

                        <?php

                            //get the informations of the user where id = $id
                            $stmt = $con->prepare("SELECT user_name,id FROM users WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();

                            //check if the user exist in the database
                            if(isset($row['id'])):

                                //delete the user where id = $id
                                $stmt = $con->prepare("DELETE FROM users WHERE id = ?");
                                $stmt->execute(array($id));
                                //$row = $stmt->fetch();
                        ?>

                                <h2 class="text-center alert alert-success"><?php echo $row['user_name'];?> DELETED</h2>

                            <?php else:?>

                                <h2 class="text-center alert alert-danger">This User Not Exist</h2>

                            <?php endif;?>

                <?php endif;?>

            <?php else:?>

                <h2 class="text-center alert alert-danger">This user Not Found</h2>

            <?php endif;?>

        <?php else: ?>
                <div class="container mt-5">
                  <h2 class="text-center alert alert-danger">This Page Not Found</h2>
                </div>
        <?php endif;?>



<?php include 'footer.php';?>
