import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

public class Main {

    public static void main(String[] args) throws IOException {

        //Loading an existing document
        String fileName = args[0];
        File file = new File(fileName);
        PDDocument document = PDDocument.load(file);

        //Instantiate PDFTextStripper class
        PDFTextStripper pdfStripper = new PDFTextStripper();

        //Retrieving text from PDF document
        String text = pdfStripper.getText(document);
        System.out.println(text);

        // Write text to a txt file
        BufferedWriter writer = new BufferedWriter(new FileWriter("convertedPDF.txt"));
        writer.write(text);
        writer.close();

        //Closing the document
        document.close();
    }
}
