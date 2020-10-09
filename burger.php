<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/burger" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>המבורגריות מומלצות בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="budapestil, בודפשט, budapest, זינג בורגר, במבה בורגר, מסעדות בבודפשט, המבורגר בבודפשט, בודפשט מסעדות">
<meta name="description" content="המבורגריות בבודפשט-באביב של שנת 2015 החליטה קבוצת חברים לפתוח המבורגריה בשדרות אנדראשי, יכול להיות שלא הייתם שומעים עליהם או על ההמבורגריה שלהם לעולם">
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
<h1>המבורגריות מומלצות בבודפשט: 4 בורגריות שאסור לכם לפספס</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#רשת במבה בורגר" onclick="scrollTo(this)">רשת במבה בורגר</a>
<a href="#רשת זינג בורגר" onclick="scrollTo(this)">רשת זינג בורגר</a>
<a href="#בודפשט ברביקיו" onclick="scrollTo(this)">בודפשט ברביקיו</a>
<a href="#המבורגר טבעוני לאס וגאנס" onclick="scrollTo(this)">המבורגר טבעוני לאס וגאנס</a>
</div>
<?php $url="https://budapestil.co.il/burger"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>

אוכל אמריקאי מהיר כמו המבורגרים נכנס לבודפשט רק בשנים האחרונות, הטעם ההונגרי שונה ולרשתות הבינלאומיות קשה מאוד לתקוע יתד בעיר.

רשתות נכנסות ויוצאות חדשות לבקרים אולי בדיוק כמו ישראל של שנות ה-90, בינתיים אבל צמחו להן כמה רשתות מקומיות המדברות לשוק המקומי ולחך ההונגרי, שווה לכם לנסות.

</div>

<div class="article" id="רשת במבה בורגר">
<h2>במבה בורגר - bamba marha</h2><span class="image left"><img src="images/bambamarha.png" alt="המבורגר בבודפשט" /></span>
באביב של שנת 2015 החליטה קבוצת חברים לפתוח המבורגריה בשדרות אנדראשי, יכול להיות שלא הייתם שומעים עליהם או על ההמבורגריה שלהם לעולם אילולא אחד מאותה קבוצה ששמו יאני יאנצשאה.
    
אותו יאני היה אחד מראשוני הבלוגרים שתחום המזון בהונגריה וכנראה גם המצליח שבהם, אבל לא רק זה, יאנו התמקד במזון אחד בלבד: ההמבורגר. עד כדי כך שברבות השנים זכה בהונגריה לכינוי: האפיפיור של ההמבורגרים. 

במבה מַרְהַא (בשר בקר בהונגרית) צברה לעצמה מהר מאוד שם ופרסום כך ששנה בלבד לאחר מכן נפתחו לה עוד שני סניפים, בבזיליקה וברחוב האופנה (ליד ואצי אוצה).

במבה בורגר מתמקדים בהכנת המבורגרים בלבד, וסביר להניח שזה יהיה אחד מההמבורגרים הטעימים שטעמתם בחייכם, אם לא הטעים ביותר.

<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/bamba.jpg" alt="במבה בורגר בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/bamba1.jpg" alt="במבה בורגר בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/bamba2.jpg" alt="במבה בורגר בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/bamba3.jpg" alt="במבה בורגר בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/bamba4.jpg" alt="במבה בורגר בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/bamba5.jpg" alt="במבה בורגר בודפשט" /></div>
 
    

<h4>סניף פרנציק טר</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/bMzsXNB3y6K2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Haris köz 2, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-952-2323"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-952-2323</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:30-23:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M3<br />תחנת Ferenciek tere</div>
</div>

<h4>סניף דאק פרנץ</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/3LFY6RT8A652"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Deák Ferenc tér 3, Budapest 1052</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-952-2323"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-952-2323</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:30-23:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br/></div>
</div>

<h4>סניף הבזיליקה</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/oFf7ft9Awzv"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Október 6. u. 6, Budapest 1051</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-952-2323"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-952-2323</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:30-23:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br/></div>
</div>

<h4>סניף אוקטגון (שד' אנדראשי)</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/hCAGiC8Vzu22"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Andrássy út 46, Budapest 1062</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-952-2323"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-952-2323</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:30-21:45</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Oktogon</div>
</div>

<h4>פרטים נוספים</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.bambamarha.hu/en/"><div class="navigatetolong"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i><i class="fa fa-euro"></i></div>
</div>
<div class="accordion"><?php $tablename="comments_bamba"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="רשת זינג בורגר">
<h2>זינג בורגר - zing burger</h2><div class="image fit"><img src="images/zing1.jpg" alt="המבורגר בבודפשט" /></div>
<div class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/zing2.jpg" alt="המבורגר בבודפשט" /></div>
זינג הינה רשת המבורגריות בעלת חמישה סניפים ברחבי בודפשט, שלושה מתוכם בפשט - מרכז העיר והשניים האחרים בבודה.

המוטו של הרשת הוא להכין הכל בעצמם, החל מהקמח המשך מלחמניות וכלה ברטבים, לא תמצאו שם שום מרכיב שהוכן מחוץ למסעדה, זאת אולי הסיבה למוניטין של סניפי זינג בבודפשט. 
    


<h4>סניף קירלי ליד ארז'בט</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/egkZZvNXgmC2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Király u. 60, Budapest 1068</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-424-9099"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-424-9099</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-רביעי: 11:00-23:00
חמישי-שבת: 11:00-1:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M1<br />תחנת Oktogon</div>
</div>

<h4>סניף קירלי בכניסה לגוז'דו</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/zUYGwTmoqpz"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Király u. 20, Budapest 1061</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-304-0463"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-304-0463</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-רביעי: 11:00-24:00
חמישי-שבת: 11:00-2:00</div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br/></div>
</div>

<h4>סניף קראוון</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/kEa63GuoQtUo87MQ7"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br /> Wesselényi u. 13, Budapest 1077</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-298-7080"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-298-7080</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-רביעי: 11:30-23:00
חמישי-שבת: 11:30-1:00
<span style="color:red">סגור עד מרץ 2020</span></div>
<div class="navigateto"><i class="fa fa-metro"></i><br />רגלית<br/></div>
</div>

<h4>פרטים נוספים</h4>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.zingburger.hu/"><div class="navigatetolong"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i><i class="fa fa-euro"></i></div>
</div>
<div class="accordion"><?php $tablename="comments_zing"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="בודפשט ברביקיו">
<h2>בודפשט ברביקיו - BPBarBBQ</h2><span style="color:indianred">שימו לב: הבעלות והקונספט השתנו מעט, ההמלצה בעינה אולם אנו מעוניינים לבדוק שוב</span>
    
כבר לא נעים לנו להגיד לכם שוב שזה ההמבורגר הכי טוב בבודפשט והכי טעים שאכלתם. אבל אין מה לעשות, הבחירה היא קשה.

מסעדה קטנה ברובע היהודי עם צוות יצירתי במיוחד, התפריט כולל מגוון סוגי בשר אבל המומחיות האמיתית שלהם הם המבורגרים שקשה לעמוד בפניהם.
<span class="image fit"><iframe style="width:100%;height:300px;" src="https://www.youtube.com/embed/vgDeAyiutGY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/TcooUfAhCG32"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Akácfa u. 24, Budapest 1072</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-1-612-9232"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-1-612-9232</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 11:00-00:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i><i class="fa fa-euro"></i></div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.bpbarbq.com/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M2<br />תחנת Blaha Lujza tér</div>
</div>
<div class="accordion"><?php $tablename="comments_bpbarbq"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="המבורגר טבעוני לאס וגאנס">
<h2>לאס וגאנס - Las Vegans</h2>
<span class="image fit"><img src="images/las-vegans.jpg" alt="לאס וגאנס המבורגר טבעוני בודפשט" /></span>
אז היום אלו Las Vegan's, רשת 100% טבעונית, עם היצע של 6 סוגי בורגרים, נאגטס, פוטטוס, שייקים ועוד מלא טוב שאליו לא הספקנו להגיע. משתף כאן את מה שכן. אציין גם את שם המנה בתיאור כל תמונה, להתמצאות.

<ul><li><b>בורגר Hot Cheezy</b>
<span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/vegan-garden-food.jpg" alt="מסעדה טבעונית בודפשט" /></span>
בורגר סייטן, רוטב גבינה, חסה אייסברג, עגבניה, פלפל חלפיניו, גזר מעושן בסגנון בייקון, גבינת צ'דר.

כיף של בורגר, בשרני וטוב. הגזר המעושן חמוד, אבל הוא לא "בייקוני" עצבני ברמה שלצורך הדוגמה "נועל'ה", זכר מסעדה ראשל"צית לטובה, נהגו להגיש. כן משדרג את החוויה, אבל אין מה לעוף יותר מדי על המושג "בייקון" כאן...
    
מחיר: <span dir="ltr">HUF1890=₪23.2</span></li>

<li><b>בורגר Sweet Dreems</b>
<span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/sweetdreamslasvegans.jpg" alt="מסעדה טבעונית בודפשט" /></span>
בורגר מסלייס עבה של גבינה מטוגנת עמוק, ריבת בצל, חסה, חסה לולו ביונדה (סוגריים, טריק קטן לחיים, בחינם ממני, שיסייע לכם לזכור: חסת "ביונדה" זו בעצם חסת "ביונסה", הזמרת. למה? זו חסה שמזכירה את "ביונסה" ביום שיער גרוע, מקורזלת כזאת, רוצה לרצוח את ג'יי זי, או XYZ, או איך שקוראים להוא שאחראי להטעין לה את הפן כדי שהשיער שלה יהיה ביונסה ולא ביונדה, סבבה? נו, אל תהיו קשוחים, תכל'ס, זו חסה טעימה...), עגבניה, פרוסת חציל בגריל.

אשכרה בורגר קרמי. זה כיף ומושחת, איך שהגבינה מתפרצת אליך, ברגע שאתה מחלל את הציפוי הפריך של הטיגון העמוק. אחל'ה!

מחיר: <span dir="ltr">HUF1790=₪21.95</span></li>

<li><b>בורגר Magic Mushroom</b>
<span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/magicmushroomlasvegans.jpg" alt="מסעדה טבעונית בודפשט" /></span>
בורגר פטריות, רוטב מיונז שום, בייבי תרד, עגבניות מיובשות, בצל בגריל, פטריות בגריל.

טעים מאוד! לא מכיר שום בורגר טבעוני בארץ שמגיע עם שכבה נדיבה של עלי תרד ועגבניות מיובשות. צ'מעו, זה משדרג ממש, בורגר פטריות מחוץ לקופסא! (ואגב, אתם עוקבים כאן על המחירים המפורטים, המגוחכים ברמות הגיוניות, כן?... אשכרה גורם לך לתהות, למה שפאקינג בורגר יעלה יותר מזה...)

מחיר: <span dir="ltr">HUF1990=₪24.4</span></li>

<li><b>נאגטס</b>
<span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/nugetslasvegans.jpg" alt="מסעדה טבעונית בודפשט" /></span>
מגיע בכמויות של 4, 8, 12, 20 יח'. לקחנו 8 יח', מגיע עם 2 רטבים לבחירה מתוך מגוון משגע בתפריט!

וואו! נאגטס מושלמים! בשרניים, מושחתים, אפשר בכיף להריץ ארוחה רק עליהם!

מחיר: <span dir="ltr">HUF1490=₪18.3</span></li>

<li><b>מקום לשדרוג</b>
בכל מנות הבורגרים: כן מודה שקצת התבאסנו על הלחמניות, בכל הבורגרים שהזמנו. לפעמים אנשים לא שמים לב לכמה שתלוי בזה. לחמניית בורגר אמורה להיות רכה, נימוחה, מעטפת מנחמת לכל הג'אנק שאגור בה. לחמניית בורגר היא לא עצירה ל"בריאות", פליז... אז לצערי הלחמניות של Las Vegan's לא להיט. הן עבות מדי, קצת מתפוררות עקב חימום יתר. בחלק מהמקרים מצאתי עצמי מעיף הצידה חצי עליון של לחמנייה, רק כדי לאזן את היחס בין הבצק ל"בפנוכו", שהוא באמת משובח. ושוב, אל תבינו לא נכון, הכל טעים ואכיל, אבל אפשר לשדרג משמעותית, אם הם רק יעברו ללחמניות בורגר רגילות, רכות ומושחתות, זה יתן כבוד גדול לבורגרים הבאמת מצוינים שלהם.</li></ul>

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/MiGzX8X5qaw"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Kazinczy utca 18. Budapest 1073</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-533-4278"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-533-4278</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון-רביעי: 11:30-23:00
חמישי-שבת: 11:30-1:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br/><i class="fa fa-euro"></i><i class="fa fa-euro"></i></div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://lasvegans.eu/en/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו מטרו M2<br />תחנת Astoria M</div>
</div>
<div class="accordion"><?php $tablename="comments_lasvegans"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">את כל השאר אתם מכירים?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="israeli-res"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/humusbar.jpg" alt="שולחן במסעדה ישראלית בבודפשט עם מנות חומוס וחמוצים" /></span><p style="vertical-align:central;"><h4>מסעדות ישראליות בבודפשט</h4>חלקכם בטח חושבים שזאת הקטגוריה הכי מוזרה שיכולנו לבחור, מסעדות ישראליות בבודפשט. אז כמו שאנחנו רגילים להגיד, תודו לנו אחר כך</p></a></div>
<div class="minheight"><a href="michelin-in-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/stand.jpg" alt="בורקוניה, מסעדת מישלן בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות מישלן</h4>במהלך הטיול שלכם בבודפשט יש לכם הזדמנות לאכול במסעדת מישלן במחירים די קרובים למה שאתם משלמים בפלאפל השכונתי שלכם</p></a></div>
<div class="minheight"><a href="breakfast"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/maison1.jpg" alt="קפה לונדון בודפשט" /></span><p style="vertical-align:central;"><h4>קפה וארוחות בוקר</h4>ארוחות בוקר אירופאיות נוהגות לבאס אותנו הישראלים שרגילים לארוחות בוקר עשירות, מספר מצומצם של מסעדות יספקו בכל זאת את מבוקשכם</p></a></div>
<div class="minheight"><a href="kosher-restaurants"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/carmel.jpg" alt="מסעדה כשרה בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות כשרות</h4>שתי מסעדות כשרות חדשות נפתחו בבודפשט בשנת 2019, אחת מהן כבר נסגרה, אחת חדשה בדרך להפתח ב-2020, מומלץ ממש לעקוב</p></a></div>
<div class="minheight"><a href="duffy-in-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/duffy.jpg" alt="דפי עופרי" /></span><p style="vertical-align:central;"><h4>בודפשט של דפי</h4>לא בטוח שהספקתם להכיר את דפי עופרי מקבוצת הפייסבוק שלנו, אם כן אתם בטח יודעים שהיא הגורו שלנו לענייני אוכל בעיר בודפשט</p></a></div>
<div class="minheight"><a href="res-top10"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/menza.jpg" alt="מסעדת מנזה" /></span><p style="white-space:pre-wrap"><h4>המומלצות שלנו</h4>עשרת המסעדות שאנחנו מאמינים שפשוט אסור לכם לפספס בבודפשט, אם זה בגלל האוכל ואם בכלל בגלל המבנה</p></a></div>
<div class="minheight"><a href="steakhouses"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/pampas.jpg" alt="מסעדת פמפאס בודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות בשרים</h4>בטח המליצו לכם על סטייקהאוס בבודפשט, אם תחפשו סטייקהאוס בגוגל תמצאו עשרות כאלה, ארבע מתוכן שוות באמת את השם שקיבלו</p></a></div>
<div class="minheight"><a href="italian-restaurants"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/spagetti.jpg" alt="מסעדה איטלקית בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות איטלקיות</h4>השף העירום - ג'יימי אוליבר פתח בבודפשט את אחת ממסעדות הדגל שלו, גם היא אצלינו ברשימה, אבל בינינו? יש טובות יותר</p></a></div>
<div class="minheight"><a href="hungarian-traditional"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/korhaly3.jpg" alt="מסעדת קורהלי" /></span><p style="vertical-align:central;"><h4>מסעדות הונגריות מסורתיות</h4>מפות משובצות, המלצרים הם גם הבעלים, גולש כבד וקינוח גומבוץ, כל אלה הם הסימנים עבורכם שהגעתם למסעדה הונגרית אותנטית</p></a></div>
<div class="minheight"><a href="sweet"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/sweet.jpg" alt="שוגר" /></span><p style="vertical-align:central;"><h4>הדף הכי מתוק</h4>אם הגעתם מוכנים לבודפשט, זה אומר שהורדתם כמה קילוגרמים בכדי להתיר את הרסן, אלה המקומות הכי נכונים לזה</p></a></div>
<div class="minheight"><a href="budapest-vegan"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/lasvegans.jpg" alt="מסעדה טבעונית בבודפשט" /></span><p style="vertical-align:central;"><h4>מסעדות טבעוניות</h4>יגאל גיאת, צלם טבעוני וכותב בחסד, השאיר לנו מזכרת נפלאה מהביקור שלו כאן, סקירה מלאה של כל המסעדות הטבעוניות</p></a></div>
<div class="minheight"><a href="burger"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/morefood/burger.jpg" alt="המבורגר בבודפשט" /></span><p style="vertical-align:central;"><h4>ההמבורגריות הכי טובות</h4>על האפיפיור של ההמבורגרים שמעתם? מניח שלא. ככה מכנים את מייסד הרשת במבה בורגר ובצדק, אבל הם לא היחידים</p></a></div>
</div>
</div>
<footer class="footer-distributed">
<div class="footer-right">
<a aria-label="join facebook group" rel="noopener noreferrer nofollow" target="_blank" href="https://www.facebook.com/groups/budapestil/"><i class="fa fa-facebook"></i></a>
<a aria-label="join whatsapp group" rel="noopener noreferrer nofollow" target="_blank" href="https://chat.whatsapp.com/E1ggCMGOVDRAcOIrNQiy0F"><i class="fa fa-whatsapp"></i></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:moti@budapestil.co.il"><i class="fa fa-envelope"></i></a>
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