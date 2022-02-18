# UTF Extractor
A web application to allow users to convert a .pdf file to .txt file using Java PDFBox library (https://pdfbox.apache.org/).
The application is set up in a docker container. The whole application is coded in PHP and uses Java to convert pdf file to txt file using Java PDFBox library. First Linux Ubuntu image was downloaded inside the container and then an Apache server was set up to serve the php files. 

### Run it locally
To run the web application locally on your machine, make sure your machine has:
1. PHP (https://www.php.net/), and
2. JDK (https://www.oracle.com/java/technologies/downloads/)

 Once sure, follow these steps:
 1. Clone this repository
 ```git clone git@github.com:ryyanrashid01/UTF_Extractor.git```
 2. cd into the directory and paste the following command in the terminal:
 ```php -S 127.0.0.1:8000```
 and the website will start running on port 8000 (https://localhost:8000)


### Get Docker Container Image
To download and use the application download the container image from docker hub, go to this site: https://hub.docker.com/repository/docker/ryyanrashid01/utf_extractor
OR
Paste this in your terminal:
```
docker pull ryyanrashid01/utf_extractor:3
```

#### Running the Web Application
To run the web application on your machine, paste these commands in your terminal one by one:
1. ```docker run -it --name <sample-name> -p 8080:80 ryyanrashid01/utf_extractor:3```
2. ```service apache2 start```

Wait for the Apache server to start. Once it is started, you can go to http://localhost:8080 on your browser to access and use the web app.

### Screenshots
<p align="center">
    <img src="https://github.com/ryyanrashid01/UTF_Extractor/blob/main/Screenshots/sc1.jpeg?raw=true" alt="Screenshot">
</p>
