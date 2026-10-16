<html>
    <head></head>
    <body>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        ?>
        <?php
        $host="mysql:host=10.199.9.174;dbname=DBSGVDWESProyectoTema4";
        $USER ="adminsql";
        $PASSWORD ="paso";
        $ar= [
            'AUTOCOMMIT', 'ERRMODE' , 'CASE' , 'CLIENT_VERSION', 'CONNECTION_STATUS',
            'ORACLE_NULLS', 'PERSISTENT', 'PREFETCH', 'SERVER_INFO', 'SERVER_VERSION', 'TIMEOUT'
        ];
            try{
                $miDB = new PDO($host,$USER,$PASSWORD);
                echo "<h2>Conexion Establecida</h2><br>";
                echo "<h3>Porpiedades</h3>";
                foreach ($ar as $atributo) {
                echo "PDO: ATTR: ".$atributo.": ";
                    try {
                        echo '<span class="azul">'.$miDB->getAttribute( constant( "PDO::ATTR_$atributo" ) ) . "</span><br>";
                    } catch (PDOException $e ) {
                        echo '<span class="rojo"> <b>Error: </b>'.$e->getMessage().' <b>con código de error:</b> '.$e->getCode()."</span><br>";
                    }
                }
            }catch(PDOException $e){
                echo $e->getMessage()."<br>";
            }
            try{
                $hoste="mysql:host=10.199.9.174;dbname=DBSGVDWESProyectoTema";
                $miDBe1 = new PDO($hoste,$USER,$PASSWORD);
            }catch(PDOException $e){
                echo "<h2>Error Base de datos</h2><br>";
                echo $e->getMessage()."<br>";
            }
            try{
                $USERe="3";
                $miDBe2 = new PDO($host,$USERe,$PASSWORD);
            }catch(PDOException $e){
                echo "<h2>Error Usuario</h2><br>";
                echo $e->getMessage()."<br>";
            }
            try{
                $PASSWORDe="3";
                $miDBe3 = new PDO($host,$USER,$PASSWORDe);
            }catch(PDOException $e){
                echo "<h2>Error Contraseña</h2><br>";
                echo $e->getMessage()."<br>";
            }
        ?>
    </body>
</html>