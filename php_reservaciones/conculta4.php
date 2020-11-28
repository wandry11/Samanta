<?php

    // llamado a los campos
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Mail = $_POST['Mail'];
    $Cedula = $_POST['Cedula'];
    $Nlicencia = $_POST['Nlicencia'];
    $Telefono = $_POST['Telefono'];
    $Movil = $_POST['Movil'];
    $vehiculo = $_POST['vehiculo'];
    $fechar = $_POST['fechar'];
    $horar = $_POST['horar'];
    $fechae = $_POST['fechae'];
    $horae = $_POST['horae'];

    // Datos para el corre
    $Destinatario = "wandryoscar@gmail.com";
    $Asunto = "Contacto desde nuestra web";


    $Carta = "Nombre: $Nombre \n";
    $Carta .= "Apellido: $Apellido \n";
    $Carta .= "Correo: $Mail \n";
    $Carta .= "Cedula: $Cedula \n";
    $Carta .= "Licencia: $Nlicencia \n";
    $Carta .= "Telefono: $Telefono \n";
    $Carta .= "Telefono Movil: $Movil \n";
    $Carta .= "Vehiculo: $vehiculo \n";
    $Carta .= "Fecha de Recogida: $fechar \n";
    $Carta .= "Hora de Recogida: $horar \n";
    $Carta .= "Fecha de Entrega: $fechae \n";
    $Carta .= "hora de Entrega: $horae";


    //  Enviando Mensaje 

    mail($Destinatario, $Asunto, $Carta);
    echo "<script> setTimeout(\"location.href='/Template/Reservaciones.html'\",1000) </script>";

 ?>