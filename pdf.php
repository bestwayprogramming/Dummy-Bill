<?php
// download composer reuire dompdf/dompdf
    require_once 'vendor/autoload.php';
    use Dompdf\Dompdf;
    use Dompdf\Options;
    use Dompdf\Adapter\CPDF;
use Mpdf\Tag\Option;

    $html='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       
        <div>
            <img src="images/company_logo/Unknown.png" alt="starbucks">
        </div>
    </body>
    </html>';
?>
    

<?php
    $option=new Options();
    $option->set('isRemoteEnabled',TRUE);
    $dompdf = new Dompdf($option);

    $dompdf->loadHtml($html);
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    $dompdf->stream();
?>
