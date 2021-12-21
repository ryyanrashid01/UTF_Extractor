<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="shortcut icon" href="/Resources/favicon/favicon.ico" type="image/x-icon">
    <title>UTF Extractor</title>
</head>

<body>
    <?php
        exec("rm -f convertedPDF.txt");
    ?>
    <nav id="navbar">
        <span class="logo"><a href="index.php">UTF Extractor</a></span>
        <div class="menu">
            <a class="active" href="index.php">Home</a>
            <a href="about.php">About</a>
        </div>
    </nav>
    <div class="file-submission">
        <div class="upload">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="formFile">Upload.</label>
                    <input class="pdfFile"" type="file" id="formFile" name="pdfFile" accept=".pdf" required>
                    <input class="btn btn-primary" type="submit" name="upload">
                </div>
            </form>
        </div>
        <hr class="dotted">
        <div class="url">
            <form action="upload.php" method="post">
                <label>Enter URL</label>
                <input class="urlPDF" type="text" name="link" placeholder="Enter link here" required>
                <input class="btn btn-primary" type="submit" name="URL">
            </form>
        </div>
    </div>
    <br><br>
    <hr class="dotted" style="width:50%; margin: auto;">
    <div class="instructions">
        <br>
        <label>Instructions</label>
        <br>
        <div class="points">
            1. UPLOAD the pdf file or enter the URL of the pdf file you want to convert. <br>
            2. Click on "Submit" button. <br>
            3. Confirm the pdf file and click "Convert" button. <br>
            4. Get your converted txt file.
        </div>
    </div>
</body>

</html>