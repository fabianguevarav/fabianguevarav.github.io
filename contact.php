
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "fabiruh@hotmail.com"; // Replace xxxx@xxxx.com with your email address (mandatory!)
    $subject = "Nueva Peticion de Contacto"; // Choose a custom subject (not mandatory)
    $body = "Has recibido un mensaje de " . $name . " (" . $email . "):\n\n" . $message;
    $from = "From: urantia.com.mx"; // Replace "Beetle Template" with your site name (not mandatory)
    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($name != '' && $email != '' && $message != '') {

            if (mail ($to, $subject, $body, $headers)) {
                echo '<script type="text/javascript">
                      alert("Su mensaje ha sido enviado, en breve nos pondremos en contacto con usted.")
                </script>';
            } else {
                echo '<p style="color:#F84B3C;">Something went wrong, go back and try again!</p>';
            }
        } else {
            echo '<p style="color:#F84B3C;">You need to fill in all required fields!</p>';
        }
    } else {
        echo '<p style="color:#F84B3C;">Invalid Email, please provide an correct email.</p>';
    }

  ?>
