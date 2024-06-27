<?php
require('fpdf/fpdf.php');
//Capturar los inputs del html en una variable
$cliente= $_POST['cliente'];
list($producto, $precio)=explode('|', $_POST['producto']);
$cantidad = $_POST['cantidad'];

//Calcular 
$monto= $cantidad * $precio;

//condicionales 
if ($monto <400) {
    $descuento=0.03; 
}elseif ($monto <=700 )  {
    $descuento= 0.06; 
}else if ($monto <=1000  )  {
    $descuento= 0.09; 
}else if ( $monto <1400  )  {
    $descuento= 0.12; 
}else{
    $descuento=0.15; 
}
$desc=$monto *$descuento;
$montoDesc= $monto -($monto *$descuento);
$igv= $montoDesc* 0.18;
$neto= $montoDesc + $igv;

//EMPEZAMOS A USAR LA LIBRERIA FPDF
//PASO 1: CREAMOS EL PDF
$pdf= new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Arial', 'B', 14);

//PASO 2: Diseñamos el titulo de nuestro pdf
//0_sin
//1_con
//recibe hasta 7 parametros, (ancho, alto, text, border, salto de linea, alineacion);
$pdf -> Cell(0, 10, 'Boleta de venta', 0, 1, 'C');

//PASO 3: Capturamos los datos de entrada
$pdf -> SetFont('Arial', 'B', 14);
$pdf -> Cell(0, 10, "Cliente: $cliente", 0, 1, 'L');
$pdf -> Cell(0, 10, "Producto: $producto", 0, 1, 'L');
$pdf -> Cell(0, 10, "Cantidad: $cantidad", 0, 1, 'L');

//PASO 4: DISEÑAMOS EL ENCABEZADO
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> SetTextColor(255, 255, 255);
$pdf -> SetFillColor(0, 0, 0);
$pdf -> Cell(60, 10, "Concepto", 1, 0, 'C', true);
$pdf -> Cell(60, 10, "Detalles", 1, 0, 'C', true);
$pdf -> Cell(60, 10, "Monto", 1, 1, 'C', true);


//PASO 5: DISEÑAMOS EL CUERPO DE LA TABLA
$pdf -> SetFont('Arial', 'B', 12);
$pdf -> SetTextColor(0,0, 0);
$pdf -> Cell(60, 10, "Precio por unidad:", 1, 0, 'C');
$pdf -> Cell(60, 10,  "$cantidad unidades", 1, 0, 'C');
$pdf -> Cell(60, 10, $precio, 1, 1, 'C');

$pdf -> Cell(60, 10, "Subtotal:", 1, 0, 'C');
$pdf -> Cell(60, 10,  "", 1, 0, 'C');
$pdf -> Cell(60, 10, $monto, 1, 1, 'C');

$pdf -> Cell(60, 10, "Descuento:", 1, 0, 'C');
$pdf -> Cell(60, 10,  $descuento, 1, 0, 'C');
$pdf -> Cell(60, 10, '-S/'. number_format($monto* $descuento), 1, 1, 'C');

$pdf -> Cell(60, 10, "Subtotal con descuento:", 1, 0, 'C');
$pdf -> Cell(60, 10,  "", 1, 0, 'C');
$pdf -> Cell(60, 10, $montoDesc, 1, 1, 'C');

$pdf -> Cell(60, 10, "IGV 18%:", 1, 0, 'C');
$pdf -> Cell(60, 10,  "", 1, 0, 'C');
$pdf -> Cell(60, 10, "S/$igv", 1, 1, 'C');

$pdf -> Cell(60, 10, "Neto:", 1, 0, 'C');
$pdf -> Cell(60, 10,  $neto, 1, 0, 'C');
$pdf -> Cell(60, 10, "S/$neto", 1, 1, 'C');

//PASO 6: Generamos el pdf
$pdf-> OutPut('D', 'Boleta_de_venta.pdf')
?>

