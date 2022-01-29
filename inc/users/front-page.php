<?php include 'header.php';?>

<?php

        $pos = '';
        if(isset($_GET['pos'])){
            $pos = $_GET['pos'];


            if ($pos == 'travel')  {          //travel page
                     
                echo '<div class="col-md-3 col-sm-3 float-start mt-5">
                    <ul>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Travel</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=travel&option=house">House</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=travel&option=hotel">Hotel</a></li>
                            </ul>
                        </li>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Transport</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=train">Train</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=tramway">Tramway</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=bycicle">Bycicle</a></li>
                            </ul>
                        </li>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Hospital</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=hospital">Hospital</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=doctor">Doctor</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=operation">Operation</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>';    

                echo '<div class="container float-end col-md-8 col-sm-8">';

                    echo '<h2>Welcome To ' . $pos . ' Page ' . $_GET['option'] . ' Option</h2>';
                        echo '<section class="mt-4 mb-4 pt-2 pb-2 row">
                            <div class="card-group">';?>
                                

                                <?php if($_GET['option'] == "hotel"){
                                    echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                            <img class="card-img-top" src="' . $img . 'hotel.jfif' . '" alt="Card image cap">';
                                        echo '<div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>';
                                }elseif($_GET['option'] == "house"){
                                    echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                            <img class="card-img-top" src="' . $img . 'house.jfif' . '" alt="Card image cap">';
                                        echo '<div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>';
                                }?>



                                
                            </div>
                        </section>

                    
                <?php echo '</div>';


            }elseif ($pos == 'transport'){            //transport page
            
                echo '<div class="col-md-3 col-sm-3 float-start mt-5">
                    <ul>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Travel</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=travel&option=house">House</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=travel&option=hotel">Hotel</a></li>
                            </ul>
                        </li>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Transport</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=train">Train</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=tramway">Tramway</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=bycicle">Bycicle</a></li>
                            </ul>
                        </li>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Hospital</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=hospital">Hospital</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=doctor">Doctor</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=operation">Operation</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>'; 

                echo '<div class="container float-end col-md-8 col-sm-8">';

                    echo '<h2>Welcome To ' . $pos . ' Page ' . $_GET['option'] . ' Option</h2>';
                        echo '<section class="mt-4 mb-4 pt-2 pb-2 row">
                            <div class="card-group">';?>

                            <?php if($_GET['option'] == "tramway"){
                                echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                        <img class="card-img-top" src="' . $img . 'hotel.jfif' . '" alt="Card image cap">';
                                    echo '<div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>';
                            }elseif($_GET['option'] == "train"){
                                echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                        <img class="card-img-top" src="' . $img . 'house.jfif' . '" alt="Card image cap">';
                                    echo '<div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>';
                            }elseif($_GET['option'] == "bycicle"){
                                echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                        <img class="card-img-top" src="' . $img . 'house.jfif' . '" alt="Card image cap">';
                                    echo '<div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>';
                            }
                            
                            ?>
                                
                            </div>
                        </section>

                    
                <?php echo '</div>';




            }elseif ($pos == 'hospital'){            //hospital page
                

                echo '<div class="col-md-3 col-sm-3 float-start mt-5">
                    <ul>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Travel</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=travel&option=house">House</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=travel&option=hotel">Hotel</a></li>
                            </ul>
                        </li>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Transport</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=train">Train</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=tramway">Tramway</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=bycicle">Bycicle</a></li>
                            </ul>
                        </li>
                        <li class="bg-primary text-center justify-content-center d-block mb-1">
                            <h5 class="bg-danger pt-2 pb-2">Hospital</h5>
                            <ul>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=hospital">Hospital</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=doctor">Doctor</a></li>
                                <li class="bg-primary text-center justify-content-center d-block"><a href="front-page.php?pos=transport&option=operation">Operation</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>';   

                echo '<div class="container float-end col-md-8 col-sm-8">';

                    echo '<h2>Welcome To ' . $pos . ' Page ' . $_GET['option'] . ' Option</h2>';
                        echo '<section class="mt-4 mb-4 pt-2 pb-2 row">';?>
                            <div class="card-group">

                                    
                                <?php if($_GET['option'] == "hospital"){
                                    echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                            <img class="card-img-top" src="' . $img . 'hotel.jfif' . '" alt="Card image cap">';
                                        echo '<div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>';
                                }elseif($_GET['option'] == "doctor"){
                                    echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                            <img class="card-img-top" src="' . $img . 'house.jfif' . '" alt="Card image cap">';
                                        echo '<div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>';
                                }elseif($_GET['option'] == "operation"){
                                    echo '<div class="card col-md-2 col-sm-2 mr-1 bg-info">
                                            <img class="card-img-top" src="' . $img . 'house.jfif' . '" alt="Card image cap">';
                                        echo '<div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>';
                                }
                                
                                ?>
                                
                            </div>
                        </section>

                    
                <?php echo '</div>';



            }

        }else{
            echo '<div class="container mt-5">
                  <h2 class="text-center alert alert-danger">This Page Not Found</h2>
                  </div>';
        }


?>
<?php include 'footer.php';?>