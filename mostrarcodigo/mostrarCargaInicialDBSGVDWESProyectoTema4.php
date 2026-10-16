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
        <header><h1>Codigo CargaInicialDBSGVDWESProyectoTema4</h1></header>
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
                    <span style="color: #DD0000">CREATE TABLE T02_DEPARTAMENTO(</span>
                    <span style="color: #DD0000">T02_CodDepartamento PRIMARY KEY VARCHAR(3),</span>;
                    <span style="color: #0000BB">T02_DescDepartamento CHAR(255) not null,</span>
                    <span style="color: #DD0000">T02_FechaCreacionDepartamento DATETIME default default current_timestamp,</span>
                    <span style="color: #DD0000">T02_VolumenDeNegocio FLOAT default 0,</span>;
                    <span style="color: #0000BB">T02_FechaBajaDepartamento DATETIME default default current_timestamp,</span>
                    <span style="color: #0000BB">CONSTRAINT T02_VolumenDeNegocio CHECK (T02_VolumenDeNegocio >= -3.402823466E+38 AND T02_VolumenDeNegocio <= 1.175494351E-38);</span>
                </blockquote>    &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>