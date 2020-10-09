<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/synagogue" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>בתי כנסת בבודפשט וזמני היום בהלכה - בודפשט איי אל</title>
<meta name="keywords" content="בודפשט, budapestil, budapest, בודפשט בית כנסת, בית כנסת הגדול בבודפשט, בית הכנסת קזינצי בודפשט, בתי כנסת בבודפשט, בית חבד בודפשט, הרב שמואל רסקין">
<meta name="description" content="מדריך בתי הכנסת של הקהילות היהודיות השונות בבודפשט, זמני התפילות בבתי הכנסת, זמני היום בהלכה וכל מה שיהודי שומר מצוות צריך לדעת לקראת הטיול בבודפשט">
<meta name="author" content="אתר בודפשט איי אל">
<script async src="assets/js/gtag.js"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-127419078-1');
</script>
</head>
<body>
<div class="topnav" id="myTopnav">
<a href="/" class="budapestillogo">בודפשט איי אל</a>
<a class="mobile"><img style="width:100%" src="images/444.png" /></a>
<a href="travel-guides">סיורים בבודפשט</a>
<a href="budapest-attraction">אטרקציות בבודפשט</a>
<div class="dropdown">
<button class="dropbtn">
תחבורה ציבורית 
<span class="arrow"></span>
</button>
<div class="dropdown-content"><span></span>
<a href="airport-transport">הגעה משדה התעופה בבודפשט</a>
<a href="metro">הרכבת התחתית של בודפשט</a>
<a href="transport-tickets">תחבורה ציבורית בבודפשט</a>
<a href="taxis">מוניות בבודפשט</a>
<a href="hop-on-hop-off">אוטובוס תיירים בבודפשט</a>
<a href="driving-in-budapest">השכרת רכב בבודפשט</a>
<a href="bicycle-rental">השכרת אופניים בבודפשט</a>
<a href="offline-navigate">מדריך ניווט ללא חיבור לאינטרנט</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">
מסעדות מומלצות
<span class="arrow"></span></button>
<div class="dropdown-content"><span></span>
<a href="res-top10">המסעדות המומלצות שלנו</a>
<a href="israeli-res">מסעדות ישראליות בבודפשט</a>
<a href="michelin-in-budapest">מסעדות מישלן בבודפשט</a>
<a href="steakhouses">מסעדות בשרים בבודפשט</a>
<a href="italian-restaurants">מסעדות איטלקיות בבודפשט</a>
<a href="hungarian-traditional">אוכל הונגרי מסורתי</a>
<a href="burger">המבורגריות בבודפשט</a>
<a href="breakfast">ארוחות בוקר בבודפשט</a>
<a href="sweet">הדף הכי מתוק בבודפשט</a>
<a href="budapest-vegan">מסעדות טבעוניות בבודפשט</a>
<a href="kosher-restaurants">מסעדות כשרות בבודפשט</a>
<a href="coffee-in-budapest">בתי קפה מיוחדים בבודפשט</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">
קניות בבודפשט
<span class="arrow"></span>
</button>
<div class="dropdown-content"><span></span>
<a href="shopping-malls">קניונים בבודפשט</a>
<a href="cosmetics">חנויות קוסמטיקה</a>
<a href="toys">חנויות צעצועים לילדים בבודפשט</a>
<a href="outlets">חנויות ומרכזי אאוטלט</a>
<a href="vintage">מדריך חנויות וינטג' בבודפשט</a>
<a href="comunication">כרטיס סים מקומי בבודפשט</a>
<a href="tax-re">החזר מס בבודפשט</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">
בודפשט למהדרין
<span class="arrow"></span>
</button>
<div class="dropdown-content"><span></span>
<a href="kosher-restaurants">מסעדות כשרות בבודפשט</a>
<a href="shabat-meal">סעודות שישי ושבת בבודפשט</a>
<a href="kosher-store">סופרים כשרים בבודפשט</a>
<a href="synagogue">בתי כנסת, מקוואות וזמני היום בבודפשט</a>
<a href="temeto">בתי עלמין יהודים בבודפשט</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">
מידע שימושי
<span class="arrow"></span>
</button>
<div class="dropdown-content"><span></span>
<a href="hotels">מלונות מומלצים בבודפשט</a>
<a href="aquaworld">מלון אקווה וורלד בודפשט</a>
<a href="change-ils-to-huf">המרה לכסף הונגרי</a>
<a href="flights">טיסות לבודפשט</a>
<a href="weather-in-budapest">מזג אוויר בבודפשט</a>
<a href="tax-re">החזר מס בבודפשט</a>
<a href="comunication">כרטיס סים מקומי בבודפשט</a>
<a href="about">רפואה ומצבי חירום</a>
</div>
</div>
<a href="search">חיפוש באתר <i class="fa fa-search"></i></a>
<a href="javascript:void(0);" class="icon" onclick="topnavresponse()"></a>
</div>
<div class="facebook" id="side"></div>
<div class="main">
<div class="article">
<h1>מדריך בתי הכנסת של בודפשט וזמני היום בהלכה</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#זמני היום בהלכה בבודפשט" onclick="scrollTo(this)">זמני היום בהלכה בבודפשט</a>
<a href="#בית חבד קרן אור" onclick="scrollTo(this)">בית חבד קרן אור</a>
<a href="#בית הכנסת קזינצי" onclick="scrollTo(this)">בית הכנסת קזינצי</a>
<a href="#בית הכנסת ברחוב דז'פי" onclick="scrollTo(this)">בית הכנסת ברחוב דז'פי</a>
<a href="#מקוואות בבודפשט" onclick="scrollTo(this)">מקוואות בבודפשט</a>
</div>
<?php $url="https://budapestil.co.il/synagogue"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>
</div>

<div class="article" id="זמני היום בהלכה בבודפשט"><h2>זמני היום בהלכה בבודפשט</h2><?php $result = mysqli_query($con,"SELECT * FROM zmanimnew WHERE dateloazi=CURDATE()");
$a=array("תאריך","תאריך עברי","יום","פרשת השבוע","עלות השחר","הנץ החמה","סוף זמן קריאת שמע","סוף זמן תפילה","חצות","מנחה גדולה","מנחה קטנה","הדלקת נרות","שקיעת החמה","צאת הכוכבים","צאת השבת","צאת השבת רבינו תם");
$i=-1;
echo ("<table class='newtable'>");
$first_row = false;
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
echo '<tr>';
foreach($row as $key => $field) {
$i++;
if ($field==NULL) continue;
echo '<tr>' . '<td>'. $a[$i] . '</td>' . '<td>' . htmlspecialchars($field) . '</td>' . '<tr>';
}
echo '</tr>'; 
}
echo("</table>");
?>
<b>עודכנו החישובים של זמני היום בהלכה לשנת 2020, להלן כמה דגשים חשובים</b><ul><li>הזמנים מחושבים לפי קווי אורך ורוחב 47.5077530, 19.0453795 ובגובה של 119.0.</li><li>השעה היא לפי שעון חורף בהונגריה gmt +1 שימו לב אם אין הפרש של שעה במעבר בין השעונים.</li><li>המיקום הוא באיזור הפרלמנט והגובה הוא סוג של "פשרה" בין בודה לפשט. (בודה בערך 200 מטר, פשט בחלקה 90 מטר (elevation))</li><li>סוף זמן קריאת שמע ותפילה לפי הגר"א (72).</li><li>צאת השבת וצאת הכוכבים לפי החזון איש (45).</li><li>אם התאריך המופיע לא נכון נסו לטעון מחדש את הדף כולו (במחשב ctrl+f5)</li></ul>
</div>

<div class="article" id="בית חבד קרן אור">
<h2>בית חבד קרן אור - Keren Or Chabad Synagogue</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/keren.jpg" alt="בית חבד בודפשט" /></span>
בית חב"ד בבודפשט בראשות הרב שמואל רסקין וזוגתו הרבנית דבורי רסקין, הינו אחד מבתי חב"ד הפעילים בעולם.

בשונה מערים אחרות בעולם, הצליחו הרב רסקין ואשתו ליצור קהילה חמה המאחדת את הישראלים והיהודים בהונגריה, חרדים, דתיים, ושאינם.

תחת חסותם מתקיימת גם פעילות ענפה למאות הסטודנטים הישראלים הלומדים בהונגריה.

אין פלא איפה שבית הכנסת הממוקם במקום הפך להיות בית הכנסת הפעיל ביותר בבודפשט, בקומה השניה של הבניין מתקיימות מדי שבת סעודות שבת המוניות בניצוחו של הרב.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/eTAebnSpvb12"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Károly Krt. 20, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-447-6335"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-447-6335</div></a>
</div>
<div class="navigatetolong"><i class="fa fa-clock"></i><br/><b>זמני התפילות:</b><table class="newtable2">
<tbody>
<tr>
<th>יום / תפילה</th>
<th>שחרית</th>
<th>מנחה</th>
<th>ערבית</th>
</tr>
<tr>
<td>ראשון</td>
<td>9:00</td>
<td>רבע שעה לפני השקיעה</td>
<td>לאחר תפילת מנחה</td>
</tr>
<tr>
<td>שני-חמישי</td>
<td>7:00</td>
<td>רבע שעה לפני השקיעה</td>
<td>לאחר תפילת מנחה</td>
</tr>
<tr>
<td>שישי</td>
<td>7:00</td>
<td>13:00</td>
<td>קבלת שבת: 18:00<br/>סעודת ליל שבת: 19:00</td>
</tr>
<tr>
<td>שבת</td>
<td>שחרית: 10:00<br/>קידוש וסעודת שבת: 12:30</td>
<td>מנחה וסעודה שלישית: 15 דקות לפני זמן הדלקת הנרות</td>
<td>בזמן צאת השבת</td>
</tr>
</tbody>
</table></div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.chabadhungary.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:Raskin770@Gmail.com"><div class="navigateto" dir="ltr"><i class="fa fa-envelope"></i><br />שלחו מייל לבית חב"ד</div></a>
<div class="accordion"><?php $tablename="comments_kerenor"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="בית הכנסת קזינצי">
<h2>בית הכנסת קזינצי - Kazinczy utcai főzsinagóga</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/kazincysynagog2.jpg" alt="בית הכנסת קזינצי בבודפשט" /></span>
בית הכנסת ברחוב קזינצי שייך לקהילה האורתודוכסית בבודפשט, התפילות הן בנוסח אשכנז.


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/wmjXd5UaHHo"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Kazinczy utca 29-31, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-351-0524"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-351-0524</div></a>
</div>
<div class="navigatetolong"><i class="fa fa-clock"></i><br/><b>זמני התפילות:</b><table class="newtable2">
<tbody>
<tr>
<th>יום / תפילה</th>
<th>שחרית</th>
<th>מנחה</th>
<th>ערבית</th>
</tr>
<tr>
<td>ראשון-חמישי</td>
<td>6:50</td>
<td>קיץ: 40 דקות לפני השקיעה<br/>חורף: שעה ועשרים לפני השקיעה</td>
<td>לאחר תפילת מנחה</td>
</tr>
<tr>
<td>שישי</td>
<td>6:50</td>
<td>מנחה וקבלת שבת: 10 דקות לאחר הדלקת נרות</td>
<td>מיד לאחר קבלת שבת</td>
</tr>
<tr>
<td>שבת</td>
<td>9:00</td>
<td>בזמן הדלקת נרות</td>
<td>בזמן צאת השבת</td>
</tr>
</tbody>
</table></div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.maoih.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:kazinczy@maoih.hu"><div class="navigateto" dir="ltr"><i class="fa fa-envelope"></i><br />שלחו מייל למזכירות בית הכנסת קזינצי</div></a>
<div class="accordion"><?php $tablename="comments_kazincy"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="בית הכנסת ברחוב דז'פי">
<h2>בית הכנסת ברחוב דז'פי - Dessewffy utcai zsinagóga</h2><span class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/dessefy.jpg" alt="בית הכנסת קזינצי בבודפשט" /></span>
בית הכנסת ברחוב דז'פי שייך גם הוא לקהילה האורתודוכסית, התפילות הן בנוסח אשכנז.

בית הכנסת הוקם בשנת 1870 במקום אורוות סוסים שהיה במקום, מה שהופך אותו לבית הכנסת העתיק ביותר בבודפשט (הפועל ברציפות).

בית הכנסת ממוקם ברובע 6, סמוך לבית האופרה המפורסם של בודפשט.


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.google.com/maps/place/Desewffy+Street+Synagogoue/@47.5050109,19.0573716,19z/data=!3m1!4b1!4m5!3m4!1s0x4741dc6cc37e9f17:0x51498a81ea86a447!8m2!3d47.5050109!4d19.0568244"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Dessewffy utca 23. Budapest 1066</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-351-0524"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-351-0524</div></a>
</div>
<div class="navigatetolong"><i class="fa fa-clock"></i><br/><b>זמני התפילות:</b><table class="newtable2">
<tbody>
<tr>
<th>יום / תפילה</th>
<th>שחרית</th>
<th>מנחה</th>
<th>ערבית</th>
</tr>
<tr>
<td>ראשון-חמישי</td>
<td>7:00</td>
<td>קיץ: 40 דקות לפני השקיעה<br/>חורף: שעה ועשרים לפני השקיעה</td>
<td>לאחר תפילת מנחה</td>
</tr>
<tr>
<td>שישי</td>
<td>7:00</td>
<td>מנחה וקבלת שבת: 10 דקות לאחר הדלקת נרות</td>
<td>מיד לאחר קבלת שבת</td>
</tr>
<tr>
<td>שבת</td>
<td>9:00</td>
<td>בזמן הדלקת נרות</td>
<td>בזמן צאת השבת</td>
</tr>
</tbody>
</table></div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.maoih.hu/?page_id=39&lang=hu"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M3<br />תחנת Arany János Street</div>
</div>
<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:kazinczy@maoih.hu"><div class="navigateto" dir="ltr"><i class="fa fa-envelope"></i><br />שלחו מייל למזכירות בית הכנסת דז'פי</div></a>
<div class="accordion"><?php $tablename="comments_dessefy"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מקוואות בבודפשט">
<h2>מקוואות בבודפשט</h2><table class="newtable"><tbody><tr>
<td style="border:0px !important">
<h3>מקווה נשים בבודפשט</h3><hr/>
המקווה ממוקם בקומת הקרקע של הבניין.

<b>אחראית:</b><br/>הרבנית בת-שבע אוברלנדר

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/k9ZFz1CEeDo"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br /> Kazinczy u 16, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-961-5419"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-961-5419</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>בתיאום מראש</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />חינם</div>
</div>

</td>
</tr>
<tr>
<td style="border:0px !important">
<h3>מקווה גברים בבודפשט</h3><hr />
המקווה ממוקם בקומה הראשונה של הבניין.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/k9ZFz1CEeDo"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Kazinczy u 16, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-961-5419"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-961-5419</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 5:00-8:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />חינם</div>
</div>

</td>
</tr>
<tr>
<td style="border:0px !important">
<h3>מקווה כלים בבודפשט</h3><hr />
המקווה ממוקם בקומת הקרקע, דלת שניה משמאל לכניסה הראשית.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/k9ZFz1CEeDo"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Kazinczy u 16, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-961-5419"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-961-5419</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>24 שעות ביממה, קיים קוד בכניסה, ניתן לבקש את הקוד טלפונית (או ללמוד גימטריה)</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />חינם</div>
</div>

</td>
</tr>
</tbody>
</table>
<div class="accordion"><?php $tablename="comments_mikve"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">את בודפשט למהדרין כבר קראתם?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="synagogue"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morekosher/synagoga.jpg" alt="בית כנסת בבודפשט" /></span><p style="vertical-align:central;"><h4>בתי כנסת וזמני היום</h4>כל בתי הכנסת האורתודוכסים וזמני התפילות בהם, זאת בנוסף לפרויקט זמני היום בהלכה בבודפשט</p></a></div>
<div class="minheight"><a href="kosher-store"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morekosher/kosherstore.jpg" alt="סופר כשר בבודפשט" /></span><p style="vertical-align:central;"><h4>סופרים כשרים</h4>ארבעה סופרים כשרים פעילים כיום בבודפשט, כך שתוכלו לקנות את כל מה שאתם צריכים מבחינת מזון ממש כמו בישראל</p></a></div>
<div class="minheight"><a href="transport-tickets"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/tickets.jpg" alt="תיקוף כרטיסים" /></span><p style="white-space:pre-wrap"><h4>קניה ותיקוף כרטיסים</h4>מדי יום מקבלים התיירים הישראלים דוחות על אי תיקוף כרטיסים בתחבורה הציבורית, קראו איך להמנע מכך</p></a></div>
<div class="minheight"><a href="shabat-meal"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morekosher/shabat.jpg" alt="סעודת שבת במסעדת כרמל" /></span><p style="vertical-align:central;"><h4>סעודות שבת</h4>סעודות שבת ברוב עם בבית חב"ד או סעודות שבת במסעדות הכשרות בבודפשט, רק תבחרו</p></a></div>
<div class="minheight"><a href="temeto"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morekosher/kozma.jpg" alt="בית עלמין יהודי בבודפשט" /></span><p style="vertical-align:central;"><h4>בתי עלמין יהודיים</h4>עם שאין לו עבר - אין לו עתיד, בבתי הקברות בבודפשט קבורים לא מעט יהודים בעלי חשיבות היסטורית</p></a></div>
<div class="minheight"><a href="kosher-restaurants"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/carmel.jpg" alt="מסעדה כשרה בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות כשרות</h4>שתי מסעדות כשרות חדשות נפתחו בבודפשט בשנת 2019, אחת מהן כבר נסגרה, אחת חדשה בדרך להפתח ב-2020, מומלץ ממש לעקוב</p></a></div>
</div>
</div>
<footer class="footer-distributed">
<div class="footer-right">
<a aria-label="join facebook group" rel="noopener noreferrer nofollow" target="_blank" href="https://www.facebook.com/groups/budapestil/"><i class="fa fa-facebook"></i></a>
<a aria-label="join whatsapp group" rel="noopener noreferrer nofollow" target="_blank" href="https://chat.whatsapp.com/E1ggCMGOVDRAcOIrNQiy0F"><i class="fa fa-whatsapp"></i></a>
<a aria-label="send us email" href="mailto:moti@budapestil.co.il"><i class="fa fa-envelope"></i></a>
<a aria-label="call us" dir="ltr" href="tel:+36205163185"><i class="fa fa-phone"></i></a>
</div>
<div class="footer-left">
<p class="footer-links">
<a href="/">בית</a>
·
<a href="about">אודות ומצבי חירום</a>
·
<a href="privacy">מדיניות פרטיות</a>
</p>
<p class="copy">כל הזכויות שמורות ל-<a href="https://softmot.com/">SoftMot - תוכנה בגובה העיניים</a></p>

</div>
</footer><script type='text/javascript'>
window.__lo_site_id = 209049;

	(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
	  })();
	</script>
<script src="assets/js/main11.js"></script><script src="app.js"></script>
</body>
</html>
<?php mysqli_close($con); ?>