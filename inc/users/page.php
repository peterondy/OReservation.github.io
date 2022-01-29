<?php include 'header.php';?>

<?php

        $pos = '';
        if(isset($_GET['pos'])){
            $pos = $_GET['pos'];


            if ($pos == 'travel')  {          //travel page
                     
                    echo '<div class="col-md-3 col-sm-3 float-start mt-5">
                        <ul>
                            <li class="bg-primary text-center justify-content-center d-block mb-1"><a href="page.php?pos=travel&option=hotel" class="pt-3">Hotel</a></li>
                            <li class="bg-primary text-center justify-content-center d-block"><a href="page.php?pos=travel&option=house">House</a></li>
                        </ul>
                    </div>';    

                echo '<div class="container float-end col-md-8 col-sm-8">';

                    echo '<h2>Welcome To ' . $pos . ' Page ' . $_GET['option'] . ' Option</h2>';
                        echo '<section class="mt-4 mb-4 pt-2 pb-2 row">
                            <div class="card-group">
                                <div class="card col-md-2 col-sm-2 mr-1 bg-info">';

                                if($_GET['option'] == "hotel"){
                                    echo '<img class="card-img-top" src="' . $img . 'hotel.jfif' . '" alt="Card image cap">';
                                }elseif($_GET['option'] == "house"){
                                    echo '<img class="card-img-top" src="' . $img . 'house.jfif' . '" alt="Card image cap">';
                                }


                                    echo '<div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="front-page.php?pos=' . $pos . '&option=' . $_GET["option"] . ' " class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                
                            </div>
                        </section>';

                    
                echo '</div>';


            }elseif ($pos == 'transport'){            //transport page
            
                echo '<div class="col-md-3 col-sm-3 float-start mt-5">
                    <ul>
                        <li class="bg-primary text-center justify-content-center d-block mb-1"><a href="page.php?pos=transport&option=train" class="pt-3">Train</a></li>
                        <li class="bg-primary text-center justify-content-center d-block mb-1"><a href="page.php?pos=transport&option=tramway" class="pt-3">Tramway</a></li>
                        <li class="bg-primary text-center justify-content-center d-block"><a href="page.php?pos=transport&option=bycicle" class="pt-3">Bycicle</a></li>
                    </ul>
                </div>';    

                echo '<div class="container float-end col-md-8 col-sm-8">';

                    echo '<h2>Welcome To ' . $pos . ' Page ' . $_GET['option'] . ' Option</h2>';
                        echo '<section class="mt-4 mb-4 pt-2 pb-2 row">
                            <div class="card-group">
                                <div class="card col-md-2 col-sm-2 mr-1 bg-info">';

                                    if($_GET['option'] == "tramway"){
                                        echo '<img class="card-img-top" src="' . $img . 'tramway.jfif' . '" alt="Card image cap">';
                                    }elseif($_GET['option'] == "train"){
                                        echo '<img class="card-img-top" src="' . $img . 'train.jfif' . '" alt="Card image cap">';
                                    }elseif($_GET['option'] == "bycicle"){
                                        echo '<img class="card-img-top" src="' . $img . 'bycicle.jfif' . '" alt="Card image cap">';
                                    }


                                    echo '<div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="front-page.php?pos=' . $pos . '&option=' . $_GET["option"] . ' " class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                
                            </div>
                        </section>';

                    
                echo '</div>';




            }elseif ($pos == 'hospital'){            //hospital page
                

                echo '<div class="col-md-3 col-sm-3 float-start mt-5">
                        <ul>
                            <li class="bg-primary text-center justify-content-center d-block mb-1"><a href="page.php?pos=transport&option=hospital" class="pt-3">Hospital</a></li>
                            <li class="bg-primary text-center justify-content-center d-block mb-1"><a href="page.php?pos=transport&option=doctor" class="pt-3">Doctor</a></li>
                            <li class="bg-primary text-center justify-content-center d-block"><a href="page.php?pos=transport&option=operation" class="pt-3">Operation</a></li>
                         </ul>
                    </div>';    

                echo '<div class="container float-end col-md-8 col-sm-8">';

                    echo '<h2>Welcome To ' . $pos . ' Page ' . $_GET['option'] . ' Option</h2>';
                        echo '<section class="mt-4 mb-4 pt-2 pb-2 row">
                            <div class="card-group">
                                <div class="card col-md-2 col-sm-2 mr-1 bg-info">';

                                    if($_GET['option'] == "hospital"){
                                        echo '<img class="card-img-top" src="' . $img . 'hospital.jfif' . '" alt="Card image cap">';
                                    }elseif($_GET['option'] == "doctor"){
                                        echo '<img class="card-img-top" src="' . $img . 'doctor.jfif' . '" alt="Card image cap">';
                                    }elseif($_GET['option'] == "operation"){
                                        echo '<img class="card-img-top" src="' . $img . 'operation.jfif' . '" alt="Card image cap">';
                                    }


                                    echo '<div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <a href="front-page.php?pos=' . $pos . '&option=' . $_GET["option"] . ' " class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                
                            </div>
                        </section>';

                    
                echo '</div>';



            }

        }else{
            echo '<div class="container mt-5">
                  <h2 class="text-center alert alert-danger">This Page Not Found</h2>
                  </div>';
        }


?>
<?php include 'footer.php';?>