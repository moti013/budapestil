<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/hotels" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main10.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>מלונות מומלצים בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="בודפשט, budapestil, בודפשט, budapest, מלונות בודפשט, בודפשט מלונות, מלונות מומלצים בבודפשט, אקווה וורלד, מריוט הוטל בודפשט">
<meta name="description" content="איזה מלונות מתאימים לחופשה שלכם בבודפשט? בכדי לענות על השאלה נדרשים הרבה פרמטרים. בואו ננסה לעשות לכם סדר">
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
<div class="facebook" style="z-index:5;left:75px;position:absolute;white-space:pre-wrap;font-size:20px;width:200px">הצטרפתם כבר לקבוצה <a target="_blank" href="https://www.facebook.com/groups/budapestil/">בודפשט איי אל</a> בפייסבוק?
מוזמנים לשאול שאלות ולשתף את החוויות האישיות שלכם בבודפשט
</div>
<div class="home-grid-container"><div class="main" style="background-color:transparent">
<div class="article" style="background-color:transparent"><h1>מלונות מומלצים בבודפשט לפי דירוג</h1><?php $url="https://budapestil.co.il/hotels"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>

איזה מלון מתאים לחופשה שלכם בבודפשט? זאת שאלה שבכדי לענות עליה נדרשים הרבה פרמטרים. באיזה הרכב אתם מגיעים? מה התקציב שלכם? מה סוג הטיול שאתם מתכננים? בטן גב או אולי לחרוש את העיר מבוקר עד ליל.

בואו ננסה לעשות לכם סדר.

<b>מיקום המלון</b>
בודפשט כפי שבטח אתם יודעים מחולקת לשני איזורים מרכזיים - בודה ופשט.
בין שני החלקים מפריד נהר הדנובה, הוא אמנם קל לחצייה על גבי הגשרים אבל עדיין נוצר פער שהוא בעיקרו תרבותי.
בודה היא האיזור השקט והמיושב יותר של בודפשט, גרות בה בעיקר משפחות, פשט מלאה בתיירים עד אפס מקום והשפה השולטת היא לא ההונגרית.

פשט עצמה מחולקת לרבעים כאשר האיזור הפופולרי ביותר הוא רובע 5 הצמוד לנהר הדנובה ובתוכו ואצי אוצה (אוצה = רחוב בהונגרית).
ברובע 5 נמצאים גם כל המלונות בדירוג חמישה כוכבים.

העדיפות השניה של התיירים היא הרובע היהודי הצמוד לרובע 5, זאת עקב חיי הלילה והקולינריה הפורחים ברובע בשנים האחרונות.
הרובע היהודי עצמו חולש על שטח לא גדול וההליכה מקצה לקצה שלו תיקח לכל היותר עשר דקות, כך שבתוך הרובע היהודי אין חשיבות יתרה למיקום.

בדף שלפניכם ריכזנו את המלונות המומלצים ביותר בבודפשט על ידי המטיילים שהיו איתנו בקבוצות לאורך הזמן, אין בדף שותפיות עסקיות או המלצות ממומנות, הוא נועד לעזרתכם בלבד.

החלוקה היא לפי מספר כוכבים אולם תוכלו לדעת את הרובע בו ממוקם כל מלון על פי המיקוד בכתובת המלון. שתי הספרות האמצעיות של המיקוד בעל ארבע הספרות, מסמנות את מספר הרובע.
לדוגמא המיקוד 1051 מסמל שהמלון נמצא ברובע 05 כך: <span style="border:1px solid">1|05|1</span>
</div>
</div>
<div onclick="this.nextElementSibling.style.display = 'inline-block';">
<cube style="background-image:url(images/eurostarsdanube.jpg)">
<div class="inside-cube">
<h3>מלונות 4 כוכבים בבודפשט</h3>
מלונות 4 כוכבים הם המלונות הנפוצים ביותר והמומלצים ביותר על ידינו, יש בהם חוויה טובה מספיק במחירים הגיוניים
</div>
</cube>
</div>
<div id="flip"><button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>

<h2 style="text-align:center">מלונות ארבעה כוכבים בבודפשט</h2><hr/>
<h2>יורוסטארס דנובה - Eurostars Danube</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/eurostarsdanube.jpg" alt="מלון 4 כוכבים בבודפשט" /></span>
יורוסטארס דנובה למרות שמו אינו נמצא על גדות הדנובה אלא במרכז הרובע היהודי, מטרים ספורים ממנו ממוקם חלפן הכספים הידוע בשם "האירני".

בקרבת המלון תמצאו את סמטת גוז'דו המפורסמת עם חיי לילה ערים עד לשעות הקטנות.

מעברו השני של הכביש נמצא בית חב"ד והגלגל הענק ובהמשך במרחק של חמש דקות הליכה - רחוב ואצי המפורסם.

המלון נחשב לכוכב עולה בתודעת הישראלים הנופשים בבודפשט, הביקורות עליו טובות מאוד והוא מהווה תמורה מעולה למחיר.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/drpdhGp59qC2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Asbóth u. 9, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-610-5200"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-610-5200</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.eurostarsdanubebudapest.com"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_eurostars"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>




<h2>מלון זניט - Zenit Budapest Palace</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/zenit.jpg" alt="מלון 4 כוכבים בבודפשט" /></span>
זניט הוטל ממוקם בין רחוב ואצי לנהר הדנובה, במיקום הטוב ביותר מבין מלונות הארבעה כוכבים בבודפשט.

מלון קטן עם אווירה חמה והמלצות חמות עוד יותר

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/mDZ6eudDf6R2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Apáczai Csere János u. 7, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-799-8400"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-799-8400</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://budapest.zenithoteles.com/es/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_zenit"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<h2>מלון ממוריז - Hotel Memories</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/memorieshotel.jpg" alt="מלון 4 כוכבים בבודפשט" /></span>
מלון ממוריז נמצא ברחוב וושלני ברובע היהודי בבודפשט, זהו הרחוב הראשי של הרובע ומכיר רבות מהמסעדות ובתי הקפה.

המלון מספק תמורה מלאה למחיר שתשלמו

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/5Z51gB5cFcE2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Wesselényi u. 4, Budapest 1077</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-597-6519"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-597-6519</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.hotel-memories-budapest.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_memories"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>




<h2>מלון פרסטיז' - Prestige Hotel</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/prestige.jpg" alt="מלון פרסטיז' בבודפשט" /></span>
מלון פרסטיז' ממוקם מול בזיליקת סנט אישטוון המפורסמת, לו זה היה תלוי בי הוא היה מקבל בקלות את הכוכב החמישי.
    
מדובר במלון מפואר ומושקע מאוד עם שירות יוצא דופן, רמת המחירים יקרה במקצת עבור מלונות בעלי ארבעה כוכבים אך בצדק.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/bzzcoXKopuF2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Vigyázó Ferenc u. 5, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-920-1000"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-920-1000</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.prestigehotelbudapest.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_prestige"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<h2>מלון מומנט - Hotel Moments</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/momenthotel.jpg" alt="מלון 4 כוכבים בבודפשט" /></span>
המלון נמצא על שדרות אנדראשי הגובלות ברובע היהודי, בהמשך הרחוב נמצא בית האופרה המפורסם של בודפשט, בכיוו השני במרחק של שלוש דקות הליכה נמצא הגלגל הענק המסמן את לב העיר

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/LfJEUZpxABN2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Andrássy út 8, Budapest 1061</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-611-7005"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-611-7005</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://hotelmomentsbudapest.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_moment"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>
</div>
<div onclick="this.nextElementSibling.style.display = 'inline-block';">
<cube style="background-image:url(images/kampinski.jpg)">
<div class="inside-cube">
<h3>מלונות 5 כוכבים בבודפשט</h3>
מלונות חמישה כוכבים הינם מלונות מפנקים יותר כמובן, לרוב הם מכילים בריכה ושירותים נוספים שיגרמו לכם לרצות לא לצאת מהמלון, מומלץ יותר לגיל השלישי
</div>
</cube>
</div>
<div id="flip"><button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>

<h2 style="text-align:center">מלונות חמישה כוכבים בבודפשט</h2><hr/>
<h2>מלון מריוט - Budapest Marriott Hotel</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/mariot.jpg" alt="מלון 5 כוכבים בבודפשט" /></span>
מריוט הוטל ממוקם בלב העיר בודפשט על גדות הדנובה.

במרחק של דקה הליכה מהמלון תמצאו את עצמכם במרכז הרחוב ואצי ליד סניף זארה בן חמשת הקומות, מרכז המסעדות ועוד.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/gZ5R8ZdPknR2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Apáczai Csere János u. 4, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-486-5000"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-486-5000</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.marriott.com/hotels/travel/budhu-budapest-marriott-hotel/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_mariot"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>




<h2>מלון קמפינסקי - Kempinski Hotel Corvinus</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/kampinski.jpg" alt="מלון 5 כוכבים בבודפשט" /></span>
מלון קמפינסקי יכול להוות את נקודת הציון למרכז העיר בודפשט.

מול הגלגל הענק הצופה על העיר בתחילת רחוב ואצי, מעברו השני של הכביש ניצב הרובע היהודי על כל חיי הלילה של בודפשט כמו גם בית הכנסת הגדול.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/TzR9yvMgQhA2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Erzsébet tér 7, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-429-3777"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-429-3777</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.kempinski.com/en/budapest/hotel-corvinus/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_kempinski"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>




<h2>מלון קרלטון - The Ritz-Carlton</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/karlton.jpg" alt="מלון 5 כוכבים בבודפשט" /></span>
מלון ריצ' קרלטון ממוקם כמו קודמו קמפינסקי במיקום הטוב ביותר בעיר, המלון יקר יותר ופחות תשמעו עליו בקרב הישראלים המבקרים בעיר, זאת רק עקב התדמית הפחות עממית שלו.

מומלץ בחום לבדוק את המחירים בקישור למטה, אם מצאתם אפשרות להזמין את המלון במסגרת התקציב שלכם אל תהססו.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/WwWV5JxgDtQ2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Erzsébet tér 9-10, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-429-5500"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-429-5500</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.ritzcarlton.com/en/hotels/europe/budapest"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_carlton"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<h2>מלון אינטר קונטיננטל - Inter Continental</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/continental.jpg" alt="מלון 5 כוכבים בבודפשט" /></span>
מלון קונטיננטל בבודפשט ממוקם ממש על גדות הדנובה, במרחק נגיעה מגשר השלשלאות המפורסם של בודפשט.
    
אחת הביקורות הכי נפוצות על מלון קונטיננטל היא על הנוף המדהים של נהר הדנובה הנשקף מן החדרים ובודה הנמצאת מעברו השני של הנהר.

במלון קיימת גם  בריכה וחדר כושר מעולים.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/r37kJ3ZwwHT2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Apáczai Csere János u. 10, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-327-6333"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-327-6333</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.budapest.intercontinental.com/en/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_intercont"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>




<h2>סופיטל גשר השלשלאות - Sofitel Chain Bridge</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/sofitel.jpg" alt="מלון 5 כוכבים בבודפשט" /></span>
מלון סופיטל הינו אחד מהמלונות המפוארים ביותר בבודפשט, אם החלטתם להשקיע בחופשה שלכם עד הסוף זה המקום.

כמו קודמיו לא מדובר במחירים הסטנדרטיים של מלונות בבודפשט אבל שווה לבדוק.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/6aYv2scotux"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Széchenyi István tér 2, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-266-1234"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-266-1234</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.accorhotels.com/gb/hotel-3229-sofitel-budapest-chain-bridge/index.shtml"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Vörösmarty tér</div>
</div>
<div class="accordion"><?php $tablename="comments_sofitel"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>


<button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>
</div>
<div onclick="this.nextElementSibling.style.display = 'inline-block';">
<cube style="background-image:url(images/d8.jpg)">
<div class="inside-cube">
<h3>מלונות 3 כוכבים בבודפשט</h3>
מלון 3 כוכבים מתאים יותר לאנשים צעירים הרוצים לחרוש את העיר, כאלה שיש להם פחות זמן לשבת במלון ופחות רצון לשלם מחירים יקרים
</div>
</cube>
</div>
<div id="flip"><button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>

<h2 style="text-align:center">מלונות שלושה כוכבים בבודפשט</h2><hr/>
<h2>מלון D8</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/d8.jpg" alt="מלון 3 כוכבים בבודפשט" /></span>
D8 הינו מלון יחודי, צעיר וצבעוני, רחוק שנות אור מהדימוי שיש לכם על מלונות 3 כוכבים.

המיקום שלו על גדות הדנובה יחד עם האווירה הנעימה של הצוות במקום, יספקו לכם חוויה שלא תיפול באיכותה מכל מלון אחר בעיר המתהדר בארבעה או חמישה כוכבים.

המלון מומלץ בחום - במיוחד עבור הצעירים שבכם הרוצים גם לשלם פחות וגם ליהנות.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/mhxzscydyy62"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Dorottya u. 8, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-614-0000"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-614-0000</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://d8hotel.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Vörösmarty tér</div>
</div>
<div class="accordion"><?php $tablename="comments_d8"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<h2>מלון K9 רזידנס - K9 Residence</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/k9.jpg" alt="מלון 3 כוכבים בבודפשט" /></span>
מלון הדירות K9 ממוקם אף הוא ברובע היהודי והוא כנראה המלון הכי פרקטי שתמצאו.

הדירות במלון יפות ונוחות, מתאימות מאוד למטיילים הרוצים "לחרוש" את העיר בודפשט, ללון במיקום מרכזי וטוב ועדיין לשלם פחות.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/Eirii2q8hCP2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Károly krt. 9, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-321-4166"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-321-4166</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.k9residence.com/home"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_k9"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>




<h2>מלון קאסאטי - Casati Budapest Hotel</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/casati.jpg" alt="מלון 3 כוכבים בבודפשט" /></span>
מלון הבוטיק קאסאטי הינו בן 3 כוכבים.

כן, אין כאן טעות, המלון מוכיח ששלושה כוכבים ובוטיק בהחלט יכולים ללכת יחד.

מיקום מעולה, מרחק פסיעות ספורות מבית האופרה של בודפשט, חדרים מעוצבים בפשטות ובטוב טעם, צוות מזמין וקשוב, אין פלא שהדירוג שלו בכל אתר שתבדקו נושק למקסימום

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/oP7jQwVPY5A2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Paulay Ede u. 31, Budapest 1061</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-343-1198"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-343-1198</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.casatibudapesthotel.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Opera</div>
</div>
<div class="accordion"><?php $tablename="comments_casati"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>


<button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>
</div>
<div onclick="this.nextElementSibling.style.display = 'inline-block';">
<cube style="background-image:url(images/7sess.jpg)">
<div class="inside-cube">
<h3>מלון דירות בבודפשט</h3>
מלונות דירות הם העסקה המושלמת למשפחה עם ילדים אבל לא רק, מלון דירות הוא הפשרה המושלמת בין שירות של מלון ונוחות של דירה</div>
</cube>
</div>
<div id="flip"><button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>

<h2 style="text-align:center">מלונות דירות בבודפשט</h2><hr/>
<h2>קרולי קורנר רזידנט - Karoly Corner Residences</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/karolicorner.jpg" alt="מלון דירות בבודפשט" /></span>
מלון דירות בוטיק צמוד לבית הכנסת הגדול, מעברו השני של הכביש נמצא בית חב"ד בבודפשט, מרחק הליכה של חמש דקות מרחוב ואצי.

מלון מדהים עם שירות ארוחות בוקר עד לדירה.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/QBTht2ws9v52"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Károly krt. 3/a, Budapest 1075</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-199-5555"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-199-5555</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.residencebudapest.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_karolicorner"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<h2>שבע עונות - 7seasons Apartments</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/7sess.jpg" alt="מלון 7 עונות בודפשט" />דירת חדר, 7 עונות</span>
מלון שבע עונות הוא כנראה המומלץ ביותר על ידי המטיילים הישראלים, גם הוא ממוקם במרכז הרובע היהודי.

מבחר דירות גדולות ומרווחות המתאימות למשפחות לחוויה מושלמת בבודפשט

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/H5U7BDFASkn"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Király u. 8, Budapest 1061</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-274-7777"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-274-7777</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.7seasonsapartments.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="accordion"><?php $tablename="comments_7seasons"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>


<button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>
</div>
<div onclick="this.nextElementSibling.style.display = 'inline-block';">
<cube style="background-image:url(images/caravan.jpg)">
<div class="inside-cube">
<h3>קראוונים להשכרה בבודפשט</h3>
האפשרות לצאת לטיול מבלי לדאוג מראש לתכנון מדוקדק ולהזמנות של מלונות במקומות היעד, מהווה יתרון גדול. במיוחד עבור הצעירים הישראלים.
</div>
</cube>
</div>
<div id="flip"><button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>

<h2 style="text-align:center">קראוונים להשכרה בבודפשט</h2><hr/>
האפשרות לצאת לטיול מבלי לדאוג מראש לתכנון מדוקדק ולהזמנות של מלונות במקומות היעד, מהווה יתרון גדול. במיוחד עבור הצעירים הישראלים.

בחניוני הקראוונים השונים ברחבי אירופה תמצאו לעומת זאת, מטיילים מכל קבוצות הגיל. מפנסיונרים אשר לקחו לעצמם שנה או שנתיים לטייל ברחבי היבשת ועד משפחות עם ילדים קטנים שהפכו את הקראוון לבית ואת הטיול לסגנון חיים.

בהונגריה ישנם כמה איזורים מומלצים לטיולי קראוונים, סביב אגם בלטון קיימים עשרות חניונים, באיזור טולנא – ארץ הכרמים והיין, גם תוכלו למצוא לא מעט חניונים כאלה, אפשרות נוספת הינה לחצות את הגבול לאחת משבעת המדינות הגובלות להונגריה.

להלן רשימת חברות מומלצות להשכרת קראוונים בבודפשט.

     
    

<h2>לבנטר - levanter</h2>חברה המתמחה בהשכרת ומכירת קראוונים ובתים ניידים.

ברשות החברה סוגים רבים של קראוונים, מקרוואנים זוגיים ועד משפחתיים ל-6 נפשות.

<b>רשימת הקראוונים הזמינים להשכרה</b>
<ul><li>ELNAGH T-LOFT 531
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/tloft1.jpg" alt="קראוון להשכרה בהונגריה בודפשט TLOFT" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/tloft2.jpg" alt="קראוון להשכרה בהונגריה בודפשט TLOFT" /></div>
</li>
<li>ELNAGH BARON 26 G
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/baron1.jpg" alt="קראוון להשכרה בהונגריה בודפשט baron" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/baron2.jpg" alt="קראוון להשכרה בהונגריה בודפשט baron" /></div>
</li>
<li>PÖSSL ROADCRUISER B
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/road1.jpg" alt="קראוון להשכרה בהונגריה בודפשט road" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/road2.jpg" alt="קראוון להשכרה בהונגריה בודפשט road" /></div>
</li>
<li>PÖSSL 2WIN PLUS
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/2win1.jpg" alt="קראוון להשכרה בהונגריה בודפשט 2win" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/2win2.jpg" alt="קראוון להשכרה בהונגריה בודפשט 2win" /></div>
</li>
<li>FIAT DOBLO
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/fiat1.jpg" alt="קראוון להשכרה בהונגריה בודפשט fiat" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/caravan/fiat2.jpg" alt="קראוון להשכרה בהונגריה בודפשט fiat" /></div>
</li></ul>

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/b8i6zFJSYtT7zXbR8"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Mogyoródi út 16-20. Budapest 1149</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-9988-290"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-9988-290</div></a>
</div>
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון: סגור
שני-שישי: 08:00-17:00
שבת: סגור</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br /><table class="newtable2">
<tr>
<th>משך ההשכרה</th>
<th>מחיר בעונה</th>
<th>מחיר לא בעונה</th>
</tr>
<tr>
<td>עד 7 ימים</td>
<td>בין 7 ל-14 יום</td>
<td>מעל 15 ימים</td>
</tr>
<tr>
<td>151 יורו ליום</td>
<td>141 יורו ליום</td>
<td>131 יורו ליום</td>
</tr>
<tr>
<td>115 יורו ליום</td>
<td>106 יורו ליום</td>
<td>98 יורו ליום</td>
</tr>
</table>
פקדון: 1200 יורו</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.levanter.hu/en/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M2<br />תחנת Puskás Ferenc Stadion</div>
</div>
<div class="accordion"><?php $tablename="comments_levanter"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<h2>מוטור הום - motor home republic</h2>חברה בינלאומית הפועלת במדינות רבות ברחבי העולם, תוך כדי הסכמים עם ספקים קטנים ומקומיים של הקראוונים.

ההזמנה מתבצעת דרך אתר האינטרנט.

בדרך כלל קיימים כל סוגי הקראוונים והגדלים, יש לבצע חיפוש על פי התאריכים הרצויים.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+64-9-950-2128"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+64-9-950-2128</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.motorhomerepublic.com/hungary/budapest-motorhome-rental"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
</div>
<div class="accordion"><?php $tablename="comments_motorhome"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>


<button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>
</div>
<div onclick="this.nextElementSibling.style.display = 'inline-block';">
<cube style="background-image:url(images/lionslockers.jpg)">
<div class="inside-cube">
<h3>שמירת חפצים בבודפשט</h3>
אמנם זה לא מלון אבל מנסיון רב שיש לנו מטיילים רבים נזקקים לשמירת חפצים לאחר היציאה מהמלון או לפני הכניסה, בדקו היטב את תנאי המלון שהמזנתם</div>
</cube>
</div>
<div id="flip"><button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>

<h2 style="text-align:center">שמירת חפצים בבודפשט</h2><hr/>
שמירת חפצים ולוקרים הם לא הדברים הראשונים שעוברים לנו בראש בעת תכנון החופשה, אבל אלו דברים שיש לקחת בחשבון.

פעמים רבות נקבעות טיסות הלואו קוסט לשעות לא מתאימות ולא מתואמות עם שעות הצ'ק אין והצ'ק אאוט של המלונות השונים.

ברוב המלונות שעת הכניסה לחדר היא באיזור השעה 15:00 ושעת היציאה היא באיזור השעה 10:00 בבוקר.

ברוב המלונות קיים גם שירות שמירת חפצים אך לא בכולם, הבעיה האמיתית היא אם החלטתם להזמין דירה בבודפשט.

כאשר אתם מפקידים את החפצים שלכם לשמירה, רצוי לדעת שהמקום הוא מקום מסודר וחוקי עם אחריות מלאה על החפצים שלכם ושירות טוב, אספנו עבורכם כמה בתי עסק כאלה במרכז העיר.



<h2>ליונס לוקרס - Lion's Locker</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/lionslockers.jpg" alt="שמירת חפצים בבודפשט" /></span>
בליונס לוקרס תוכלו לקבל שירותים רבים לרווחתכם, ביניהם שימוש במחשב והדפסת כרטיס הטיסה שלכם, טעינת הסלולרי, שקילת הכבודה שלכם לוודא שלא חרגה מהמשקל שהזמנתם ועוד.

במקום פועל גם בית קפה קטן עם ארוחות בוקר, ניתן לקבל הנחה של עשרה אחוזים בהזמנה מקוונת.

בית העסק ממוקם ברובע היהודי ברחוב מקביל לרחוב קיראלי (הרחוב של האירני).

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/pDzwVTrtKVM2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Vasvári Pál u. 11, Budapest 1061</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-951-3315"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-951-3315</div></a>
</div>
<div class="col2for">
<div class="navigateto"><i class="fa fa-clock"></i><br/>כל יום: 8:00-20:00</div>
<div class="navigateto" dir="ltr"><i class="fa fa-money"></i><br />יורו לשעה ועד 5 יורו ליום שלם</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.lockerbudapest.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Opera</div>
</div>
<div class="accordion"><?php $tablename="comments_lions"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>



<h2>אייצ' איי פייב - Hi5</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/hi5.jpg" alt="שמירת חפצים בבודפשט" /></span>
בית העסק ממוקם במרכז העיר צמוד לרחוב האופנה בתחילת ואצי אוצה.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/3w14aYAYqpj"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Fehér Hajó u. 8-10, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-70-947-7494"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-70-947-7494</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 8:00-20:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />3 יורו עבור 3 שעות (מינימום) ועד 5 יורו ל-12 שעות</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.luggagestoragebudapest.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו <br />תחנת </div>
</div>
<div class="accordion"><?php $tablename="comments_hi5"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>


<button class="button-close" onclick="this.parentElement.style.display = 'none';">סגור</button>
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
<script src="assets/js/main10.js"></script><script src="app.js"></script>
<script async src="assets/js/youtube.js"></script>
</body>
</html>
<?php mysqli_close($con); ?>