<html>
    <head></head>
    <body>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        ?>
        <?php
        require_once '../core/ConexionDB';
            try{
                $miDB = new PDO($host,$USER,$PASSWORD);
                echo "<h2>Conexion Establecida</h2><br>";
                echo "<h3>Porpiedades</h3>";
                
            }catch(PDOException $e){
                echo $e->getMessage()."<br>";
            }
        ?>
    </body>
</html>