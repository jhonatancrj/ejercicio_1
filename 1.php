<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetado de Cuentas Bancarias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        .account {
            background-color: #FFA500;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        h2 {
            color: #FF0000; 
            margin-top: 0;
        }
        p {
            color: #FF0000; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tipos de Cuentas Bancarias</h1>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'bdjhonatan');

        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $sql = "SELECT DISTINCT tipo FROM cuentabancaria";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="account">';
                echo '<h2>' . $row['tipo'] . '</h2>';
                echo '</div>';
            }
        } else {
            echo "No se encontraron tipos de cuentas bancarias.";
        }

        mysqli_close($conn);
        ?>

    </div>
</body>
</html>
