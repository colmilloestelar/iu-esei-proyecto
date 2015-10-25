<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GSTR</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/gstr.css" rel="stylesheet">
  </head>
  <body>
  <?php

  require_once "../views/renderTable.php";
  require_once "../views/renderTableGestion.php";

  //Añadido array de Idioma, se debe hacer include Idioma en la Pagina que llame a header.
	function Renderbanner($nombre){
		//Cargo la sesion apra tener acceso a los datos.
     session_start();
     $Idioma = getIdioma();
		//Comprobamos el valor de sesion y segun su valor cargo el array con el idioma deseado.
    echo "<nav class='navbar navbar-default'>";
    echo "<div class='container'>";
    echo "<span class='navbar-brand'> GSTR </span>";
    echo "<p class='navbar-text'>".$Idioma[$nombre]."</p>";
    echo "<ul class='nav navbar-nav navbar-right'>";
    echo '<li><a href="../php/CambioIdioma.php?leng=en">EN</a></li>';
    echo '<li><a href="../php/CambioIdioma.php?leng=sp">ES</a></li>';
    echo '<li><a href="../php/CambioIdioma.php?leng=br">BR</a></li>';
    echo '</ul>';
    echo "</div>";
    echo "</nav>";
		//echo '<div id="header"> <span class="cabecera"> GSTR </span>'.($Idioma[$nombre]).'</div>';

		//Prueba temporal para comprobar que funciona bien.
		//echo 'Sesion: '.$_SESSION["LE"];
	}
  function getIdioma(){
  //$Idioma = 0;
  if(!isset($_SESSION['LE'])) {$_SESSION['LE']="sp";}
  switch ($_SESSION["LE"])
  {
  case 'sp':
    require '../views/lenguaje/spanish.php';
    break;
  case 'en':
    require '../views/lenguaje/English.php';
    break;
  case 'br':
    require '../views/lenguaje/Brasilian.php';
    break;
  DEFAULT:
    require '../views/lenguaje/English.php';
    break;
  }
  return $Idioma;
  }
  ?>
