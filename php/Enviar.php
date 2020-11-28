
<?php

// llamado a los campos
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Mensaje = $_POST['Mensaje'];



// Datos para el corre
$Destinatario = "wandryoscar@gmail.com";
$Asunto = "WWS Contacto desde nuestra web";


$Carta = "De: $Nombre \n";
$Carta .= "Correo: $Email \n";
$Carta .= "Telefono: $Telefono \n";
$Carta .= "Mensaje: $Mensaje";


//  Enviando Mensaje 

mail($Destinatario, $Asunto, $Carta);
echo "<script> setTimeout(\"location.href='/Template/enviar.html'\",1000) </script>";




?>