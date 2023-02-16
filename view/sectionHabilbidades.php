<section class="row">
    <!-- skil   -->
    <div class="col-md-4 py-2">
        <div class="card bg-light animate__animated animate__fadeInLeft">
            <div class="card-body">
                <h1>Skills</h1>
                <!-- template -->

                <?php

                $peticion = new Conexion();

                $qry = $peticion->Conextar()->query("select nombre,porcentaje from skil");

                while ($fila = $qry->fetch()) {  ?>



                    <div class="py-3">
                        <h5><?php echo $fila->nombre; ?></h5>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width:<?php echo $fila->porcentaje;?>%"></div>
                        </div>
                    </div>


                <?php } ?>

            </div>
        </div>

    </div>
    <!-- experiencia -->
    <div class="col-md-8 py-2">
        <!-- template -->
        <div class="card bg-light animate__animated animate__fadeInRight">
            <div class="card-body">
                <h1>Experience</h1>

                
                <?php

                $peticion = new Conexion();

                $qry = $peticion->Conextar()->query("select * from experiencia");

                while ($fila = $qry->fetch()) {  ?> 

                <ul>
                    <li>
                        <h3> <?php echo $fila->titulo ;?></h3>
                        <h5>
                            <?php echo $fila->desde ;?><?php echo $fila->asta ;?>
                        </h5>
                        <p>
                        <?php echo $fila->descripcion;?>
                        </p>
                    </li>
                </ul>

                <?php }?> 
                <a class="btn btn-light">Know More</a>
            </div>
        </div>
    </div>

</section>