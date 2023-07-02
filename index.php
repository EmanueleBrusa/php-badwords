<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            padding: 40px;
        }

        input {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1>form esempio</h1>
    <form action="backend.php" method="POST">
        <label for="nome">nome</label>
        <input type="text" id="nome" name="nome" placeholder="inserisci il nome">
        <label for="cognome">cognome</label>
        <input type="text" name="cognome" id="cognome" placeholder="inserisci il cognome">
        <input type="submit" value="invia dati">
    </form>
</body>

</html>