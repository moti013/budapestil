<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/italian-restaurants" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>מסעדות איטלקיות בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="בודפשט, budapestil, גיימי אוליבר בודפשט , פומודורו, מסעדות איטלקיות בבודפשט, פיצות בבודפשט, פסטות בבודפשט, ואפיאנו בודפשט, קוצ'ינה בודפשט">
<meta name="description" content="המלצות של מקומיים על מסעדות איטלקיות הכי טובות בבודפשט. בין השאר ואפיאנו, קוצ'ינה, פומודורו, ג'יימי אוליבר -השף העירום ועוד, כנסו לקריאה..">
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
<h1>מסעדות איטלקיות בבודפשט: פיצות, פסטות ופוקאצ'ות</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#מסעדת וופיאנו" onclick="scrollTo(this)">מסעדת וופיאנו</a>
<a href="#מסעדת קוצ'ינה" onclick="scrollTo(this)">מסעדת קוצ'ינה</a>
<a href="#מסעדת טרטוריה" onclick="scrollTo(this)">מסעדת טרטוריה</a>
<a href="#ג'יימי אוליבר בודפשט" onclick="scrollTo(this)">ג'יימי אוליבר בודפשט</a>
<a href="#פיצה מי" onclick="scrollTo(this)">פיצה מי</a>
</div>
<?php $url="https://budapestil.co.il/italian-restaurants"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>
</div>

<div class="article" id="מסעדת וופיאנו">
<h2>מסעדת וופיאנו- vapiano</h2>
<div class="gallery"><img src="images/vapiano1.jpg" alt="מסעדת ואפיאנו בבודפשט" /><img src="images/vapiano2.jpg" alt="מסעדת ואפיאנו בבודפשט" /></div>
וואפיאנו הינה רשת מסעדות איטלקיות בקונספט יחודי, בכניסה למסעדה אתם מקבלים כרטיס, איתו ניתן לעבור בין העמדות השונות ולהזמין.

בעת הזמנת האוכל תתבקשו להצמיד את הכרטיס למחשב ולהזין לתוכו את ההזמנה שביצעתם

התפריט עשיר מאוד וכולל פסטות, פיצות וסלטים מכל הסוגים. ההכנה נעשית במקום מול הלקוחות.

בסיום הארוחה ניגשים עם הכרטיס לקופה ומשלמים על ההזמנה.

שימו לב: למרות הפרסומים על סגירת רשת ופיאנו ברחבי אירופה, הזכיין המפעיל את המסעדות בהונגריה ממשיך להפעיל בהצלחה את הרשת.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/eTxp8j7qXVq"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Bécsi u. 5, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-411-0864"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-411-0864</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-שישי: 11:00-23:00
שבת: 11:00-00:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i></div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://vapiano.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_vapiano"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מסעדת קוצ'ינה">
<h2>קוצ'ינה - Cucina</h2><div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/cocina1.jpg" alt="מסעדת קוצינה ברחוב ואצי בבודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/cocina2.jpg" alt="מסעדת קוצינה ברחוב ואצי בבודפשט" /></div>
<div class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/cocina3.jpg" alt="מסעדת קוצינה ברחוב ואצי בבודפשט" /></div>
מסעדת קוצ'ינה ממוקמת בלב ואצי אוצה, מסעדה איטלקית עם מאפיינים הונגריים, בין המנות בתפריט תמצאו מגוון סוגי פסטות, מרק בצל בלחם וכמובן גולש


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/spmqk2vuLHw"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Váci u. 22, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-266-4144"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-266-4144</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:00-23:45</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i></div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://lacucina.hu/en/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_cucina"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מסעדת טרטוריה">
<h2>מסעדת טרטוריה - Trattoria Pomo D'Oro</h2><span class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/pomodoro2.jpg" alt="מנת סלט במסעדת פומודורו" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/pomodoro1.jpg" alt="מנת בשר במסעדת פומודורו" /></span>

מסעדה איטלקית מושקעת ומעונבת עם פיצות, פסטות, סלטים ומנות בשר לא רגילות, או כמו שסיכמה אצלינו בקבוצה אחת החברות לאחר הארוחה: חווית אוכל ושירות שלא מהעולם הזה!

<div class="youtube" id="85wLXiVR0oo" style="width:100%;height:300px;"></div>


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/FKDCUqBp6gS2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Arany János u. 9, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-302-6473"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-302-6473</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>ראשון: 12:00-16:00 ; 18:00-00:00
שני-שישי: 12:00-00:00 ; 18:00-00:00
שבת: 12:00-16:00 ; 18:00-00:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i></div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://pomodorobudapest.com/en"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו אוטובוס 16<br />תחנת Széchenyi István tér</div>
</div>
<div class="accordion"><?php $tablename="comments_pomodoro"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="ג'יימי אוליבר בודפשט">
<h2>ג'יימי אוליבר בודפשט - Jamie's Italian</h2><div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/jamies1.jpg" alt="מסעדת ג'יימי אוליבר, בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/jamies2.jpg" alt="מסעדת ג'יימי אוליבר, בודפשט" /></div>
ג'יימי אוליבר הידוע כשף העירום, הקים בגבעת הטירה את אחת המסעדות המצליחות ביותר בבודפשט.

שימו לב, בסמטת גוז'דו קיימת מסעדה נוספת של ג'יימי אוליבר, אך מדובר בפיצריה פשוטה מאוד.


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/BqmebZqzyrWBzpt78"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Szentháromság u. 9-11, Budapest 1014</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-800-9212"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-800-9212</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:30-23:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i><i class="fa fa-euro"></i></div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.jamieoliver.com/italian/hungary/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו אוטובוס 16<br />תחנת Szentháromság tér</div>
</div>
<div class="accordion"><?php $tablename="comments_oliver"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="פיצה מי">
<h2>פיצה מי - pizza me</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/pizzame.jpg" alt="פיצה בודפשט" /></span>
נחשבת לאחת הפיצריות הטובות בבודפשט, מחזיקה סניפים רבים ברחבי העיר ומבצעת גם משלוחים לבתי המלון.

אנחנו ממליצים בחום על פיצת הפטריות ורוטב שמנת, כמו שאנחנו רגילים כבר לומר: תודו לנו אחר כך.


<h3>סניפי פיצה מי במרכז בודפשט</h3>

<h4>סניף רחוב האופנה - דאק פרנץ</h4><div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/1WEMKn9Zi3Q2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Deák Ferenc tér 3, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-613-3044"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-613-3044</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-רביעי: 11:00-1:00
חמישי: 11:00-5:00
שישי-שבת: 11:00-6:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>

<h4>סניף מרכז הרובע היהודי - רחוב דוב</h4><div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/xdQWUuMs5k92"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Dob u. 17, Budapest 1074</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-70-595-4293"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-70-595-4293</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:00-6:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>

<h4>סניף הבזיליקה</h4><div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/8V3sGv6f6Kn"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Budapest, Sas u. Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-781-7773"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-781-7773</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-רביעי: 11:00-00:00
חמישי: 11:00-4:00
שישי-שבת: 11:00-6:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br/></div>
</div>

<h4>סניף קיראי - ליד האירני</h4><div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/Gt6YrLJCnCm"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Wesselényi u. 14, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-791-6681"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-791-6681</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-שלישי: 11:00-5:00
רביעי-שבת: 11:00-6:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br/></div>
</div>


<h4>פרטים נוספים</h4><div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.pizzame.hu/"><div class="navigatetolong"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i><i class="fa fa-euro"></i></div>
</div>
<div class="accordion"><?php $tablename="comments_pizzame"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">את כל השאר אתם מכירים?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="israeli-res"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/humusbar.jpg" alt="שולחן במסעדה ישראלית בבודפשט עם מנות חומוס וחמוצים" /></span><p style="vertical-align:central;"><h4>מסעדות ישראליות בבודפשט</h4>חלקכם בטח חושבים שזאת הקטגוריה הכי מוזרה שיכולנו לבחור, מסעדות ישראליות בבודפשט. אז כמו שאנחנו רגילים להגיד, תודו לנו אחר כך</p></a></div>
<div class="minheight"><a href="michelin-in-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/stand.jpg" alt="בורקוניה, מסעדת מישלן בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות מישלן</h4>במהלך הטיול שלכם בבודפשט יש לכם הזדמנות לאכול במסעדת מישלן במחירים די קרובים למה שאתם משלמים בפלאפל השכונתי שלכם</p></a></div>
<div class="minheight"><a href="hungarian-traditional"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/korhaly3.jpg" alt="מסעדת קורהלי" /></span><p style="vertical-align:central;"><h4>מסעדות הונגריות מסורתיות</h4>מפות משובצות, המלצרים הם גם הבעלים, גולש כבד וקינוח גומבוץ, כל אלה הם הסימנים עבורכם שהגעתם למסעדה הונגרית אותנטית</p></a></div>
<div class="minheight"><a href="burger"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/burger.jpg" alt="המבורגר בבודפשט" /></span><p style="vertical-align:central;"><h4>ההמבורגריות הכי טובות</h4>על האפיפיור של ההמבורגרים שמעתם? מניח שלא. ככה מכנים את מייסד הרשת במבה בורגר ובצדק, אבל הם לא היחידים</p></a></div>
<div class="minheight"><a href="breakfast"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/maison1.jpg" alt="קפה לונדון בודפשט" /></span><p style="vertical-align:central;"><h4>קפה וארוחות בוקר</h4>ארוחות בוקר אירופאיות נוהגות לבאס אותנו הישראלים שרגילים לארוחות בוקר עשירות, מספר מצומצם של מסעדות יספקו בכל זאת את מבוקשכם</p></a></div>
<div class="minheight"><a href="sweet"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/sweet.jpg" alt="שוגר" /></span><p style="vertical-align:central;"><h4>הדף הכי מתוק</h4>אם הגעתם מוכנים לבודפשט, זה אומר שהורדתם כמה קילוגרמים בכדי להתיר את הרסן, אלה המקומות הכי נכונים לזה</p></a></div>
<div class="minheight"><a href="budapest-vegan"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/lasvegans.jpg" alt="מסעדה טבעונית בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות טבעוניות</h4>יגאל גיאת, צלם טבעוני וכותב בחסד, השאיר לנו מזכרת נפלאה מהביקור שלו כאן, סקירה מלאה של כל המסעדות הטבעוניות</p></a></div>
<div class="minheight"><a href="kosher-restaurants"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/carmel.jpg" alt="מסעדה כשרה בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות כשרות</h4>שתי מסעדות כשרות חדשות נפתחו בבודפשט בשנת 2019, אחת מהן כבר נסגרה, אחת חדשה בדרך להפתח ב-2020, מומלץ ממש לעקוב</p></a></div>
<div class="minheight"><a href="duffy-in-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/duffy.jpg" alt="דפי עופרי" /></span><p style="vertical-align:central;"><h4>בודפשט של דפי</h4>לא בטוח שהספקתם להכיר את דפי עופרי מקבוצת הפייסבוק שלנו, אם כן אתם בטח יודעים שהיא הגורו שלנו לענייני אוכל בעיר בודפשט</p></a></div>
<div class="minheight"><a href="res-top10"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/menza.jpg" alt="מסעדת מנזה" /></span><p style="white-space:pre-wrap"><h4>המומלצות שלנו</h4>עשרת המסעדות שאנחנו מאמינים שפשוט אסור לכם לפספס בבודפשט, אם זה בגלל האוכל ואם בכלל בגלל המבנה</p></a></div>
<div class="minheight"><a href="steakhouses"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/pampas.jpg" alt="מסעדת פמפאס בודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות בשרים</h4>בטח המליצו לכם על סטייקהאוס בבודפשט, אם תחפשו סטייקהאוס בגוגל תמצאו עשרות כאלה, ארבע מתוכן שוות באמת את השם שקיבלו</p></a></div>
<div class="minheight"><a href="italian-restaurants"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/spagetti.jpg" alt="מסעדה איטלקית בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות איטלקיות</h4>השף העירום - ג'יימי אוליבר פתח בבודפשט את אחת ממסעדות הדגל שלו, גם היא אצלינו ברשימה, אבל בינינו? יש טובות יותר</p></a></div>
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
<script async src="assets/js/youtube.js"></script>
</body>
</html>
<?php mysqli_close($con); ?>