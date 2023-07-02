<?php
    //stampa a scehrmo e conta della lunghezza:
    $textAreaContent = $_POST['text_area'];
    //var_dump($textAreaContent);
    $textAreaLenght = strlen($textAreaContent); //non capisco perché non è precisa la conta delle parole
    //var_dump($textAreaLenght);

    //censura del testo:
    $censoredWord = $_POST['censored_word'];
    $censoredText = str_replace($censoredWord, '***' , $textAreaContent);
    
    

    echo "<div class='container mt-5'>";
    echo "<h3>Testo inserito:</h3>";
    echo "<p>$textAreaContent</p>";
    echo "<h3>Lunghezza del testo:</h3>";
    echo "<p>$textAreaLenght caratteri</p>"; //in questo modo strlen invece funziona correttamente, non ho capito ma va bene così. chiedere delucidazioni.
    echo "<h3>Testo censurato:</h3>";
    echo "<p>$censoredText</p>"; 
    echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--cdn bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Badwords</title>
</head>
<body>

</body>
</html>