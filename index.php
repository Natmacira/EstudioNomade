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
    echo $nombre . '<br>' ;
} else { 
    echo 'No hay nombre';
    echo '<br>';


};

if ( ! empty( $_POST['texto-consulta']) && is_string( $_POST['texto-consulta']) ) {
    $texto_consulta = $_POST['texto-consulta'];
    echo $texto_consulta . '<br>';
} else { 
    echo 'No hay texto';
    echo '<br>';
};

if ( ! empty( $_POST['mail']) && filter_var( $_POST['mail'], FILTER_VALIDATE_EMAIL) ) {
    $mail = $_POST['mail'];
    echo $mail . '<br>';
} else { 
    echo 'No hay e-mail';
    echo '<br>';
};


