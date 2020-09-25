<?php
//incluimos los ficheros
require('./fpdf/fpdf.php');
$fpdf= new FPDF();


class PDFDiseno extends FPDF{
    // Cabeza
    function Header()
    {
        // Logo o imagen
        $this->Image('./imagenes/Imagen1.jpg', 0, 2, 35);

        // Tipo de letra
        $this->SetFont('Times', 'B', 18);

        // nos movemos a la celda
        $this->Cell(80);

        // incluimos el nombre de la empresa
        $this->Cell(55, 10, 'Universidad Sublime Design', 0, 0, 'R');
        $this->SetFont('Times', 'BU', 18);
        $this->Cell(20, 28, 'Reporte de estudiantes de System Design', 0, 0, 'R');

        // damos un salto de linea
        $this->Ln(20);
    }

    function Footer()
    {
        // definimos posicion
        $this->SetY(-15);
        // definir tipo de letra
        $this->SetFont('Arial', 'I', 8);
        // Definir texto de pie de pagina
        $this->Cell(0, 10, 'Pag. '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }


}
// Constructor
$pdf = new PDFDiseno();
$pdf ->AliasNbPages();
// creamos una nueva pagina
$pdf -> AddPage();
// especificamos tipo de letra y tamaño
$pdf -> SetFont('Times', 'B', 14);
// Imprimir en el documento
$pdf->Ln(2);
$pdf -> Cell(40, 10, 'Tutor:_________________________________________________', 0, 1);
$pdf -> Cell(40, 5, 'Fecha:______________________ ', 0, 1);
$pdf->Ln(6);
$pdf -> SetFont('Times', '', 12);



$estudiantes = array(
    "Alisson Almonte Paulino",
    "Arisleidy Torres Morel",
    "Carlos Miguel Castanos Amparo",
    "Eidher Cruz Ramirez",
    "Genesis Diaz Holguin",
    "Helmer Enrique Sosa Mendoza",
    "Ivan Manuel Pimentel Alberto",
    "Jean Carlos Pena Almonte",
    "John Anthony Garcia Perez",
    "Juan Miguel Hernandez Lopez",
    "Luisa Vereni Contreras Candelario",
    "Marielys Geraldino Marte",
    "Roberlina Caminero Holguin",
    "Yudermi Mabell Hernandez Cruz",
    );
$pdf->SetFillColor(246,134,10);
$pdf -> SetFont('Times','B', 12);
$pdf->Cell(10,10,"ID",1,0,"C",1);
$pdf->Cell(70,10,"Nombre Completo",1,0,"C",1);
$pdf->Cell(10,10,"PP",1,0,"C",1);
$pdf->Cell(10,10,"SP",1,0,"C",1);
$pdf->Cell(10,10,"EF",1,0,"C",1);
$pdf->Cell(73,10,"Comentarios",1,0,"C",1);
$pdf->SetFillColor(231,229,229);
$pdf->Ln();
$i=1;
foreach($estudiantes as $estudiantes) {
    $pdf->Cell(10,8,$i,1,0,"C",1);
    $pdf->Cell(70,8,"$estudiantes",1,0,"C",1);
    $pdf->Cell(10,8,"",1,0,"C",1);
    $pdf->Cell(10,8,"",1,0,"C",1);
    $pdf->Cell(10,8,"",1,0,"C",1);
    $pdf->Cell(73,8,"",1,0,"C",1);
    $pdf->Ln();
    $i++;
}

// Cierre de documento
$pdf -> Output();
