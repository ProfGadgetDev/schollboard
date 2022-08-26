<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$uploadFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if (file_exists($target_file)) { // Prüfen, ob Datei schon vorhanden ist
        echo "Diese Datei existiert bereits. Falls dies eine andere Datei ist, lade sie unter neuem Namen hoch.";
        $uploadOk = 0;
    }

    // Prüfen, ob die Datei zu groß ist
    if ($_FILES["fileToUpload"]["size"] > 9500000) {
        echo "Die Datei ist zu groß!";
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        echo "Die Datei wurde nicht hochgeladen!";
    } elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Die Datei ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " wurde erfolgreich hochgeladen.";
    } else {
        echo "Es gab Probleme beim Dateiupload";
    }
}
?>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<html><a href="https://www.scholl-muenster.de/"><h2 class="font-sans text-1xl">Zurück zur Homepage</h2></a></html>