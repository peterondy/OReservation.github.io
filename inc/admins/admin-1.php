<?php include 'header.php';?>

<?php

        if(isset($_GET['do'])):
            $do = $_GET['do'];
            
            if(isset($_GET['id'])):
                $id = $_GET['id'];
                if ($do == 'activate'):           //activate page   ?> 

                    <div class="container">

                        <h2 class="text-center">Welcome To <?php echo $do;?> Page</h2>

                        <?php 
                            
                            
                            $stmt = $con->prepare("UPDATE reserve SET status = 1 WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();
                            echo $row;
                            
                            
                            $stmt = $con->prepare("SELECT userName,date FROM reserve WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();?>
                            <h2 class="text-center alert alert-success"><?php echo $row['userName'] . ' ' . 'added en' . $row['date'];?> ARE ACTIVATED <h2>
                        
                        
                    </div>


                <?php elseif ($do == 'info'):            //info page   ?> 
                
                    <div class="container">

                        <h2 class="text-center">Welcome To <?php echo $do;?> Page</h2>

                        <?php 
                            
                            $stmt = $con->prepare("SELECT * FROM reserve WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();?>

                            <table class="table">
                              <tr class="bg-dark" style="color: #fff">
                                  <td>ID</td>
                                  <td>userID</td>
                                  <td>User Name</td>
                                  <td>Position ID</td>
                                  <td>Option ID</td>
                                  <td>Date</td>
                                  <td>Status</td>
                              </tr>
                              <tr>
                                  <td>#<?php echo $row['id']; ?></td>
                                  <td><?php echo $row['userId']; ?></td>
                                  <td><?php echo $row['userName']; ?></td>
                                  <td><?php echo $row['positionId']; ?></td>
                                  <td><?php echo $row['optionId']; ?></td>
                                  <td><?php echo $row['date']; ?></td>
                                  <td><?php echo $row['status']; ?></td>
                              </tr>
              
                            </table>

                    </div>


                <?php elseif ($do == 'delete'):           //hospital page   ?> 

                        <?php

                            //get the informations of the user where id = $id
                            $stmt = $con->prepare("SELECT userName,id FROM reserve WHERE id = ?");
                            $stmt->execute(array($id));
                            $row = $stmt->fetch();

                            //check if the user exist in the database
                            if(isset($row['id'])):

                                //delete the user where id = $id
                                $stmt = $con->prepare("DELETE FROM reserve WHERE id = ?");
                                $stmt->execute(array($id));
                                //$row = $stmt->fetch();
                        ?>

                                <h2 class="text-center alert alert-success"><?php echo $row['userName'];?> DELETED</h2>

                            <?php else:?>

                                <h2 class="text-center alert alert-danger">This Item Not Exist</h2>

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