<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
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
            <h2>Ejercicio 3</h2>
        </header>
        <main>
        <h1><a href='../indexProyectoTema3.php'>volver</a></h1>
            <div class="form">
                <?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);
                    
                ?>
                <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    Introduce un departamento: <input type="text" id="Dnombre" name="Dnombre"/>
                    <br>
                    <input type="submit" name="submit" value="Enviar"/>
                </form>
            </div><!-- Espacio del form -->
            <div class="ejercicio">
                <?php
                if(isset($_POST["submit"])){
                        require_once '../core/ConexionDB.php'; //archivo para conexion a la base de datos
                        try{
                            $miDB = new PDO($host,$USER,$PASSWORD); //conexion a la base de datos
                            if(mb_strtoupper($_POST['Dnombre'], 'UTF-8')||str_word_count(trim($_POST['Dnombre']))||$_POST['Dnombre']!==""){
                                $resultadoConsulta = $miDB->query('select * from T02_DEPARTAMENTO where T02_CodDepartamento="'.$_POST['Dnombre'].'"');//consulta
                            }
                            elseif(is_null($_POST['Dnombre'])||$_POST['Dnombre']==""){
                                $resultadoConsulta = $miDB->query('select * from T02_DEPARTAMENTO');//consulta
                            }
                            echo "<table>";
                            echo "<th>Codigo</th>";
                            echo "<th>Nombre</th>";
                            echo "<th>Fecha Creacion</th>";
                            echo "<th>Valor de Departmento</th>";
                            echo "<th>FechaBaja</th>";
                            echo "</tr>";
                            while ($registro = $resultadoConsulta ->fetch()){//mostrar resultados
                                echo "<tr>";
                                echo '<td>'.$registro['T02_CodDepartamento'].'</td>';
                                echo '<td>'.$registro["T02_DescDepartamento"].'</td>';
                                $FechaCreacion = new DateTime($registro["T02_FechaCreacionDepartamento"]);
                                echo '<td>'.$FechaCreacion->format('d/m/Y').'</td>';
                                echo '<td>'.number_format(floatval(str_replace(',', '.', $registro["T02_VolumenDeNegocio"])),2,',','.').' €</td>';
                                if ($registro["T02_FechaBajaDepartamento"]!==null) {//comprobacion null
                                    $FechaBaja = new DateTime($registro["T02_FechaBajaDepartamento"]);
                                    echo '<td>'.$FechaBaja->format('d/m/Y').'</td>';
                                } else {
                                    echo '<td></td>';
                                }
                                echo "<tr>";
                            }
                            echo "</table>";
                    }catch(PDOException $e){//para atrapar excepciones
                        echo $e->getMessage()."<br>";
                    }
                }
                ?>
            </div>
        </main>
        <footer>
            <div>
            <p><time datetime="2026-10-22">2026-2027</time> IES LOS SAUCES. ©Todos los derechos reservados</p>
            <p>Santiago González Vicente. 14/09/2026</p>
            <a href="../indexProyectoTema4.php"><i class="fa fa-home" style="font-size:40px; margin-right: 15px;"></i></a>
            </div>
        </footer>
    </body>
</html>