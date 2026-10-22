<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 23</title>
        <style>
            input[type="text"],input[type="date"],input[type="number"]{ background-color: #fff9c4; }
            *{ margin: 0 auto; padding: 0 auto; }
            nav{ background-color: black; color: white; }
            span{ color: red; }
            .ejercicio{
                padding: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
                width: 1150px;
                border: 1px solid black;
                border-radius: 10px;
                p { font-weight: bold; }
            }
            footer{
                background-color: black; text-align: center; align-content: center;
                height: 50px; color: white; margin-top: 20%;
                & div a{ color: white; text-decoration: none; }
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 23</h2>
        </nav>
        <main>
        <h1><a href='../indexProyectoTema3.php'>volver</a></h1>
            <div class="ejercicio">
                <?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);
                    
                ?>
                <?php
                    require_once '../core/ConexionDB.php'; //archivo para conexion a la base de datos
                    try{
                        $miDB = new PDO($host,$USER,$PASSWORD); //conexion a la base de datos
                    if(is_null($_POST['Dnombre'])||mb_strtoupper($_POST['Dnombre'], 'UTF-8')||str_word_count(trim($_POST['Dnombre']))){
                        $resultadoConsulta = $miDB->query('select * from T02_DEPARTAMENTO');//consulta
                        $resultadoConsulta2 = $miDB->exec('select * from T02_DEPARTAMENTO');//consulta
                    }
                    else{
                        $resultadoConsulta = $miDB->query('select * from T02_DEPARTAMENTO where T02_CodDepartamento='.$_POST['Dnombre']);//consulta
                        $resultadoConsulta2 = $miDB->exec('select * from T02_DEPARTAMENTO where T02_CodDepartamento='.$_POST['Dnombre']);//consulta
                    }
                    echo "<h3>Exec</h3>";
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
                        echo '<td>'.number_format($registro["T02_VolumenDeNegocio"],2,',','.').' €</td>';
                        if ($registro["T02_FechaBajaDepartamento"]!==null) {//comprobacion null
                            $FechaBaja = new DateTime($registro["T02_FechaBajaDepartamento"]);
                            echo '<td>'.$FechaBaja->format('d/m/Y').'</td>';
                        } else {
                            echo '<td></td>';
                        }
                        echo "<tr>";
                    }
                    echo "<table>";
                    echo "<h3>Querry</h3>";
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
                        echo '<td>'.number_format($registro["T02_VolumenDeNegocio"],2,',','.').' €</td>';
                        if ($registro["T02_FechaBajaDepartamento"]!==null) {//comprobacion null
                            $FechaBaja = new DateTime($registro["T02_FechaBajaDepartamento"]);
                            echo '<td>'.$FechaBaja->format('d/m/Y').'</td>';
                        } else {
                            echo '<td></td>';
                        }
                        echo "<tr>";
                    }
                    echo "<table>";
                }catch(PDOException $e){//para atrapar excepciones
                    echo $e->getMessage()."<br>";
                }
                ?>
                <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    Introduce un departamento: <input type="text" id="text" name="Dnombre"/>
                    <br>
                    <input type="submit" name="submit" value="Enviar"/>
                </form>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">Santiago González Vicente</a>
                <time datetime="2026-10-13">13-10-2026</time>
            </div>
        </footer>
    </body>
</html>