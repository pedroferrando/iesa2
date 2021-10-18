<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>

    <body>
        <?php
            include("conexion.php");
            $clientes = "SELECT * FROM clientes";
        ?>

        
        <div class="panel panel-info">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6"><b> CLIENTES REGISTRADOS EN EL SISTEMA IESA</b></div>
                </div>
            </div>

            <div class="panel-body">
                <div class="col-md-12 lst_trn_container">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CUIT</th>
                        </tr>

                        <?php $resultado = mysqli_query($conexion,$clientes);
                        while($row=mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td><b><?php echo $row["id"]; ?></b></td>
                                <td><b><?php echo $row["nombre"]; ?></b></td>
                                <td><?php echo $row["cuit"]; ?></td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>

    </body>
</html>