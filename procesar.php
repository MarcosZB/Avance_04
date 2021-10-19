<?php
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $sexo = $_POST['sexo'];
    $doc_identidad = $_POST['doc_identidad'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $turno = $_POST['turno'];
    $destino = $_POST['destino'];
     
    echo "<h2>Informacion recibida desde PHP</h2>";
    echo "El nombre registrado es: " . $nombre . "<br/>";
    echo "El apellido paterno registrado es: " . $ap_paterno . "<br/>";
    echo "El apellido materno registrado es: " . $ap_materno . "<br/>";
    echo "El sexo registrado es: " . $sexo . "<br/>";
    echo "El documento de identidad registrado es: " . $doc_identidad . "<br/>";
    echo "La edad registrada es: " . $edad . "<br/>";
    echo "El correo electrónico registrado es: " . $correo . "<br/>";
    echo "El telefono registrado es: " . $telefono . "<br/>";
    echo "El turno registrado es: " . $turno . "<br/>";
    echo "El destino registrado es: " . $destino . "<br/>";
?>