<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Datei Upload - Das scholl.board Projekt</title>

    
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div style="padding-left: 15px; padding-top: 12px">
    <h1 class="font-sans text-2xl" style="color: var(--pewter-blue)">Datei Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p class="font-sans">Datei zum hochladen: </p>
        <input class="font-sans" type="file" name="fileToUpload" id="fileToUpload"> <br>
        <input class="font-sans hover:underline" type="submit" value="Hochladen" name="submit">
    </form>
    </div>
</body>
</html>