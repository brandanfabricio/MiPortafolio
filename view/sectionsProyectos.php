<section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body bg-dark">
                <div class="row">
                    <div class="col-md-12 my-2">
                        <h1 class="text-center text-light">Portfolio</h1>
                    </div>
                    <!-- template -->


                    <?php

                    $peticion = new Conexion();

                    $qry = $peticion->Conextar()->query("select * from proyecto");

                    while ($fila = $qry->fetch()) {  ?>
                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <div class="overflow">
                                    <img src=<?php echo $fila->imagen?> alt="" class="card-img-top" />
                                </div>
                                <div class="card-body">
                                    <h3><?php echo $fila->nombre; ?></h3>
                                    <p><?php echo $fila->descripcion; ?></p>
                                    <a href="#!">Know More</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>




                    <div class="col-md-12 mt-4">


                        <div class="text-center">
                            <a class="btn btn-outline-light">More Projects</a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>