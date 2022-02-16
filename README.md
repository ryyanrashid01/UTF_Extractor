# UTF Extractor
A web application to allow users to convert a .pdf file to .txt file using Java PDFBox library (https://pdfbox.apache.org/).
The application is set up in a docker container. The whole application is coded in PHP and uses Java to convert pdf file to txt file using Java PDFBox library. First Linux Ubuntu image was downloaded inside the container and then an Apache server was set up to serve the php files. 

### Get Docker Container Image
To download and use the application download the container image from docker hub, go to this site: https://hub.docker.com/repository/docker/ryyanrashid01/utf_extractor
OR
Paste this in your terminal:
```
docker pull ryyanrashid01/utf_extractor:3
```

### Running the Web Application
To run the web application on your machine, paste these commands in your terminal one by one:
1. ```docker run -it --name <sample-name> -p 8080:80 ryyanrashid01/utf_extractor:3```
2. ```service apache2 start```

Wait for the Apache server to start. Once it is started, you can go to http://localhost:8080 on your browser to access and use the web app.

### Screenshots
<p align="center">
    <img href="https://github.com/ryyanrashid01/UTF_Extractor/blob/main/Screenshots/sc1.jpeg" alt="Screenshot">
</p>
