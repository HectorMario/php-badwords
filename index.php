
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="censored.php" method="get">
        <!-- passa come parametri i name di ogni input -->
        <label for="text">Scrivi il texto originale</label>
        <input type="text" id="text" name="text">

        <label for="censored">Scrivi la pararola a censurare</label>
        <input type="text" id="censored" name="censored">
        <!-- submit fa partire l'action del form -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>