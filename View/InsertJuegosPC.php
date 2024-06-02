<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Juegos PC</title>
</head>
<body>
    <form action="../Controller/ControllerInsertJuegosPC.php" method="post">
        <table border="1">
            <tr>
                <td colspan="2" align="center">
                    Formulario Ingreso de juegos
                </td>
            </tr>
            <tr>
                <td>
                    Nombre Juego
                </td>

                <td>
                    <input type="text" name ="name-game" id= "name-game">
                </td>
            </tr>
            <tr>
                <td>
                    Sinopsis
                </td>

                <td>
                    <input type="text" name ="synopsis" id= "synopsis">
                </td>
            </tr>
            <tr>
                <td>
                    Fecha lanzamiento
                </td>

                <td>
                    <input type="date" name ="release-date" id= "release-date">
                </td>
            </tr>
            <tr>
                <td>
                    Genero
                </td>

                <td>
                    <input type="text" name ="type" id= "type">
                </td>
            </tr>
            <tr>
                <td>
                    Idioma
                </td>

                <td>
                    <input type="text" name ="language" id= "language">
                </td>
            </tr>
            <tr>
                <td>
                    Tamaño
                </td>

                <td>
                    <input type="text" name ="size" id= "size">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    Requerimientos del sistema <br> minimo
                </td>
            </tr>
            <tr>
                <td>
                    Sistema operativo
                </td>

                <td>
                    <input type="text" name ="min-so" id= "min-so">
                </td>
            </tr>
            <tr>
                <td>
                    Procesador
                </td>

                <td>
                    <input type="text" name ="min-processor" id= "min-processor">
                </td>
            </tr>
            <tr>
                <td>
                    Memoria
                </td>

                <td>
                    <input type="text" name ="min-memory" id= "min-memory">
                </td>
            </tr>
            <tr>
                <td>
                    Graficos
                </td>

                <td>
                    <input type="text" name ="min-graphics" id= "min-graphics">
                </td>
            </tr>
            <tr>
                <td>
                    Almacenamiento
                </td>

                <td>
                    <input type="text" name ="min-storage" id= "min-storage">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    Requerimientos del sistema <br> recomendados
                </td>
            </tr>
            <tr>
                <td>
                    Sistema operativo
                </td>

                <td>
                    <input type="text" name ="recommended-so" id= "recommended-so">
                </td>
            </tr>
            <tr>
                <td>
                    Procesador
                </td>

                <td>
                    <input type="text" name ="recommended-processor" id= "recommended-processor">
                </td>
            </tr>
            <tr>
                <td>
                    Memoria
                </td>

                <td>
                    <input type="text" name ="recommended-memory" id= "recommended-memory">
                </td>
            </tr>
            <tr>
                <td>
                    Graficos
                </td>

                <td>
                    <input type="text" name ="recommended-graphics" id= "recommended-graphics">
                </td>
            </tr>
            <tr>
                <td>
                    Almacenamiento
                </td>

                <td>
                    <input type="text" name ="recommended-storage" id= "recommended-storage">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Ingresar datos">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>