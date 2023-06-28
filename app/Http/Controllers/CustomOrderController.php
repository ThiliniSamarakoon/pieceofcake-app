<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF;

class CustomOrderController extends Controller
{
    public function submitForm(Request $request)
    {
        // Get the form inputs
        $cakeOptions = $request->input('cake_options');
        $icingOptions = $request->input('icing_options');
        $boardShape = $request->input('board_shape');
        $quantity = $request->input('quantity');
        $weight = $request->input('weight');
        $otherWeight = $request->input('other_weight');
        $otherWeightInput = $request->input('other_weight_input');
        $description = $request->input('description');

        // Generate PDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('Helvetica', 'B', 16);
        $pdf->Cell(0, 10, 'Custom Cake Order Details', 0, 1);
        $pdf->Ln(10);
        $pdf->SetFont('Helvetica', '', 12);

        // Display the form inputs in the PDF
$pdf->Cell(0, 10, 'Choose a Cake: ' . implode(', ', $cakeOptions), 0, 1);
$pdf->Cell(0, 10, 'Icing Options: ' . implode(', ', $icingOptions), 0, 1);
$pdf->Cell(0, 10, 'Cake Board Shape: ' . implode(', ', $boardShape), 0, 1);
$pdf->Cell(0, 10, 'Quantity: ' . $quantity, 0, 1);
$pdf->Cell(0, 10, 'Weight: ' . ($otherWeight ? $otherWeightInput : $weight), 0, 1);
$pdf->Cell(0, 10, 'Description: ' . $description, 0, 1);

        // Save the PDF
        $pdf->Output(public_path('pdfs/custom_order.pdf'), 'I');

        // Generate the URL for the PDF
        $pdfUrl = asset('pdfs/custom_order.pdf');

        // Redirect to customized orders page
       $redirectResponse = Redirect::route('customer.customized_orders');

        // Generate a response with JavaScript to open the PDF in a new tab after the redirect
        $script = "<script>window.open('{$pdfUrl}', '_blank');</script>";
        $response = $redirectResponse->setContent($script);

        return $response;
    }
}
