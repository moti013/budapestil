<meta name="robots" content="noindex">
<?php header("X-Robots-Tag: noindex", true); 
include '../dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$date = $_POST['date'];
$to =  $_POST['email'];
$budapestil="moti@budapestil.co.il";
$subject = "תכנית טיול לתאריך $date \r\n";
$headers = "From: " . $budapestil . "\r\n";
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
$message = '<html dir="rtl"><body style="text-align:right; direction:rtl;">';
$message .= "<h1>תכנית טיול לתאריך $date</h1> \r\n";
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border="1">';
$message.= "<tr><th>שם</th><th>כתובת</td><th>שעות פתיחה</th><th>הערות</th></tr>";
 foreach($_POST as $key => $value){
 $pieces = explode("+", $value);
 $name = $pieces[0];
 $address = $pieces[1];
 $hours = $pieces[2];
 $note = $pieces[3];
    if ($key != "email" && $key != "date" && $value != NULL && $value != "שלחו לי") $message.= "<tr><td>".$name."</td><td>".$address."</td><td>".$hours."</td><td>".$note."</td></tr>";
}
$message .= "</table>";
$message.= "\r\n";
$message .= "נשארתם עם שאלה? פנו אלינו לקבוצת <a href='https://www.facebook.com/groups/budapestil/'>הפייסבוק</a> שלנו";
$message .= '</body></html>';
echo "התוכנית נשלחה בהצלחה לכתובת המייל שלכם";
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
        mail($to,$subject,$message, $headers);
$to1 = "moti.l.salamon@gmail.com";
$headers1 = "From: " . $to . "\r\n";
$headers1 .= "MIME-Version: 1.0"."\r\n";
$headers1 .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
  mail($to1,$subject,$message, $headers1);

   	mysqli_close($con);
?>