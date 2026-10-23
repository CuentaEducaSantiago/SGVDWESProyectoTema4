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
    </head>
    <body>
        <header><h1>Codigo CreaDBSGVDWESProyectoTema4</h1></header>
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
                <blockquote>
                    <span style="color: #DD0000">CREATE USER 'userSGVDWESProyectoTema4'@'%' IDENTIFIED BY 'paso';</span>
                    <span style="color: #DD0000">GRANT ALL PRIVILEGES ON *.* TO 'userSGVDWESProyectoTema4'@'%' WITH GRANT OPTION</span>;
                    <span style="color: #DD0000">FLUSH PRIVILEGES;</span>
                    <span style="color: #0000BB">CREATE DATABASE IF NOT EXISTS DBSGVDWESProyectoTema4;</span>
                    <span style="color: #0000BB">CREATE TABLE T02_DEPARTAMENTO(</span>
                        <span style="color: #0000BB">T02_CodDepartamento VARCHAR(3) PRIMARY KEY,</span>
                        <span style="color: #0000BB">T02_DescDepartamento CHAR(255) not null,</span>
                        <span style="color: #0000BB">T02_FechaCreacionDepartamento DATETIME  default current_timestamp,</span>
                        <span style="color: #0000BB">T02_VolumenDeNegocio FLOAT default 0,</span>
                        <span style="color: #0000BB">T02_FechaBajaDepartamento DATETIME default current_timestamp);</span>
                </blockquote>    &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>