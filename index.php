<?php
//source PDF file
$source_pdf="C:/xampp/htdocs/functionsourcecode/PDF_To_HTML/test.pdf";

//folder contain HTML file
$output_folder="C:/xampp/htdocs/functionsourcecode/PDF_To_HTML/html";

//execute pdftohtml
passthru("pdftohtml $source_pdf $output_folder/new_file_name");

?>