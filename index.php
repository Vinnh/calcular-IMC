<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC calc</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>


        <h1>Calcule o seu IMC</h1>

        <form method="POST" action="/resultado.php">

            <div class="inputBox">
            <input type="text" name="altura" id="altura" required>
            <span>Altura</span>                
            </div>

            <div class="inputBox">
            <input type="text"  name="peso" id="peso" required>
            <span>Peso</span>                
            </div>

            <div class="btn">
                <button type="submit">calcular</button>
            </div>

        </form>

    
</body>
</html>