<?php
// download composer reuire dompdf/dompdf
// require_once 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Adapter\CPDF;
use Mpdf\Tag\Option;

$html = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
    <style>
        @page{
                size:20cm 50cm;
            }
    </style>
    <link rel="stylesheet" href="http://localhost:8080/dumpy%20bill/css/pdf.css">
</head>

<body>

    <div class="starbucks">
        <table>
            <thead>
                <tr>
                    <th colspan="5">
                        <p><img src="http://localhost:8080/dumpy%20bill/images/company_logo/Unknown.png" alt="starbucks"></p>
                    </th>

                </tr>

                <tr>
                    <td colspan="5">
                        <p>TATA STARBUCKS PRIVATE LIMITED</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p>TAX INVOICE</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p>Ground Floor, </p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p>Dumas Rd,</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p> New Magdalla, Surat-395007</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p>VR Mall Surat</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p>VR Mall Surat</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p>Gujarat-395007</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5">
                        <p>State Code-24</p>
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="5">
                        <p>GSTIN:</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="5"><br><br></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <p style="text-align:left;">TAX INVOICE</p>
                    </td>

                </tr>
            </thead>
            <tr>
                <td colspan="5"><br></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td class="rows"  colspan="2">
                    <p style="text-align: left;"> Invoice No:25950150190114</p>
                </td>
                <td></td>
                <td class="row" colspan="2">
                    <p style="text-align: right;">Shift code: 1</p>
                </td>
            </tr>
            <tr>
                <td class="rows" colspan="2">
                    <p style="text-align: left;">Invoice Date: 14-01-2019</p>
                </td>
                <td></td>
                <td class="row" colspan="2">
                    <p style="text-align: right;">Till NO:2 A</p>
                </td>
            </tr>
            <tr>
                <td class="rows" colspan="2">
                    <p style="text-align: left;">Invoice Time: 04:27 PM</p>
                </td>
                <td></td>
                <td class="row" colspan="2">
                    <p style="text-align: right;">Partner :Daman</p>
                </td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr class="part">
                <td class="rows"><p style="text-align: left;"> Item Name</p></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="part">
                <td class="rows"><p style="text-align: left;">HSN code</p></td>
                <td><p style="text-align: left;">Qty</p></td>
                <td><p style="text-align: left;">Sale price</p></td>
                <td><p style="text-align: left;">Disc</p></td>
                <td><p style="text-align: left;">Total Amt</p></td>
            </tr>
            <tr class="part">
                <td class="rows" colspan="4"><p style="text-align: left;">Java Chip Chocolate Muffin</p></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align:left;">996331</p></td>
                <td><p style="text-align: center;">1</p></td>
                <td><p style="text-align: center;">175.00</p></td>
                <td><p style="text-align: center;">00.00</p></td>
                <td><p style="text-align: center;">175.00</p></td>
            </tr>
            <tr class="part">
                <td class="rows" colspan="4"><p style="text-align: left;">Tall Signature Hot Chocolate</p></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align:left;">996331</p></td>
                <td><p style="text-align: center;">1</p></td>
                <td><p style="text-align: center;">215.00</p></td>
                <td><p style="text-align: center;">00.00</p></td>
                <td><p style="text-align: center;">215.00</p></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align: left;">Total</p></td>
                <td><p>2</p></td>
                <td><p>390.00</p></td>
                <td><p>00.00</p></td>
                <td><p>390.00</p></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align: left;">GST SUMMARY</p></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align: left;">HSN Code</p></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align:left;">CGST</p></td>
                <td><p style="text-align: center;">SGST</p></td>
                <td><p style="text-align: center;">Cess</p></td>
                <td><p style="text-align: center;">Taxable</p></td>
                <td><p style="text-align: center;"></p></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align:left;">Rate</p></td>
                <td><p style="text-align: center;">Rate</p></td>
                <td><p style="text-align: center;">Rate</p></td>
                <td><p style="text-align: center;">Value</p></td>
                <td><p style="text-align: center;"></p></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align:left;">Amt</p></td>
                <td><p style="text-align: center;">Amt</p></td>
                <td><p style="text-align: center;">Amt</p></td>
                <td><p style="text-align: center;"></p></td>
                <td><p style="text-align: center;">Tax Amount</p></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align: left;">996331</p></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align:left;">02.50%</p></td>
                <td><p style="text-align: center;">02.50%</p></td>
                <td><p style="text-align: center;">00.00%</p></td>
                <td><p style="text-align: center;">390.00</p></td>
                <td><p style="text-align: center;"></p></td>
            </tr>
            <tr>
                <td class="rows"><p style="text-align:left;">9.75</p></td>
                <td><p style="text-align: center;">9.75</p></td>
                <td><p style="text-align: center;">00.00</p></td>
                <td><p style="text-align: center;"></p></td>
                <td><p style="text-align: center;">19.50</p></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align:left;">Total</p></td>
                <td colspan="2"><p style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19.50</p></td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align:left;">Net Invoice Amount</p></td>
                <td colspan="2"><p style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;409.50</p></td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align:left;">Rounded Off Invoice Amount</p></td>
                <td colspan="2"><p style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;409.50</p></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align: left;">PAYMENT SUMMARY</p></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align: left;">Manual EDC</p></td>
                <td colspan="2"><p>:&nbsp;&nbsp;&nbsp; 409.50</p></td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align: left;">Total Amount</p></td>
                <td colspan="2"><p>:&nbsp;&nbsp;&nbsp; 409.50</p></td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align: left;">Amount Repaid</p></td>
                <td colspan="2"><p>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 00.00</p></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align: left;">PAYMENT DETAILS</p></td>
                <td colspan="2"><p></p></td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align: left;">Manual EDC Amount</p></td>
                <td><p style="text-align: left;">:&nbsp;&nbsp;&nbsp;</p></td>
                <td colspan="2"><p style="text-align: left;">409.50</p></td>
            </tr>
            <tr>
                <td class="rows" colspan="3"><p style="text-align: left;">Clearing Bank</p></td>
                <td><p style="text-align: left;">:&nbsp;&nbsp;&nbsp;</p></td>
                <td><p>Manual EDC HDFC</p></td>
            </tr>
            <tr>
                <td colspan="5">--------------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td colspan="5"><p>CST : LST-27160921457 / CST-27160921457</p></td>
            </tr>
            <tr style="padding-top: 10px;">
                <td colspan="5"><p>*** THANK YOU VISIT AGAIN ***</p></td>
            </tr>
            <tr style="padding-top: 30px;">
                <td colspan="5"><p style="text-align: left;">To inspire and nurture the human spirit... one person one cup and one neighbourhood at a time!</p></td>
            </tr>
        </table>
    </div>
</body>

</html>



<?php
// $option=new Options();
// $option->set('isRemoteEnabled',TRUE);
// $dompdf = new Dompdf($option);

// $dompdf->loadHtml($html);
// // (Optional) Setup tde paper size and orientation
// $dompdf->setPaper('', 'landscape');
// // Render tde HTML as PDF
// $dompdf->render();

// // Output tde generated PDF to Browser
// $dompdf->stream();
?>