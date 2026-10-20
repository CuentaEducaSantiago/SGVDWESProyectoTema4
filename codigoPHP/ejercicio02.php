<html>
    <head></head>
    <body>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        ?>
        <?php
        require_once '../core/ConexionDB.php';
            try{
                $miDB = new PDO($host,$USER,$PASSWORD);
                $resultadoConsulta = $miDB->query('select * from T02_DEPARTAMENTO', MYSQLI_STORE_RESULT);
                $registroArray = $resultadoConsulta->fetch_object();
                echo $registroArray;
            }catch(PDOException $e){
                echo $e->getMessage()."<br>";
            }
        ?>
    </body>
</html>