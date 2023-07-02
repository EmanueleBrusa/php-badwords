<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Badwords</title>
    <style>
 
    </style>
</head>

<body>
    <form action="backend.php" method="POST">
        <div class="container">
            <div class="row justify-content-center align-items-center flex-column">
                <div class="col-6 mb-5">
                    <h1 class="text-center mb-5">Censurator 9000</h1>
                    <label for="censuratorText" class="form-label">Inserisci il testo che vuoi censurare:</label>
                    <textarea class="form-control" name="text_area" id="text_area" rows="10"></textarea>
                </div>
                <div class="col-3 text-center">
                <input class="btn btn-primary" type="submit" value="invia dati">
                </div>
            </div>
        </div>
    </form>
</body>

</html>