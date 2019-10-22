<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form='firstlov03@gmail.com';

    $email_subject ="new form submission";

    $email_body ="User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                 "User Message: $message,\n";

    $to ="sujandangi61@gmail.com";
    
    $headers = "Form: $email_form\r\n";

    $headers = "Reply-To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: contactus.html");
    ?>             