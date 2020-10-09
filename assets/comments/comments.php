<meta http-equiv="refresh" content="5;url=https://budapestil.co.il"><meta name="robots" content="noindex"‎>
<?php header("X-Robots-Tag: noindex", true);
  include '../dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$verible = $_POST['verible'];
$name = $_POST['name'];
$title = $_POST['title'];
$comment = $_POST['comment'];
$sql = "INSERT INTO $verible (name, title, comment, datetime)
VALUES ('$name', '$title','$comment',NOW())";
if (mysqli_query($con, $sql)) {
    echo " ";
} else {
    echo "שגיאה: " . $sql . "<br>" . mysqli_error($conn);
}
  ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $to = "moti.l.salamon@gmail.com";
    $subject = "התקבלה תגובה חדשה באתר";
    $message = "שם: $name \n כותרת: $title \n תגובה: $comment \n אטרקציה: $verible";
    $headers = "From: moti@budapestil.co.il";
    mail($to,$subject,$message, $headers);
$my_centered_word = "תגובתך התקבלה בהצלחה והיא תפורסם לאחר בדיקה במערכת."; 
   print "<div dir='rtl' style='text-align:center;font-size:40px;font-family:arial;color:#4160a4'>$my_centered_word</div>";
mysqli_close($con);
?>