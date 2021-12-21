<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="shortcut icon" href="/Resources/favicon/favicon.ico" type="image/x-icon">
    <title>UTF Extractor | Upload</title>
</head>
<body>
    <nav id="navbar">
        <span class="logo"><a href="index.php">UTF Extractor</a></span>
        <div class="menu">
            <a class="active" href="index.php">Home</a>
            <a href="about.php">About</a>
        </div>
    </nav>
<?php
$fileName = "";
if (isset($_POST['upload']))
{
    $file = $_FILES['pdfFile'];
    $fileName = $file['name'];  
    $fileTmpName = $file['tmp_name'];
    $fileDestination = $fileName;
    $fileName = "original.pdf";
    move_uploaded_file($fileTmpName, $fileName);
}
elseif (isset($_POST['URL']))
{
    $url = $_POST['link'];
    $fileName = "original.pdf";
    if(!file_put_contents($fileName,file_get_contents($url))) {
        echo ("Could not access online file!");
    }
}
echo "<iframe src='$fileName' height=620 width=480 frameborder=0></iframe>";
shell_exec("java -classpath .:Dependencies/commons-logging-1.1.1-1.0.0.jar:Dependencies/pdfbox-2.0.24.jar:Dependencies/fontbox-2.0.2.jar Main ".$fileName);
echo "<br><a href='convert.php'><button class='btn btn-primary'>Convert</button></a>";
?>
</body>
</html>