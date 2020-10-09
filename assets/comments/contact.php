<meta http-equiv="refresh" content="5;url=https://budapestil.co.il/about">
<meta name="robots" content="noindex">
<?php header("X-Robots-Tag: noindex", true); 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sub = $_POST['subject'];
    $to = "moti.l.salamon@gmail.com";
    $subject = "פניה לאתר";
    $message = "שם מלא: $name \n אימייל:$email \n טלפון:$phone \n תוכן הפנייה:$sub";
    $headers = "From:" . $email;
    mail($to,$subject,$message, $headers);
    $my_centered_word =  "הפניה נשלחה בהצלחה, אנו נשתדל נחזור אליכם בהקדם האפשרי.";
    print "<CENTER>$my_centered_word</CENTER>"; 
?>