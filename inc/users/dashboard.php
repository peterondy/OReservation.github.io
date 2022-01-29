<?php include 'header.php';?>
  <?php 
  //if the id is from to user ==> enter to dashboard || if id is from to admin enter to admin
    //$stmt = $con->prepare("SELECT email FROM users WHERE email = ? AND password=?");
    //$stmt->execute(array($_POST['email'], $_POST['pass']));
    //$count = $stmt->rowCount();
            
  ?>
    <div class="container">



        <section class="section mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" id="travel">
          <h3>Reservation Travel</h3>
          <h6>You can reserve hotel, House online with OReservation: </h6>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?pos=travel">GO To Travel Page</a>
        </section>



        <section class="section mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" id="transport">
          <h3>Reservation Transport</h3>
          <h6>You can reserve tramway, train, taxi, bus online with OReservation: </h6>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?pos=transport">GO To Transport Page</a>
        </section>

        
        <section class="section mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" id="hospital">
          <h3>Reservation Hospital</h3>
          <h6>You can reserve hospital, doctor rensu, operation rendu online with OReservation: </h6>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow text-center" style="color: #449fa9 !important;" href="page.php?pos=hospital">GO to Hospital Online Page</a>
        </section>


        
    </div>

    <?php include 'footer.php';?>
