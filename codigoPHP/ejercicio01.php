<html>
    <head></head>
    <body>
        <?php //para ver errores
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        ?>
        <?php
        require_once '../core/ConexionDB.php'; //conectar al archivo para obetener conexion a la base de datos
        $ar= [
            'AUTOCOMMIT', 'ERRMODE' , 'CASE' , 'CLIENT_VERSION', 'CONNECTION_STATUS',
            'ORACLE_NULLS', 'PERSISTENT', 'PREFETCH', 'SERVER_INFO', 'SERVER_VERSION', 'TIMEOUT'
        ]; //propiedades
            try{
                $miDB = new PDO($host,$USER,$PASSWORD); //conectando a la base de datos
                echo "<h2>Conexion Establecida</h2><br>";
                echo "<h3>Porpiedades</h3>";
                foreach ($ar as $atributo) { //para mostrar las propiedades
                echo "PDO: ATTR: ".$atributo.": ";
                    try {
                        echo '<span class="azul">'.$miDB->getAttribute( constant( "PDO::ATTR_$atributo" ) ) . "</span><br>";
                    } catch (PDOException $e ) {
                        echo '<span class="rojo"> <b>Error: </b>'.$e->getMessage().' <b>con código de error:</b> '.$e->getCode()."</span><br>"; //en caso de excepccion en alguna propiedad
                    }
                }
            }catch(PDOException $e){
                echo $e->getMessage()."<br>";
            }
            try{ //mostrado excepcion de cuando no hay una base de datos
                $hoste="mysql:host=10.199.9.174;dbname=DBSGVDWESProyectoTema";
                $miDBe1 = new PDO($hoste,$USER,$PASSWORD);
            }catch(PDOException $e){
                echo "<h2>Error Base de datos</h2><br>";
                echo $e->getMessage()."<br>";
            }
            try{ //mostrando excepcion de cuando el usuario es erroneo
                $USERe="3";
                $miDBe2 = new PDO($host,$USERe,$PASSWORD);
            }catch(PDOException $e){
                echo "<h2>Error Usuario</h2><br>";
                echo $e->getMessage()."<br>";
            }
            try{ //mostrando excepcion de cuando la contraseña es erronea
                $PASSWORDe="3";
                $miDBe3 = new PDO($host,$USER,$PASSWORDe);
            }catch(PDOException $e){
                echo "<h2>Error Contraseña</h2><br>";
                echo $e->getMessage()."<br>";
            }
        ?>
    </body>
</html>