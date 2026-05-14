<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
        body {
            text-align: center;
        }

        input {
            margin: 5px;
        }
    </style>
</head>
<body>

    <h2>Formulario</h2>

    <form onsubmit="mostrarDatos(event)">
        <input type="text" id="nombre" placeholder="Nombre"><br>
        <input type="text" id="materia" placeholder="Materia"><br>
        <button type="submit">Enviar</button>
    </form>

    <p id="resultado"></p>

    <script>
        function mostrarDatos(e) {
            e.preventDefault();

            let nombre = document.getElementById("nombre").value;
            let materia = document.getElementById("materia").value;

            document.getElementById("resultado").innerText =
                "Nombre: " + nombre + " - Materia: " + materia;
        }
    </script>

</body>
</html>