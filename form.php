<?php




if (isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $asunto=$_POST['asunto'];
    $mensaje=$_POST['mensaje'];
    $header = "From: noreply@example.com" . "\r\n";
    $header.= "Reply-to: noreply@example.com" . "\r\n";
    $header.= "X-Mailer: PHP/" . phpversion();
    $mail = mail($email,$asunto,$mensaje,$header);
    if ($mail) {
        echo"<script>alert ('Enviado correctamente')</script>";
        echo"<script> setTimeout (\"location.href='index.html'\",1000)</script>";
    }

}

?>