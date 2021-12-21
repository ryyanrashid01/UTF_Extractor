<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="shortcut icon" href="/Resources/favicon/favicon.ico" type="image/x-icon">
    <title>UTF Extractor | Convert</title>
</head>
<style>
    body {
        color: white;
    }
</style>
<body>
    <nav id="navbar">
        <span class="logo"><a href="index.php">UTF Extractor</a></span>
        <div class="menu">
            <a class="active" href="index.php">Home</a>
            <a href="about.php">About</a>
        </div>
    </nav>
<div class="converted">
    <iframe src='convertedPDF.txt' width=480 height=560 frameborder=0 ></iframe>
</div>
<br>
<a href='convertedPDF.txt' download><button class="btn btn-primary">Download .txt file</button></a> <br><br>
<a href='index.php'><button class="btn btn-light">Convert again</button></a>

<?php
    exec("rm -f original.pdf");
?>
</body>
</html>
