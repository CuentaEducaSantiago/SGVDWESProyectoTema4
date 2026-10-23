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
        <header><h1>Codigo ejercicio 2</h1></header>
        <h1><a href='../indexProyectoTema4.php'>volver</a></h1>
        <pre>
            <code style="color: #000000">&lt;!DOCTYPE html&gt;
            &lt;!--
            Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
            Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
            --&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt;Ejercicio 2&lt;/title&gt;
                    &lt;style&gt;
                        table, td, tr, th{
                            border: 3px solid black;
                            border-collapse: collapse;
                        }
                    &lt;/style&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    <span style="color: #DD0000">&lt;?php</span>
                        <span style="color: darkgoldenrod">ini_set('display_errors', 1);</span>
                        <span style="color: darkgoldenrod">ini_set('display_startup_errors', 1);</span>
                        <span style="color: darkgoldenrod">error_reporting(E_ALL);</span><span>//para ver errores</span>
                    <span style="color: #DD0000">?&gt;</span>
                    <span style="color: #DD0000">&lt;?php</span>
                    <span style="color: blue">require_once</span><span> '../core/ConexionDB.php'; //archivo para conexion a la base de datos</span>
                        <span style="color: blue">try{</span>
                            <span style="color: blue">$miDB</span><span style="color: red"> = new PDO($host,$USER,$PASSWORD);</span><span>//conexion a la base de datos</span> 
                            <span style="color: blue">$resultadoConsulta = $miDB-&gt;</span><span style="color: red">query('select * from T02_DEPARTAMENTO');</span><span>//consulta</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;table&gt;";</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;tr&gt;";</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;th&gt;Codigo&lt;/th&gt;";</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;th&gt;Nombre&lt;/th&gt;";</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;th&gt;Fecha Creacion&lt;/th&gt;";</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;th&gt;Valor de Departmento&lt;/th&gt;";</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;th&gt;FechaBaja&lt;/th&gt;";</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;/tr&gt;";</span>
                            <span style="color: blue">while ($registro = $resultadoConsulta -&gt;fetch()){</span><span>//mostrar resultados</span>
                                <span style="color: blue">echo</span><span style="color: red"> "&lt;tr&gt;";</span>
                                <span style="color: blue">echo</span><span style="color: red"> '&lt;td&gt;'.$registro['T02_CodDepartamento'].'&lt;/td&gt;';</span>
                                <span style="color: blue">echo</span><span style="color: red"> '&lt;td&gt;'.$registro["T02_DescDepartamento"].'&lt;/td&gt;';</span>
                                <span style="color: blue">$FechaCreacion = new DateTime($registro["T02_FechaCreacionDepartamento"]);</span>
                                <span style="color: blue">echo</span><span style="color: red"> '&lt;td&gt;'.$FechaCreacion-&gt;format('d/m/Y').'&lt;/td&gt;';</span>
                                <span style="color: blue">echo</span><span style="color: red"> '&lt;td&gt;'.number_format($registro["T02_VolumenDeNegocio"],2,',','.').' €&lt;/td&gt;';</span>
                                <span style="color: blue">if ($registro["T02_FechaBajaDepartamento"]!==null) {</span><span>//comprobacion null</span>
                                    <span style="color: blue">$FechaBaja = new DateTime($registro["T02_FechaBajaDepartamento"]);</span>
                                    <span style="color: blue">echo</span><span style="color: red"> '&lt;td&gt;'.$FechaBaja-&gt;format('d/m/Y').'&lt;/td&gt;';</span>
                                <span style="color: blue">} else {</span>
                                    <span style="color: blue">echo</span><span style="color: red"> '&lt;td&gt;&lt;/td&gt;';</span>
                                <span style="color: blue">}</span>
                                <span style="color: blue">echo</span><span style="color: red"> "&lt;tr&gt;";</span>
                            <span style="color: blue">}</span>
                            <span style="color: blue">echo</span><span style="color: red"> "&lt;table&gt;";</span>
                        <span style="color: blue">}catch(PDOException $e){</span><span>//para atrapar excepciones</span>
                            <span style="color: blue">echo</span><span style="color: red"> $e-&gt;getMessage()."&lt;br&gt;";</span>
                        <span style="color: blue">}</span>
                    <span style="color: #DD0000">?&gt;</span>
                &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>