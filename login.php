<?php 

session_start(); 

include "init.php";

$err = '';

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
    <title>Login</title>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
        if(empty($_POST['email'])):

            if(empty($_POST['pass'])):?>

                <?php $err = '<h2 class="text-center alert alert-danger">Email And Password Are Failed Are Empty</h2>';?>

            <?php else:?>
        
                <?php $err = '<h2 class="text-center alert alert-danger">Email Failed Are Empty</h2>';?>

            <?php endif;?>

        <?php else: ?>

            <?php if(empty($_POST['pass'])):?>

                <?php $err = '<h2 class="text-center alert alert-danger">Password Failed Is Empty</h2>';?>

            <?php else:?>

                <?php $postEmail = $_POST['email'];$postPass = $_POST['pass'];?>
                <?php //check if the user exist in the database

                $stmt = $con->prepare("SELECT email,groupeID,id,password FROM users WHERE email = ? AND password=?");
                $stmt->execute(array($postEmail, $postPass));
                $row = $stmt->fetch();
                //$row = ["id"=>"5","gid"=>"8","user"=>"ramzi"];
                //print_r($row);
                $rowEmail = $row['email'];$rowPass = $row['password'];

                if($rowEmail == $postEmail):

                    if($rowPass == $postPass):

                        if($row['groupeID'] == 0){
                            $_SESSION['email']    = $email;     //register session email
                            $_SESSION['password'] = $pass;     //register session password
                            header('Location: ' . $dash . 'dashboard.php?id=' . $row['id']);  //redirect to dashboard page
                            exit();
                            
                        }elseif($row['groupeID'] == 1 || $row['groupeID'] == 2){
                            $_SESSION['email']    = $email;     //register session email
                            $_SESSION['password'] = $pass;     //register session password
        
                            //get the email of the user when groupe id of user == 1
                            /*$stmt = $con->prepare("SELECT email FROM users WHERE id = ?");
                            $stmt->execute(array($row['id']));
                            $row = $stmt->fetch();*/
        
        
                            header('Location: ' . $adm . 'dashboard.php?agid=' . $row['groupeID'] . '&id=' . $row['id'] . '&do=notification');  //redirect to dashboard page
                            exit();
                            
                        }

                    else

                        $err = '<h2 class="text-center alert alert-danger">Error Password</h2>';

                    endif;

                else:
                    
                    $err = '<h2 class="text-center alert alert-danger">Error Password & Email</h2>';

                endif;



            endif;?>


        <?php endif;

    }
?>

        <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h4 class="text-center label">Login page</h4>
            <span><i class="fas fa-sign-in-alt" style="font-size: 4rem;"></i></span>
            <?php echo $err;?>
            <input type="text" name="email" placeholder="Email" autocomplete="off">
            <input type="password" name="pass" placeholder="Password" autocomplete="new-password">
            <h3>I'm new</h3>
            <a href="signup.php">Create new account</a>
            <input type="submit" class="btn btn-primary btn-block" id="login" value="login"> 
        </form>

            

<style>
    body{
        overflow-x: hidden;
        width: 100%;
        height: 100%;
        background-color: #b5b3a745;
        margin: 0;
        padding: 0;
    }
    a{
        text-decoration: none !important;
    }
    a:hover{
        color: #8274fbbd;
    }
    form.login,form.signin{
        width: 40%;
        height: 70%;
        margin: 15% 30%;
        margin-bottom: 0;
        text-align: center;
        justify-content: center;
    }
    form.signin{
        display: none
    }
    input{
        display: block;
        margin: 1rem 30%;
        width: 40%;
        height: 2rem;
        border-radius: .2rem;
        border: 1px solid #8274fb;
    }
    input[name="action"] {
        display: none !important;
    }
    input[type="submit"] {
        cursor: pointer;
        font-size: 1rem;
        height: 2.5rem;
        background-color: #8274fb;
        color: #fff;
    }
    input:hover[type="submit"] {
        background-color: #8274fbbd;
    }
</style>