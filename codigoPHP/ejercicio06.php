<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 6</title>
        <style>
            table, td, tr, th{
                border: 3px solid black;
                border-collapse: collapse;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="webroot/css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <h2>Ejercicio 5</h2>
        </header>
        <?php
        /**
         * Pagina web que añade tres registros a nuestra tabla Departamento utilizando tres instrucciones
         * insert y una transacción, de tal forma que se añadan los tres registros o no se añada ninguno.
         */
            require_once '../core/ConexionDB.php'; //archivo para conexion a la base de datos
            $ok = true;
            $x='';
            try{
                $Transaccion=new PDO($host,$USER,$PASSWORD);
                $array=array(
                    ["T02_CodDepartamento"=> "TRB", "SOS"],
                    ["T02_DescDepartamento"=> "Despartamentop de derechos de los trabajadores", "Despartamentop de sostenivilidad"],
                    ["T02_FechaCreacionDepartamento"=> "2024-01-15 09:00:00", "2020-01-15 09:00:00"],
                    ["T02_VolumenDeNegocio"=> 5000, 3000],
                    ["T02_FechaBajaDepartamento"=> "2030-01-15 09:00:00", "2040-01-15 09:00:00"]
                    );
                $Transaccion->beginTransaction(); //para empezar a probas los nuevos registros
                 
            }catch(PDOException $e){//para atrapar excepciones
                echo $e->getMessage()."<br>";
            }
            finally {
            // Cierra la conexion con la base de datos
                unset($Transaccion);
            }
        ?>
        <footer>
            <div>
            <p><time datetime="2026-10-22">2026-2027</time> IES LOS SAUCES. ©Todos los derechos reservados</p>
            <p>Santiago González Vicente. 14/09/2026</p>
            <a href="../indexProyectoTema4.php"><i class="fa fa-home" style="font-size:40px; margin-right: 15px;"></i></a>
            </div>
        </footer>
    </body>
</html>