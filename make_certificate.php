<html>
<head>
    <title>Make me a certificate, VitoshAcademy.com!</title>
</head>
<body>
<?php
        require("fpdf/fpdf.php");
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Helvetica", "B", 22);
    $pdf->Cell(0,20,"Certificate","B",1,"C");
    $pdf->Ln();
    $pdf->SetFont("Helvetica", "B", 16);
    $pdf->Cell(0,20,"OF PHP Knowledge","I",0,"C");
    $pdf->Ln();
    $pdf->Cell(0,20,"Issued to VitoshAcademy.Com","I",0,"C");
    $pdf->Ln();
    $pdf->Cell(0,20,"By VitoshAcademy.Com","I",0,"C");
    $pdf->Ln();
    $pdf->SetFont("Helvetica", "B", 11);
    $pdf->SetDrawColor(255, 0, 255);
    $pdf->SetLineWidth(0.1);
    $pdf->SetFillColor(192, 192, 192);
    $pdf->SetTextColor(255, 0, 0);
    
    $pdf->Cell(25, 5, "N"     , "LTR", 0, "C", 1);
    $pdf->Cell(25.1, 5, "N * 11", "LTR", 0, "C", 1);
    $pdf->Cell(25.2, 5, "N * 13", "LTR", 0, "C", 1);
    $pdf->Cell(25.3, 5, "N * 17", "LTR", 0, "C", 1);
    $pdf->Cell(25.4, 5, "N * 19", "LTR", 0, "C", 1);
    $pdf->Cell(25.5, 5, "N * 23", "LTR", 0, "C", 1);
    $pdf->Cell(25.6, 5, "N * 31", "LTR", 0, "C", 1);
    
    $pdf->Ln();
    $bool_draw = True;
    for($w=7; $w<=50; $w=$w+7)
    {   
        if ($bool_draw == True)
        {   
            $pdf->SetFillColor(105,110,115);
            $pdf->SetTextColor(1,300,1);
            $bool_draw = False;
        }
        
        else
        {
            $bool_draw = True;
            $pdf->SetFillColor(1,300,1);
            $pdf->SetTextColor(105,110,115);
        }
        
        $pdf->SetLineWidth(0.05);
        $pdf->SetTextColor(255,255,255);
        $wb = $w;
        $pdf->Cell(25, 5, $w,     "LR", 0, "C",1);
        $pdf->Cell(25.1, 5, $wb*11, "LR", 0, "C", 1);
        $pdf->Cell(25.2, 5, $wb*13, "LR", 0, "C", 1);
        $pdf->Cell(25.3, 5, $wb*17, "LR", 0, "C", 1);
        $pdf->Cell(25.4, 5, $wb*19, "LR", 0, "C", 1);
        $pdf->Cell(25.5, 5, $wb*23, "LR", 0, "C", 1);
        $pdf->Cell(25.6, 5, $wb*31, "LR", 0, "C", 1);
        $pdf->Ln();
    }
    $pdf->Ln();
    $pdf->Ln();
    $pdf->SetFillColor(160,20,123);
    $pdf->SetTextColor(1,300,1);
    $pdf->Write(10, "Go to VitoshAcademy", "http://www.vitoshacademy.com");
    $pdf->Ln();
    $pdf->SetFillColor(123,440,120);
    $pdf->SetTextColor(100,0,0);
    $pdf->Write(10, "More PHP here", "http://www.vitoshacademy.com/?s=php&submit=Go");
    $pdf->SetY(-40);
    $pdf->Cell(0,10,"Anything is possible. In any color.","T","1","C");
    $pdf->Output("certificate.pdf");
    echo "Your certificate is generated!";
?>

</body>
</html>

