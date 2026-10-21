<!DOCTYPE html>
<html lang="es">
    <!--
    Autor: Santiago González Vicente
    Fecha Modificacion: 2026-09-28
    Descripcion: Indice DAW2
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Santiago González Vicente</title>
        <style>
            p{
                margin-left: 300px;
            }
        </style>
    </head>
    <body>
        <header><h1>Codigo ejercicio 1</h1></header>
        <h1><a href='../indexProyectoTema4.php'>volver</a></h1>
        <pre>
            <code style="color: #000000">&lt;!DOCTYPE html&gt;
            &lt;!--
            Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
            Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
            --&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;meta charset="UTF-8"&gt;
                    &lt;title&gt;&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;nav&gt;
                        &lt;h2&gt;DWES - Tema 3&lt;/h2&gt;
                        &lt;h2&gt;Ejercicio 23&lt;/h2&gt;
                    &lt;/nav&gt;
                    &lt;main&gt;
                        &lt;div class="ejercicio"&gt;
                            <span style="color: #DD0000">&lt;?php</span>
                                <span style="color: darkgoldenrod">ini_set('display_errors', 1);</span>
                                <span style="color: darkgoldenrod">ini_set('display_startup_errors', 1);</span>
                                <span style="color: darkgoldenrod">error_reporting(E_ALL);</span>
                            <span style="color: #DD0000">?&gt;</span>
                            <span style="color: #DD0000">&lt;?php</span>
                                <span> // importación de la librería</span>
                                <span style="color: blue"> require_once</span><span>'../core/ConexionDB.php';</span>
                                <span>//conectar al archivo para obetener conexion a la base de datos</span>
                                <span style="color: blue">$atributes= [</span>
                                    <span style="color: red">'AUTOCOMMIT', 'ERRMODE' , 'CASE' , 'CLIENT_VERSION', 'CONNECTION_STATUS',</span>
                                    <span style="color: red">'ORACLE_NULLS', 'PERSISTENT', 'PREFETCH', 'SERVER_INFO', 'SERVER_VERSION', 'TIMEOUT'</span>
                                <span style="color: blue">];</span><span>//propiedades</span>
                                <span style="color: blue">try{<span>
                                        <span style="color: blue">$miDB = new PDO($host,$USER,$PASSWORD);</span> <span style="color: black"> //conectando a la base de datos</span>
                                        <span style="color: #007D00">echo</span><span style="color: red"> "&lt;h2&gt;Conexion Establecida&lt;/h2&gt;&lt;br&gt;";</span>
                                        <span style="color: #007D00">echo</span><span style="color: red"> "&lt;h3&gt;Porpiedades&lt;/h3&gt;";</span>
                                        <span style="color: blue">foreach ($atributes as $atributo) {</span><span style="color: black"> //para mostrar las propiedades</span>
                                        <span style="color: #007D00">echo</span><span> "PDO: ATTR: ".$atributo.": ";</span>
                                            <span style="color: blue">try {</span>
                                                <span style="color: #007D00">echo</span><span style="color: red"> '&lt;span class="azul"&gt'.$miDB->getAttribute( constant( "PDO::ATTR_$atributo" ) ) . "&lt;/span&lt;&lt;br&gt";</span>
                                            <span style="color: blue">} catch (PDOException $e ) {</span>
                                                <span style="color: #007D00">echo</span><span  style="color: red"> '&lt;span class="rojo"&gt &lt;b&gtError: &lt;/b&gt'.$e->getMessage().' &lt;b&gtcon código de error:&lt;/b&gt '.$e->getCode()."&lt;/span&lt;&lt;br&gt";</span><span style="color:black"> //en caso de excepccion en alguna propiedad</span>
                                            <span style="color: blue">}</span>
                                        <span style="color: blue">}</span>
                                    <span style="color: blue">}catch(PDOException $e){</span>
                                        <span style="color: #007D00">echo</span><span> $e->getMessage()."&lt;br&gt";</span>
                                    <span style="color: blue">}</span>
                                    <span style="color: blue">try{</span><span style="color: black"> //mostrado excepcion de cuando no hay una base de datos</span>
                                        <span style="color: blue">$hoste</span><span style="color: red">="mysql:host=10.199.9.174;dbname=DBSGVDWESProyectoTema";</span>
                                        <span style="color: blue">$miDBe1</span><span style="color: red"> = new PDO($hoste,$USER,$PASSWORD);</span>
                                    <span style="color: blue">}catch(PDOException $e){</span>
                                        <span style="color: #007D00">echo</span><span  style="color: red"> "&lt;h2&gtError Base de datos&lt;/h2&gt&lt;br&gt";</span>
                                        <span style="color: #007D00">echo</span><span  style="color: red"> $e->getMessage()."&lt;br&gt";</span>
                                    <span style="color: blue">}</span>
                                    <span style="color: blue">try{</span><span style="color: black"> //mostrando excepcion de cuando el usuario es erroneo</span>
                                        <span style="color: blue">$USERe="3";</span>
                                        <span style="color: blue">$miDBe2 = new PDO($host,$USERe,$PASSWORD);</span>
                                    <span style="color: blue">}catch(PDOException $e){</span>
                                        <span style="color: #007D00">echo</span><span  style="color: red"> "&lt;h2&gtError Usuario&lt;/h2&gt&lt;br&gt";</span>
                                        <span style="color: #007D00">echo</span><span  style="color: red"> $e->getMessage()."&lt;br&gt";</span>
                                    <span style="color: blue">}</span>
                                    <span style="color: blue">try{</span><span style="color: black">  //mostrando excepcion de cuando la contraseña es erronea</span>
                                        <span style="color: blue">$PASSWORDe=</span><span  style="color: red"> "3";</span>
                                        <span style="color: blue">$miDBe3 </span><span  style="color: red"> = new PDO($host,$USER,$PASSWORDe);</span>
                                    <span style="color: blue">}catch(PDOException $e){</span>
                                        <span style="color: #007D00">echo</span><span  style="color: red"> "&lt;h2&gtError Contraseña&lt;/h2&gt&lt;br&gt";</span>
                                        <span style="color: #007D00">echo</span><span  style="color: red"> $e->getMessage()."&lt;br&gt";</span>
                                    <span style="color: blue">}</span>
                                <span style="color: red">?&gt;</span></span></span>
                        &lt;/div&gt;
                    &lt;/main&gt;
                    &lt;footer&gt;
                        &lt;div&gt;
                            &lt;a href="../indexProyectoTema3.php" color="white"&gt;Santiago González Vicente&lt;/a&gt;
                            &lt;time datetime="2026-10-13"&gt;13-10-2026&lt;/time&gt;
                        &lt;/div&gt;
                    &lt;/footer&gt;
                &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>