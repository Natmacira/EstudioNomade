<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
echo $_POST ['nombre'];
echo '<br>';
echo $_POST ['texto-consulta'];
echo '<br>';
echo $_POST ['mail'];
echo '<br>';
*/



$nombre = '';
$texto_consulta  = '';
$mail = '';

if ( ! empty( $_POST['nombre']) && is_string( $_POST['nombre']) ) {
    $nombre = $_POST['nombre'];
}

if ( ! empty( $_POST['texto-consulta']) && is_string( $_POST['texto-consulta']) ) {
    $texto_consulta = $_POST['texto-consulta'];
  
} 

if ( ! empty( $_POST['mail']) && filter_var( $_POST['mail'], FILTER_VALIDATE_EMAIL) ) {
    $mail = $_POST['mail'];
  
} 


 $mensaje = " 'Nombre: ' .  $nombre . '  Consulta:  ' . $texto_consulta . '   Mail:  ' . $mail . ";

if ( $nombre !== '' && $texto_consulta !== '' && $mail  !== ''  ) {
      mail('natmaciraestudionomade@gmail.com', 'Respuesta Form', $mensaje); 
      header('location: #respuestaForm.gracias ');
  } else {
      header('location: contacto.html');
  }

