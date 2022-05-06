<?php
ob_start();

//Define las variables para el formato:
	setlocale(LC_ALL, 'es_ES');

	$date = strftime("%d de %B de %Y");
	$oldDate = strtotime($_POST['date']);
	//$date = date('Y-m-d',$oldDate);

	$opcionDeTitulacion = $_POST['modalidad'];
	$tituloyCapitulado = "&nbsp;";

	$interesado = $_POST['nombreAlumno'];
	$noCuenta = $_POST['noCuenta'];
	$generacion = $_POST['generacion'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$facebook = $_POST['facebook'];
	$telCasa = $_POST['telefonoCasa'];
	$telTrabajo = $_POST['telefonoTrabajo'];
	$telCelular = $_POST['telefonoCelular'];

	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$anio = $_POST['anio'];

	$fullDate = "<u>$dia</u> de <u>$mes</u> de <u>$anio</u>";

	$noCuentaConjunto = "";
	$generacionConjunto = "";
	$direccionConjunto = "";
	$emailConjunto = "";
	$facebookConjunto = "";
	$telCasaConjunto = "";
	$telTrabajoConjunto = "";
	$telCelularConjunto = "";
?>

<html lang="es">
<head>
<meta charset="utf-8" />
</head>
<body>
	<style>
		*
		{
			font-family: sans-serif;
		}
	</style>
<font face="arial">
	<div style="margin-top:-20" id="encabezado">
		<table width="100%">
			<tr>
				<td style="vertical-align:top" align="center">
					
			<img src="data:image/jpeg;base64,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" width="80px">


				</td>
				<td align="center">
					<b><span align="center"> UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO </span></b><br>
					<b><span align="center"> FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN </span></b><br>
					<b><span align="center"> SECRETARÍA ACADÉMICA </span></b><br>
					<b><span align="center"> INGENIERÍA EN COMPUTACIÓN </span></b><br>
					<b><i><span align="center"> Solicitud de registro de titulación y capitulado </span></i></b><br><br>
					<span align="center"> Nezahualcóyotl Estado de México a <?php echo $fullDate?>  </span><br><br>
				</td>
				<td style="vertical-align:top" align="center" ><img src="data:image/jpeg;base64,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" width="80px"></td>
			</tr>
		</table>
	</div>

	<div id="parrafo1">
		<span><b>M. EN I. FERNANDO MACEDO CHAGOLLA<b></span><br>
		<span><b>DIRECTOR DE LA FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN<b></span><br>
		<span><b>P R E S E N T E<b></span><br><br>
		<p align="justify">Con motivo de haber acreditado la totalidad de asignaturas y requisitos académicos del Plan de Estudios vigente en la Carrera de <b>INGENIERÍA EN COMPUTACIÓN</b>, solicito se me autorice la opción de titulación:</p>
	<table width="100%" border="1" style="border-collapse: collapse;">
		<tr>
			<td align="center"><?php echo $opcionDeTitulacion;?></td>
		</tr>
	</table>
	<br><span>Cuyo título y capitulado pongo a su consideración a continuación:</span><br>
	<table width="100%" border="1" style="border-collapse: collapse;">
		<tr>
			<td align="center"><?php echo $tituloyCapitulado;?></td>
		</tr>
	</table>
	<br>
	<table height="5000px" width="100%" border="1" style="border-collapse: collapse;">
		<tr>
			<td align="center"><?php echo '<br><br><br><br><br><br><br><br>';?></td>
		</tr>
	</table>

	<br>
	<table height="5000px" width="100%" border="0" style="border-collapse: collapse;">
		<tr>
			<td width="33%" align="center"><br><hr></td>
			<td>&nbsp;</td>
			<td width="33%" align="center"><br><hr></td>
			<td>&nbsp;</td>
			<td width="33%" align="center"><br><hr></td>
		</tr>
		<tr>
			<td style="font-size:12px; vertical-align:top" width="33%" align="center"><?php echo ''.$interesado.'<br><b><i>(Registro individual)</i></b>';?></td>
			<td>&nbsp;</td>
			<td style="font-size:12px; vertical-align:top" width="33%" align="center"><?php echo '<b><i>(Solo para registro conjunto)</i></b>'?></td>
			<td>&nbsp;</td>
			<td style="font-size:12px; vertical-align:top" width="33%" align="center"><?php echo '<b><i>Director del Trabajo de Titulación</i></b>'?></td>
		</tr>
		<tr>
			<td align="left">
				<br>
				<span style="font-size:12px;"><?php echo 'Núm. Cuenta:'.$noCuenta.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Generación:'.$generacion.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Dirección:'.$direccion.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'E-mail:'.$email.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Facebook:'.$facebook.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Tel. Casa:'.$telCasa.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Tel. Trabajo:'.$telTrabajo.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Tel. Celular:'.$telCelular.'<br>';?> </span>
			</td>
			<td>&nbsp;</td>
			<td align="left">
				<br>
				<span style="font-size:12px;"><?php echo 'Núm. Cuenta:'.$noCuentaConjunto.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Generación:'.$generacionConjunto.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Dirección:'.$direccionConjunto.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'E-mail:'.$emailConjunto.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Facebook:'.$facebookConjunto.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Tel. Casa:'.$telCasaConjunto.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Tel. Trabajo:'.$telTrabajoConjunto.'<br>';?> </span>
				<span style="font-size:12px;"><?php echo 'Tel. Celular:'.$telCelularConjunto.'<br>';?> </span>
			</td>
			<td>&nbsp;</td>
			<td align="center"></td>
		</tr>
	</table>
	</div>

	<div style="position: absolute; bottom: 0;" id="parrafo2">
	<table>
			<tr>
				<td width="33%" style="vertical-align:bottom" align="center">
					<span ><hr></span>
					<span style="font-size:12px;" align="center">Ing. Jorge Arturo López Hernández</span>
					<span style="font-size:10px;" align="center"><b><i>Jefe de Carrera de Ingeniería en Computación</i></b></span>
				</td>
				<td width="33%">&nbsp;</td>
				<td width="33%">
					<div style="border-style: solid;border-width: 1px;">
							<p style="font-size:12px; margin: 10px" align="justify"><b>USO EXCLUSIVO DE LA SECCIÓN DE REVISIÓN DE ESTUDIOS </b></p>
					</div>
					<div style="border-style: solid;border-width: 1px;">
					
							<p style="font-size:12px; margin: 10px" align="justify"> Se certifica que el alumno que hace la presente solicitud, ha aprobado la totalidad de asignaturas que comprende el Plan de Estudios vigente, y cumplido con su Servicio Social, así como los requisitos para titulación.

								<br>
								<br>
									<span style="font-size:12px;" align="center">_______________________________<br></span>
									<span style="font-size:12px;" align="center">Jefe de la sección de Revisión de Estudios</span></p>
					</div>
				</td>
			</tr>
		</table>

	</div>

</font>
</body>
</html>



<?php
$html = ob_get_clean();

// include autoloader
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Formato de Titulación - '.$interesado.'');
?>