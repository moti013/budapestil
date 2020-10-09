<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/museum" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>מוזיאונים בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="בודפשט, budapestil, המוזיאון לאמנות יפה, מוזיאון השואה בודפשט, מוזיאון יהדות הונגריה, מוצ'ארנוק, מוזיאון השוקולד בודפשט, מוזיאון סמלווייס, מוזיאון ההיסטוריה">
<meta name="description" content="סיור אמנות מרגש בבודפשט הכולל את מיטב המוזיאונים והיוצרים הגדולים בכל תחומי האמנות, התרבות, האוכל, ועוד. בין המוזיאונים המפורסמים">
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
<div class="article"><div class="Breadcrumbs"><a href="/">בית</a> > <a href="budapest-attraction">אטרקציות בבודפשט</a> > מוזיאונים בבודפשט</div>
<h1>מוזיאונים בבודפשט: המדריך לסיור אמנות בבודפשט</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#המוזיאון הלאומי של הונגריה" onclick="scrollTo(this)">המוזיאון הלאומי של הונגריה</a>
<a href="#הגלריה הלאומית של הונגריה" onclick="scrollTo(this)">הגלריה הלאומית של הונגריה</a>
<a href="#מוזיאון סמלווייס" onclick="scrollTo(this)">מוזיאון סמלווייס</a>
<a href="#המוזיאון לאמנות מוצ'ארנוק" onclick="scrollTo(this)">המוזיאון לאמנות מוצ'ארנוק</a>
<a href="#המוזיאון לאמנות יפה" onclick="scrollTo(this)">המוזיאון לאמנות יפה</a>
<a href="#מוזיאון ההיסטוריה של בודפשט" onclick="scrollTo(this)">מוזיאון ההיסטוריה של בודפשט</a>
<a href="#המוזיאון האתנוגרפי" onclick="scrollTo(this)">המוזיאון האתנוגרפי</a>
<a href="#מוזיאון השואה" onclick="scrollTo(this)">מוזיאון השואה</a>
<a href="#המוזיאון לאמנות שימושית" onclick="scrollTo(this)">המוזיאון לאמנות שימושית</a>
<a href="#מוזיאון יהדות הונגריה" onclick="scrollTo(this)">מוזיאון יהדות הונגריה</a>
<a href="#מוזיאון בית החולים בסלע" onclick="scrollTo(this)">מוזיאון בית החולים בסלע</a>
<a href="#מוזיאון השוקולד" onclick="scrollTo(this)">מוזיאון השוקולד</a>
<a href="#מוזיאון ושרלי" onclick="scrollTo(this)">מוזיאון ושרלי</a>
</div>
<?php $url="https://budapestil.co.il/museum"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>

אנו ממליצים לכם לצאת לסיור אמנות מרגש בבודפשט, הכולל את מיטב המוזיאונים והיוצרים הגדולים בכל תחומי האמנות, התרבות, האוכל, ועוד.
    
להלן רשימת המוזיאונים המפורסמים בעיר בודפשט.

</div>


<div class="article" id="המוזיאון הלאומי של הונגריה">
<h2>המוזיאון הלאומי של הונגריה - Magyar Nemzeti Múzeum</h2><span class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/nationalmuseum.jpg" alt="המוזיאון הלאומי של הונגריה" /></span>

המוזיאון הלאומי של הונגריה נוסד בשנת 1802, והוא כולל שש תערוכות עבור התקופות השונות בהונגריה.

<ul><li>תערוכה פרה-היסטורית המציגה את ההיסטוריה הכללית של הונגריה.</li><li>תערוכת טרנסילבניה הגדולה</li><li>תערוכה עבור תקופת הכיבוש הטורקי הארוך על הונגריה</li><li>תקופת שושלת ארפד מאישטוון הקדוש ועד אנדראש השלישי.</li><li>תקופת הקומוניזם</li><li>המאה העשרים</li></ul>

המוזיאון הלאומי של הונגריה מציג יצירות מכל תחומי האומנות והארכיאולוגיה.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/9tW53F81zfq"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Múzeum krt. 14-16, Budapest 1088</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-338-2122"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-338-2122</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>ראשון: 10:00-18:00
שני: סגור
שלישי-שבת: 10:00-18:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 7-26: 800 פורינט
גילאים 27-62: 1600 פורינט
מגיל 68: 800 פורינט
כרטיס משפחתי: 2 + 2: 3600 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://mnm.hu/en"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M3<br />תחנת Kálvin Square</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="המוזיאון הלאומי של הונגריה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_nationalmuseum"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
    
<div class="article" id="הגלריה הלאומית של הונגריה">
<h2>הגלריה הלאומית של הונגריה - Hungarian National Gallery</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/nationalgallery.jpg" alt="הגלריה הלאומית בבודפשט" /></span>
הגלריה הלאומית של בודפשט ממוקמת כמו מוזיאונים רבים אחרים במתחם הארמון בבודה.

הגלריה הלאומית מחזיקה באוסף הגדול ביותר בהונגריה לאמנות והיא מתעדת את תהליך עלייתה והתפתחותה של האמנות בהונגריה כולה.

בגלריה מוצגת כעת תערוכת אורח יחודית, מתוך אוסף היצירות של המוזיאון לאמנות יפה בכיכר הגיבורים.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/sNSHuVdwwRC2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Szent György tér 2. Budapest 1014</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-439-7325"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-439-7325</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>ראשון: 10:00-18:00
שני: סגור
שלישי-שבת: 10:00-18:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 7-26: 900 פורינט
גילאים 27-62: 1800 פורינט
מגיל 68 בהצגת תעודה: 900 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://en.mng.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו אוטובוס 16<br />תחנת Clark Ádám tér</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="הגלריה הלאומית של הונגריה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_nationalgallery"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון סמלווייס">
<h2>מוזיאון סמֶלְוַויְיס - Semmelweis Orvostörténeti Múzeum</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/semelwais.jpg" alt="מוזיאון הרפואה סמלווייס" /></span>
מוזיאון הרפואה  סמלווייס מהווה את הארכיב של האוניברסיטה הגדולה ביותר ללימודי רפואה בבודפשט.
    
האוניברסיטה אשר קיימת משנת 1635 וקרויה על שמו של הרופא ההונגרי איגנץ זמלווייס, מאחסנת במוזיאון את כל היסטוריית התפתחות הרפואה.

הביקור מומלץ במיוחד לרופאים וסטודנטים לרפואה אשר יכולים לראות במו עיניהם את שלבי התפתחות הרפואה כפי שהם נלמדים באוניברסיטאות השונות ברחבי העולם.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/vZLokM6XxcK2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Apród u. 1-3, Budapest 1013</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-375-3533"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-375-3533</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>ראשון: 10:00-18:00
שני: סגור
שלישי-שבת: 10:00-18:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 7-26: 500 פורינט
גילאים 27-62: 1000 פורינט
מגיל 68 בהצגת תעודה: 500 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://semmelweismuseum.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו אוטובוס 16<br />תחנת Clark Ádám tér</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון סמלווייס"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_semelmuseum"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="המוזיאון לאמנות מוצ'ארנוק">
<h2>המוזיאון לאמנות מוצ'ארנוק - Műcsarnok</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/mucarnok.jpg" alt="המוזיאון לאמנות מוצ'ארנוק" /></span>
בניין מוזיאון מוצ'ארנוק הוקם על פי תוכניותיהם של אלברט שיקנץ (1846-1915) ופיליפ הרצוג (1860-1925) בסגנון אקלקטי נאו קלאסי ונחנך בדצמבר 1895 כחלק מחגיגות האלף להקמת הונגריה בשנת 896.

למוזיאון מוצ'ארנוק יש את אולם התצוגה הגדול ביות בהונגריה אולם אין לו אוסף אמנות משל עצמו והוא משמש כגלריה מארחת לתערוכות שונות ובמיוחד לאמנות עכשווית.

<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/mucarnok1.jpg" alt="המוזיאון לאמנות מוצ'ארנוק" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/mucarnok2.jpg" alt="המוזיאון לאמנות מוצ'ארנוק" /></div>

מומלץ לעקוב אחר האוספים המוצגים בזמן הטיול שלכם בבודפשט, בין השאר הוצגו לאחרונה תערוכות של ציורי דאלי ופרידה קאלו.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/NUSdYLBTAozNcWkr6"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Dózsa György út 37, 1146 Budapest</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-460-7000"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-460-7000</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון: 10:00-18:00
שני: סגור
שלישי: 12:00-20:00
רביעי-שבת: 10:00-18:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-7: חינם
גילאים 7-26: 1450 פורינט
מבוגר: 2900 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.mucsarnok.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Hősök tere</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="המוזיאון לאמנות מוצ'ארנוק"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_mocarnok"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="המוזיאון לאמנות יפה">
<h2>המוזיאון לאמנות יפה - Museum of fine art</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fineart.jpg" alt="המוזיאון לאמנות יפה בודפשט" /></span>
המוזיאון לאמנות יפה נוסד בשנת 1870 והוא מכיל את אחד מן האוספים החשובים ביותר בהונגריה.

המוזיאון שוכן במבנה מרהיב אשר נבנה בעיקר בהשפעת האדריכלות הקלאסית. הוא מכיל בתוכו חדרים ארוכים עבור יצירות אמנות גדולות לצד ארונות להצגת חפצי אמנות קטנים ואינטימיים, אולמות המבוא לעומת זאת הינם בעלי חללים גדולים בהשפעת הרנסנס.

<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fineart11.jpg" alt="המוזיאון לאמנות יפה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fineart22.jpg" alt="המוזיאון לאמנות יפה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fineart33.jpg" alt="המוזיאון לאמנות יפה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fineart44.jpg" alt="המוזיאון לאמנות יפה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fineart55.jpg" alt="המוזיאון לאמנות יפה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fineart66.jpg" alt="המוזיאון לאמנות יפה" /></div>

אוסף היצירות שייך למגוון רחב של יוצרים, איטלקים, ספרדים והולנדים והוא נחלק לשש מחלקות: אמנות מצרים העתיקה, אמנות יוון העתיקה, גלריית פיסול מימי הביניים, אוסף אמנות קלאסית, אוסף אמנות מודרנית, אוסף אמנות גרפית.

ארמון האמנויות הנמצא בסמוך מציג בעיקר יצירות אמנות עכשווית, כמו גם תערוכות אורח רבות.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/9Eh8F1zPe8A2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Dózsa György út 41, Budapest 1146</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-469-7100"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-469-7100</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>10:00-18:00
שני: סגור
שלישי-שבת: 10:00-18:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-5: חינם
גילאים 6-24: 3200 פורינט
מבוגר: 6400 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.mfab.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Hősök tere</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="המוזיאון לאמנות יפה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_fineart"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון ההיסטוריה של בודפשט">
<h2>מוזיאון ההיסטוריה של בודפשט - History Museum</h2>התערוכות במוזיאון ההיסטורי בבודפשט מתמקדות בהיסטוריה הסוערת של 2000 שנות העיירות - בודה, פסט ואובודה. אלו הידועות כיום בשם העיר בודפשט

<div class="youtube" id="i5ff4FOSvSk" style="width:100%;height:300px;"></div>

<b>היסטוריה</b><br/>תקופות מתחלפות במוזיאון ההיסטוריה של בודפשט, החל בתקופת שלטון הממלכה ההבסבורגית, כאשר הונגריה נאנקה אז תחת האצולה האוסטרית. המשך בשנת 1873 - שנת ההכרזה ההיסטורית על איחודן של העיירות בודה ופשט ועד מלחמת העולם השניה

יש לציין כי רוב התערוכות אבדו במלחמת העולם השנייה, אך עדיין נותרו פריטים מעניינים רבים בתצוגה, מספיק בהחלט בכדי לחוש את היסטוריית העמים והתרבויות שחיו כאן.

<b>מוצגים</b><br />הפריטים המוצגים כוללים תמונות, רהיטים, כלים יומיומיים, בגדים, ספרים, גרפיקה ועוד, המשותף לכל הפריטים הינה השתקפות צורות החיים בבודה ופסט על כל התרבויות השונות.

<b>אירועים</b><br />במוזיאון נערכים פסטיבלים רבים כגון פסטיבלי אמנות, יין וכו', בזמנים בהם מתקיימים במוזיאון פסטיבלים תדרשו לקנות כרטיס מיוחד לפסטיבל, כאשר הכרטיס כולל את מחיר הכניסה למוזיאון ובמרבית המקרים במחיר דומה למחיר הכניסה.
מומלץ בחום להתעדכן באתר האינטרנט של המוזיאון.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/17EFNpNcUfD2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Szent György tér 2, Budapest 1014</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-487-8800"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-487-8800</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>ראשון: 10:00-18:00
שני: סגור
שלישי-שישי: 10:00-16:00
שבת: 10:00-18:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 7-26: 700 פורינט
גילאים 27-62: 1400 פורינט
מגיל 68: 700 פורינט
כרטיס משפחתי 2 + 2: 700 פורינט לאדם</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://budacastlebudapest.com/budapest-history-museum/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו אוטובוס 16<br />תחנת Clark Ádám tér</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון ההיסטוריה של בודפשט"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_historymuseum"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="המוזיאון האתנוגרפי">
<h2>המוזיאון האתנוגרפי - Museum of Ethnography</h2><strong style="color:red">המוזיאון סגור לרגל שיפוצים</strong>
היסטוריה של הבניין:
בניין מוזיאון האתנוגרפיה נבנה במקור על ידי אלאיוש האוסמן (1847-1926) (האדריכל האחראי גם על ניו יורק פאלאס – הבנין בו שוכן כיום קפה ניו יורק), עבור משרד המשפטים ההונגרי.
ככזה, מעוטר המבנה הענק בפסלים מסוגננים המשקפים את המעמד של ממשלת הונגריה באותה עת. 

המוזיאון ניצב מול בניין הפרלמנט בכיכר קושוט, חזיתו הגדולה מצופה אבן ומעליה מרכבה תלת-סוסית המסמלת את רוח ההשכלה.

מוצגים:
המוזיאון מציג כ-200,000 פריטים המלמדים על צורת החיים וההתיישבות של עמי האיזור במאות השנים האחרונות.
בנוסף למוצגי הקבע מתארחות במוזיאון תערוכות שונות מכל רחבי העולם.

<span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/ethnografimuzeum.jpg" alt="המוזיאון האתנוגרפי" /></span>


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/6ks2MsnCmFp"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Kossuth Lajos tér 12, Budapest 1055</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-473-2400"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-473-2400</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.neprajz.hu/en/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M2<br />תחנת Kossuth Lajos tér</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="המוזיאון האתנוגרפי"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_ethno"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון השואה">
<h2>מוזיאון השואה - Holocaust Memorial Center</h2><span class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/holocaustmemorial.jpg" alt="מוזיאון השואה בבודפשט" /></span>מוזיאון השואה הינו מוזיאון לאומי בבעלות ממשלת הונגריה ובאחריות הקהילה היהודית בבודפשט.
    
המוזיאון מציג תמונות רבות ומסמכים המתארים את הזוועות שהתרחשו בזמן מלחמת העולם השניה ביהודי הונגריה.

בין המוצגים תמצאו מסמכים רבים ובהם פרסומים של חוקים נגד יהודי הונגריה באותה העת, תמונות המתעדות את משלוחי הרכבות לאושוויץ ועוד.

שימו לב: התשלום במקום במזומן בלבד! לרכישה בכרטיס באשראי אנא הזמינו כרטיסים באתר


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/k4t7fwqGsju"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Páva u. 39, Budapest 1094</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-455-3333"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-455-3333</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>ראשון: 10:00-18:00
שני: סגור
שלישי-שבת: 10:00-18:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 7-26: 700 פורינט
גילאים 27-62: 1400 פורינט
מגיל 68: 700 פורינט
כרטיס משפחתי: 2 + 2: 700 פורינט לאדם</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.hdke.hu/en/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M3<br />תחנת Corvin-negyed</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון השואה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_holocostmus"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="המוזיאון לאמנות שימושית">
<h2>המוזיאון לאמנות שימושית - Museum of Applied Arts</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/apliedmuseum1.jpg" alt="המוזיאון לאומנות שימושית בודפשט" />בנין המוזיאון לאומנות שימושית בבודפשט</span>
<div class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/apliedmuseum.jpg" alt="המוזיאון לאומנות שימושית בודפשט" /></div>
המוזיאון מציג מגוון אוספים נדירים, ביניהם תערוכת קרמיקה וזכוכית, 4500 פריטי ריהוט וחלקי ריהוט מתקופות שונות, טקסטיל ותלבושות, אוסף מתכות ועוד.
    
בנין המוזיאון לאמנות שימושית שנבנה בין השנים 1893- 1896 הינו יצירת מופת בפני עצמו. והינו אחד מהבניינים הבולטים של ארט נובו.

ב-25 לאוקטובר של שנת 1896 נחנך הבנין של המוזיאון, במעמד נוכח הקיסר האוסטרי ומלך הונגריה פרנץ יוז'ף הראשון, מה שהפך אותו למוזיאון השלישי בעולם לאומנות שימושית לאחר המוזיאונים בלונדון ווינה

מטרתו הראשונית של המוזיאון הייתה ליצור אוסף אמנות שיסייע בפיתוח בתי מלאכה הונגרים ויעלה את רמת הטעם הציבורי, מסיבה זו הכיל המוזיאון באותה תקופה גם ספרייה ובית ספר למלאכה


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/D9w2dRGKXNu"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Üllői út 33-37, Budapest 1091</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-456-5107"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-456-5107</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>המוזיאון סגור לצורך תחזוקה
ראשון: 10:00-18:00
שני: סגור
שלישי-שבת: 10:00-18:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 7-26: 1000 פורינט
גילאים 27-62: 2000 פורינט
מגיל 68: 1000 פורינט
כרטיס משפחתי: 2  + 2: 4000 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.imm.hu/en/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M3<br />תחנת Corvin-negyed</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="המוזיאון לאמנות שימושית"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_apliedmuseum"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון יהדות הונגריה">
<h2>מוזיאון יהדות הונגריה - Hungarian Jewish Museum</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/jewishmuseum.jpg" alt="המוזיאון היהודי בבודפשט" /></span>
מוזיאון יהדות הונגריה נמצא בחצר בית הכנסת הגדול, במוזיאון קיימים אלפי פריטים מחיי היום יום של היהודים בהונגריה.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/Up64RjdbqTk"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Dohány u. 2, Budapest 1077</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-413-5500"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-413-5500</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>חורף: נובמבר-פברואר
ראשון-חמישי: 10:00-16:00
שישי: 10:00-14:00
שבת: סגור</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 6-12: 1200 פורינט
סטודנט:3000 פורינט
מבוגר:4000 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://enmilev.weebly.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br /></div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון יהדות הונגריה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_jewishmuseum"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון בית החולים בסלע">
<h2>מוזיאון בית החולים בסלע - Hospital in the Rock</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/hospital.jpg" alt="בית החולים בסלע בודפשט" /></span><span class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/hospital2.jpg" alt="בית החולים בסלע בודפשט" /></span>
מתחת לגבעת הטירה, נחצב מבוך של מערות ומעברים אשר שימשו למטרות שונות מאז התקופה הפרהיסטורית. 
במלחמת העולם השנייה, הפך המקום לשמש כבית חולים חירום וכמקלט מפני פשיטות אוויריות.

בזמן המלחמה הקרה, בית החולים היה המקום המאובטח ביותר מפני תקיפה גרעינית. 

בית החולים והבונקר מהווים כיום מוזיאון, בובות שעווה המוצגות במקום ממחישות את האירועים הקשים שהתרחשו.

הסיור לא מומלץ לילדים מתחת לגיל 8!

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/WFgYvCDqrkF2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Lovas út 4/c., 1012 Budapest</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-70-701-0101"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-70-701-0101</div></a>
</div>
<div class="col2for">
<div class="navigatetolonger"><i class="fa fa-clock"></i><br/>כל יום: 10:00-20:00</div>
<div class="navigatetolonger" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: הכניסה אסורה.
גילאים 6-19: 2000 פורינט
מבוגר: 4000 פורינט
כרטיס משפחתי (2 מבוגרים+2 ילדים): 8000 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.sziklakorhaz.eu/en"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו אוטובוס 16<br />תחנת Szentháromság tér</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="בית החולים בסלע"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_rockhospital"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון השוקולד">
<h2>מוזיאון השוקולד - csokolade muzeum</h2>מוזיאון השוקולד הקטן בכיכר - קושוט סמוך לבנין הפרלמנט, החל את דרכו בשנת 1986 בכלל במקום אחר.

מתיאש סאמוש הסב פתח את חנות השוקולד ברחוב פארישי (Párisi). החלום שלו היה ליצור מקום מפגש יחודי עבור אוהבי השוקולד, הוא גם הצליח.

ממתק הדגל של המוזיאון הינו גם הממתק הראשון שהכין מטיאש, מרציפן קוניאק טעים להפליא.

במוזיאון מתקיימים סיורים שונים וקורסי העשרת הידע על דרכי הכנת השוקולד והמרציפן, אם אתם חובבי שוקולד או סתם כמוני אוהבים מתוק, אל תפספסו את מוזיאון השוקולד.
    
<span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/csokolade-muzeum.jpg" alt="מוזיאון השוקולד בודפשט" /></span>

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/hajAxas74aC2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Kossuth Lajos tér 10, Budapest 1055</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-269-0216"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-269-0216</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 10:00-18:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />5900 פורינט לאדם</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.csokolademuzeum.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M2<br />תחנת Kossuth Lajos tér</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון השוקולד"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_chocomuseum"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון ושרלי">
<h2>מוזיאון ושרלי - Vasarely Museum</h2><div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/vasarely1.jpg" alt="מוזיאון וושורלי" /></div>
ויקטור וסרלי (בהונגרית ושרלי) היה אמן צרפתי יליד הונגריה, שהתמחה ביצירה של אשליות אופטיות וגיאומטריות, סגנון המכונה אופ-ארט.

המוזיאון מוקדש ליצירותיו. הוא מסודר באופן כרונולוגי החל מהעבודות המוקדמות שלו, כך שקל לראות את ההתפתחות המקצועית. אם ההתחלה פחות מעניינת (לטעמי היא אפילו מעט משעממת), הרי שדי מהר מגיעות עבודות יפות ובקומה השניה העבודות מרשימות במיוחד.

המוזיאון מתאים גם לילדים בעלי גישה, אפילו מינימלית, לאומנות.

<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/vasarely2.jpg" alt="מוזיאון וושורלי" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/vasarely3.jpg" alt="מוזיאון וושורלי" /></div>

קרדיט: ענת שיזף

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/rvUy2wTDSu3bZziE7"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Szentlélek tér 6, Budapest 1033</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-388-7551"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-388-7551</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון: 10:00-17:45
שני: סגור
שלישי-שבת: 10:00-17:45</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-26: 700 פורינט
מבוגר:1400 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://vasarely.hu/hun"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רכבת פרוורית H5<br />תחנת Szentlélek tér</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון וושורלי"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_vasarely"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">את כל השאר אתם מכירים?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="pest06"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/operettha.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>אטרקציות ברובע 6</h4>רובע 6 בבודפשט מכיל את כל שדרות אנדראשי, ממרכז העיר דרך אוקטגון, האופרה, המרכז לאמנויות הבמה ועד לכיכר הגיבורים</p></a></div>
<div class="minheight"><a href="pest07"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/synagoga.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>רובע 7 - הרובע היהודי</h4>הרובע היהודי מכיל כמובן את רוב ההיסטוריה היהודית של בודפשט אבל כיום מהווה גם את מרכז חיי הלילה.</p></a></div>
<div class="minheight"><a href="pest14"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/heroessquare.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>כיכר הגיבורים והפארק העירוני</h4>כיכר הגיבורים ממוקם בסוף שדרות אנדראשי ומהווה את שער הכניסה לפארק העירוני של בודפשט.</p></a></div>
<div class="minheight"><a href="buda"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/fish.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>אטרקציות בבודה</h4>מעברו השני של נהר הדנובה נמצאת בודה, שתי נקודות העניין המרכיות הן טירת בודה ומצודת הדייגים.</p></a></div>
<div class="minheight"><a href="cruises"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/cruises.jpg" alt="שיט על הדנובה" /></span><p style="vertical-align:central;"><h4>שיט על הדנובה</h4>קיימות כמה חברות שיט המציעות הפלגות עם הדרכה בשפה העברית, המומלצות ביותר הן לג'נדה וסילבר ליין.</p></a></div>
<div class="minheight"><a href="margit"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/margaret.jpg" alt="האי מרגרט" /></span><p style="vertical-align:central;"><h4>האי מרגרט</h4>האי מרגרט בלב הדנובה עם גישה דרך גשר מרגיט הוא אי ירוק עם פארק מים משלו ומזרקה מנגנת.</p></a></div>
<div class="minheight"><a href="suburbs-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/tropicarium.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>פרוורי בודפשט</h4>אטרקציות לא מעטות בבודפשט ממוקמות הרחק ממרכז העיר אבל בהחלט שווה להקדיש להן יום.</p></a></div>
<div class="minheight"><a href="families"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/aqua.jpg" alt="בודפשט עם ילדים" /></span><p style="vertical-align:central;"><h4>בודפשט עם ילדים</h4>לבודפשט יש שורה ארוכה של אטרקציות המתאימות לכל המשפחה, ריכזנו אותם עבורכם במקום אחד.</p></a></div>
<div class="minheight"><a href="winter"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/balnamallice.jpg" alt="החלקה על הקרח בבודפשט" /></span><p style="vertical-align:central;"><h4>החלקה על הקרח</h4>אטרקציה יחודית לחורף הינה החלקה על הקרח, בכל פינה נפתחים מגרשי החלקה, מדריך להחלקה על הקרח.</p></a></div>
<div class="minheight"><a href="bath"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/sechen.jpg" alt="מרחצאות בבודפשט" /></span><p style="vertical-align:central;"><h4>מרחצאות בבודפשט</h4>המרחצאות הרבים בבודפשט הם כמעט סימן ההיכר של העיר, ממרחצאות סצ'ני בכיכר הגיבורים ועד לגלרט, רודש וקירלי בבודה.</p></a></div>
<div class="minheight"><a href="szentendre"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/szentendre.jpg" alt="סנטאנדרה" /></span><p style="vertical-align:central;"><h4>עיירות ברך הדנובה</h4>שלוש עיירות היושבות על שפת הדנובה במקטע הנקרא ברך הדנובה או עיקול הדנובה, חוויה אותנטית וצבעונית.</p></a></div>
<div class="minheight"><a href="balaton"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/more/balaton.jpg" alt="אגם בלטון" /></span><p style="vertical-align:central;"><h4>אגם בלטון</h4>אגם בלטון ממוקם במרחק של כשעה נסיעה מבודפשט גודלו פי עשרה מים כינרת והוא הפך לאיזור תיירות המושך מליוני מבקרים בשנה.</p></a></div>
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