<?php 
    include 'init.php';
    include 'header.php';
    ?>
    <div class="container pb-1">
        <div class="ab justify-content-center text-center" 
            style="background-image : url('<?php echo $img .'background_tech.jpg'; ?>');">
            <h3 class="mt-5 mb-5 pt-5" style="color : #fff !important;">Through the smart management website, you can conduct transactions electronically without the trouble 
                of navigating to the relevant departments
            </h3>
            <h6 class="mt-5 mb-5" style="color : #fff !important;">
            You can request the national card, extract civil status documents, book travel visas and an appointment 
            with embassies or any ministry. You can also make online payments, book airline tickets and many more.
            </h6>
        </div>
        <div class="content">
            <!--ministries-->
            <div class="ministries">
                <h3 class="mt-3 mb-3 text-center color-w">1- Travel</h3>

                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Hotel</h5>
                            <p class="card-text">You can reserve hotel online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=travel&option=hotel';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve House</h5>
                            <p class="card-text">You can reserve house online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=travel&option=house';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Hotel</h5>
                            <p class="card-text">You can reserve hotel online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=travel&option=hotel';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
             <!--embassies-->
            <div class="embassies">
                <h3 class="mt-3 mb-3 text-center color-w">2- Transport</h3>

                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Train</h5>
                            <p class="card-text">You can reserve train online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=transport&option=train';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Tramway</h5>
                            <p class="card-text">You can reserve tramway online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=transport&option=tramway';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Bycicle</h5>
                            <p class="card-text">You can reserve hotel Bycicle with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=transport&option=bycicle';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>

             <!--Transport-->
             <div class="transport">
                <h3 class="mt-3 mb-3 text-center color-w">3- Hospital</h3>
                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hospital</h5>
                            <p class="card-text">You can reserve hospital rendu online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=transport&option=hospital';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Doctor</h5>
                            <p class="card-text">You can reserve with a doctor rendu online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=transport&option=doctor';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .''; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reserve Operation</h5>
                            <p class="card-text">You can reserve an operation with a doctor online with OReservation.</p>
                            <a href="<?php echo $dash . 'page.php?pos=transport&option=operation';?>" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--more link-->
            <div class="more justify-content-center text-center mt-4 mb-3">
                <p class="more-p mb-3">You can view more of services online</p>
                <a href="<?php echo $dash . 'dashboard.php';?>" class="more-link">view more</a>
            </div>
        </div>
    </div>

    <?php
    include 'sidebar.php';
?>
<?php
    include 'footer.php';
?>

