<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/szentendre" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>עיירות ברך הדנובה: סנטאנדרה וישיגרד ואסטרגום - בודפשט איי אל</title>
<meta name="keywords" content="הונגריה, budapestil, budapest, ברך הדנובה, סנטאנדרה, וישגרד, אסטרגום, אטרקציות מחוץ לבודפשט, טיול מחוץ לבודפשט">
<meta name="description" content="ברך הדנובה או עיקול הדנובה (בהונגרית:  dunakanyar) הינו מקטע המתעקל כמו ברך, במעלה הנהר עיירות רבות בעלות נופים מדהימים ואינספור אטרקציות תיירותיות.">
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
<div class="article"><div class="Breadcrumbs"><a href="/">בית</a> > <a href="budapest-attraction">אטרקציות בבודפשט</a> > עיירות ברך הדנובה</div>
<h1>מדריך עיירות ברך הדנובה: סנטאנדרה, וישיגרד ואסטרגום</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#סנטאנדרה" onclick="scrollTo(this)">סנטאנדרה</a>
<a href="#מוזיאון המרציפן" onclick="scrollTo(this)">מוזיאון המרציפן</a>
<a href="#בית הכנסת בסנטאנדרה" onclick="scrollTo(this)">בית הכנסת בסנטאנדרה</a>
<a href="#חוף רחצה בדנובה" onclick="scrollTo(this)">חוף רחצה בדנובה</a>
<a href="#מוזיאון המיניאטורות" onclick="scrollTo(this)">מוזיאון המיניאטורות</a>
<a href="#וישגרד" onclick="scrollTo(this)">וישגרד</a>
<a href="#מצודת (טירת) וישגרד" onclick="scrollTo(this)">מצודת (טירת) וישגרד</a>
<a href="#פארק אתגרי בוישגרד (קארטינג)" onclick="scrollTo(this)">פארק אתגרי בוישגרד (קארטינג)</a>
<a href="#אסטרגום" onclick="scrollTo(this)">אסטרגום</a>
</div>
<?php $url="https://budapestil.co.il/szentendre"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>

"ברך הדנובה" או "עיקול הדנובה" (בהונגרית dunakanyar) הינו מקטע המתעקל כמו ברך, במעלה הנהר עיירות רבות בעלות נופים מדהימים ואינספור אטרקציות תיירותיות.

<span class="image fit"><img src="images/berech.jpg" alt="ברך הדנובה" />ברך הדנובה</span>

שלושת המפורסמות שבהן הן:
סנטאנדרה - Szentendre,
וישגרד - Visegrád,
אסטרגום - Esztergom.

המדריך הבא מקיף ככל האפשר את כל נקודות העניין בשלושת העיירות.

תהנו ואל תשכחו לשתף עבור הבאים אחריכם.

</div>


<div class="article" id="סנטאנדרה">
<h2>סנטאנדרה - Szentendre</h2><hr/>
רחובותיה הצרים של העיירה סנטאנדרה והסמטאות התלולות, מעניקות לה אווירה מיוחדת.
עקב יופיה משכה אליה העיירה ברבות השנים אמנים מכל הסוגים, ציירים, פסלים, מוזיקאים, כמו גם את אשתו של ג'ון לנון - יוקו אונו שגרה תקופה בעיירה הציורית.

<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendre9.jpg" alt="העיירה סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendre5.jpg" alt="העיירה סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendre6.jpg" alt="העיירה סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendre7.jpg" alt="העיירה סנטאנדרה" /></div>

ישנן כמה אפשרויות להגעה לכפר האמנים, הראשונה היא כמובן לשכור רכב.

אם שכרתם רכב מומלץ להתחיל את הסיור בעיירה מתחילת הטיילת הקטנה שעל שפת הדנובה, בקיץ ניתן לשכשך את הרגליים במים הקרירים ולהאכיל את הברווזים בנהר (פרטים על מכונת הגרגרים להאכל  הברווזים בהמשך).

<a target="_blank" rel="noopener noreferrer nofollow" href="https://goo.gl/maps/QBw28yoRmM9psuLm8">ניווט לנקודת ההתחלה</a>

<span class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendretayelet.jpg" alt="טיילת בעיירה סנטאנדרה" />מעגן השיט מסנטאנדרה לבודפשט</span>
אפשרות שניה היא באמצעות שיט של חברת מהרט מבודפשט לסנטאנדרה, השיט מקסים ועובר דרך נופים יפים, את כל הפרטים על השיט תמצאו בדף <a href="cruises">שיט על הדנובה</a> באתר.


האפשרות השלישית והנפוצה ביותר היא באמצעות תחבורה ציבורית.

מכיכר דאק פרנץ הסמוכה לגלגל הענק עולים על קו המטרו M2 עד לתחנת Batthyány ter.
משם לוקחים את הרכבת הפרוורית H5 לעיירה.

התשלום לרכבת יכול להתבצע על ידי כרטיס נסיעה רגיל אשר אתם קונים לשאר התחבורה בבודפשט, כאשר הרכבת הפרוורית מגיעה לפאתי העיר בודפשט יעלה מבקר ויגבה מכם את התשלום להגעה לעיירה (ללא קנס).

תחנת הרכבת נמצאת במרחק של כחמש דקות הליכה ממרכזה התיירותי של העיירה, תוכלו לזרום עם שטף המטיילים שירדו מהרכבת או ללחוץ לניווט אל נקודת התחלת מסלול הטיול בעיירה.

בעיירה שפע של מסעדות ובתי קפה, אנחנו ממליצים לכם לבחור באחד מבתי הקפה או המסעדות בקו הבתים האחרון של העיירה, ממש אל מול הדנובה.

לנגוש מפורסם וטעים בשלל טעמים וצבעים נמכר דרך חלון קטן שבסמוך אליו משתרך בדרך כלל תור ארוך של אנשים המצפים לטעום מן המאכל הלא בריא והכל כך מזוהה עם הונגריה (הרשו לעצמכם לפחות פעם אחת בטיול לטעום לנגוש, ורצוי שם).

הגלריות הזעירות הרבות הפזורות בעיירה, מחכות לכם ברחובה הראשי של העיירה או בסמטאות קטנות היוצאות ממנו, אל תהססו להכנס אל הבתים הפתוחים ולסייר בין המוצגים, חדי העין שביניכם יוכלו למצוא לא מעט חפצים וסמלים יהודיים חבויים בין המוצגים.

להלן נקודות העניין המרכזיות בסנטאנדרה.
</div>

<div class="article" id="מוזיאון המרציפן">
<h2>מוזיאון המרציפן - Szamos Marcipán Múzeum</h2>
מוזיאון המרציפן ממוקם מיד בכניסה למדרחוב הראשי של העיירה, המבנה עשוי מבוך של חדרים קטנים עמוסים ביצירות מרשימות ממרציפן, בקומה הראשונה ממוקמת חנות המפעל
    
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/marzipan1.jpg" alt="מוזיאון המרציפן סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/marzipan4.jpg" alt="מוזיאון המרציפן סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/marzipan6.jpg" alt="מוזיאון המרציפן סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/marzipan7.jpg" alt="מוזיאון המרציפן סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/marzipan8.jpg" alt="מוזיאון המרציפן סנטאנדרה" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/marzipan9.jpg" alt="מוזיאון המרציפן סנטאנדרה" /></div>
 

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/UxZPKVodWSL2"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Dumtsa Jenő u. 14, Szentendre 2000</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-2-6311-931"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-2-6311-931</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 9:00-19:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />500 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://szamos.hu"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רכבת פרוורית H5<br />תחנת Szentendre</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון המרציפן בסנטאנדרה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_marzipan"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="בית הכנסת בסנטאנדרה">
<h2>בית הכנסת בסנטאנדרה - Szántó Jewish Memorial House and Temple</h2><span class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendresynago.jpg" alt="בית הכנסת בעיירה סנטאנדרה" /></span>
בית הכנסת הקטן בעולם - כפי שנהוג לכנותו, נמצא בסוף הרחוב הראשי לאחר פיצול בצורת מזלג כאשר תבחרו בשביל השמאלי. בית הכנסת עצמו הינו חדר קטנטן עם חצר המספר את סיפורה של הקהילה היהודית הקטנה בעיירה סנטאנדה. על המקום שומרת אישה נוצריה מבוגרת, מבחינתה זהו זיכרון עבור השכנים שלה שאת כולם היא הכירה.

בבית הכנסת ניצב עדיין ארון הקודש ואוסף פריטים ותמונות מחיי הקהילה בעיירה.

בכניסה הגברים יתבקשו ללבוש כיפה.


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/D52R8W12FYw"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Alkotmány u. 3, Szentendre 2000</div></a>
<div class="navigateto"><i class="fa fa-clock"></i><br/>כל יום: 11:00-16:00</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="ית הכנסת בסנטאנדרה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_sasynagogue"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="חוף רחצה בדנובה">
<h2>חוף רחצה בדנובה - Teddy Beach Szentendre</h2><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendrebeach.jpg" alt="חוף בסנטאנדרה" />חוף רחצה בסנטאנדרה</span>
200 מטר ימינה (אם אתם עם הפנים לנהר) מרציפי ההפלגה תמצאו רצועת חוף קטנה.
המקומיים נוהגים להכנס למים בחודשי הקיץ החמים, או סתם לשבת על שפת הנהר ולשכשך רגליים, מתקן קטן עם אוכל לברווזים בנהר נמצא בסמוך למדרגות, ניתן לקנות גרגירי מזון על ידי הכנסת 100 פורינט ולהאכיל את הברווזים המצויים שם בשפע.


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/jNuMdUB6SwhHTywMA"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Postás Strand Hrsz 25/3, Szentendre 2000</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-20-318-7599"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-20-318-7599</div></a>
</div>
<div class="col2for">
<div class="navigateto"><i class="fa fa-clock"></i><br/>24/7</div>
<div class="navigateto"><i class="fa fa-money"></i><br />חינם/100 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/jNuMdUB6SwhHTywMA"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רכבת פרוורית H5<br />תחנת Szentendre</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="שםהאטרקציה"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_andra"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="מוזיאון המיניאטורות">
<h2>מוזיאון המיניאטורות - Micro Wonder Museum</h2>
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/miniatur.jpg" alt="מוזיאון המיניאטורות שחמט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/miniatur2.jpg" alt="מוזיאון המיניאטורות שחמט" /></div>
מוזיאון המיניאטורות בסנטאנדרה כולל 15 יצירות ייחודיות
אשר ניתן לצפות בכל אחת מהן דרך עמדת מיקרוסקופ המותקנת במקום.

<div class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/miniatur1.jpg" alt="מוזיאון המיניאטורות שחמט" /></div>
המיניאטורות עשויות לרוב מזהב אך גם מחומרים נוספים, כמו ניקל, תרכובות מיוחדות ודגני אורז.

משך הזמן הממוצע לעבודה על כל מוצג מיניאטורי הוא כחצי שנה, עבור כל יצירה נדרש לפתח באופן אינדיבידואלי כלים מיוחדים המותאמים לגודל היצירה ולחומרים ממנה היא עתידה להיעשות, תהליך היצירה הינו באמצעות מיקרוסקופים מיוחדים וטכניקות להאטת הנשימה וקצב הלב אשר פותחו על ידי האמן.

לטענתו; התמדה, כוח רצון וחריצות הם המרכיבים להצלחת היצירות.

כל עבודה נושאת בחובה מסר וסיפורי רקע הקשורים אליה.
היצירה הנושאת את הכותרת "שלום" לדוגמא, נוצרה בזמן המלחמה הקרה כביטוי לשאיפתו לסיום המתיחות בין המעצמות.
היצירה "הספרים הקטנים בעולם", אשר גודלה הוא בערך 0.6 מ"מ, נוצרה בעקבות ספר משיריו של טאראס שבצ'נקו הצייר האוקראיני.


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://g.page/mikrocsodak?share"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Alkotmány u. 2, Szentendre 2000</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-70-935-5155"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-70-935-5155</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>ראשון: 16:00–11:00
שני: 14:00–10:00
שלישי-חמישי: 16:00–10:00
שישי-שבת: 18:00–10:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-26: 750 פורינט
גילאי 26 ומעלה: 900 פורינט</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://www.microart.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />רכבת פרוורית H5<br />תחנת Szentendre</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="מוזיאון המיניאטורות"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_miniature"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="וישגרד">
<h2>וישגרד - Visegrád</h2><hr/><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/visegrad1.jpg" alt="וישגרד" /></span>
וישגרד היא האחת הערים הקטנות ביותר והמתוירות ביותר בהונגריה.
הדבר לא מפתיע עבור מי שמכיר את ההיסטוריה של העיר שעד לשנת 1405 היתה בירתה הרשמית של הונגריה.

מוקדי העניין של העיר הינם שני מונומנטים היסטוריים חשובים, הטירה והארמון..
בעצם העיר קרויה על שמה של המצודה ולא להיפך, משמעותו של השם וישגרד בשפה הסלאבית הינו הטירה העליונה.

המצודה הוקמה על ידי בלה הרביעי - מלך הונגריה בעקבות הפלישה המונגולית בשנת 1240, לאחר מכן שופצה מספר רב של פעמים במהלך ההיסטוריה, שיפוצים נרחבים אלו שינו כליל את מראה, אולם את הנוף הנשקף ממנה לא יכלו לשנות.
</div>

<div class="article" id="מצודת (טירת) וישגרד">
<h2>מצודת (טירת) וישגרד - Visegrádi vár</h2>
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/visigradcas8.jpg" alt="טירת וישגרד" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/visigradcas2.jpg" alt="טירת וישגרד" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/visigradcas4.jpg" alt="טירת וישגרד" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/visigradcas5.jpg" alt="טירת וישגרד" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/visigradcas7.jpg" alt="טירת וישגרד" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/visegradcas1.jpg" alt="טירת וישגרד" /></div>

מצודת וישגרד בנויה על חורבות מחנה רומאי עתיק ששרד שם עד לפלישת הטטארים לשטח המכונה כיום הונגריה.

הטירה נבנתה בסביבות שנת 1250 על ידי המלך בלה הרביעי, מיקומה האסטרטגי על ההר מעיד על שימושה כמבצר המשקיף על כל האיזור.
הקירות כוללים ביצורים רבים נגד אויבים אשר עתידים היו לתקוף, שני מגדלים וארמון מגורים.

עם הפלישה הטורקית להונגריה נהרסה הטירה כמעט כליל והיא נותרה כך עד לשנות ה-70 של המאה ה-19, אז שוחזרה ונבנתה מחדש.

כיום המבקרים בטירה נהנים בראש ובראשונה מהנוף הפנורמי המרהיב הנשקף ממנה, בנוסף לזה מתקיימת תערוכה היסטורית של הטירה, תערוכה של הכתר הקדוש וחפצים נלווים לו, תערוכת מוצגי ציד, דיג וחקלאות אשר שימשו את בני המלוכה שהתגוררו בטירה לאורך השנים וכמובן את הטירה המבוצרת המשוחזרת.

<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/KvHa8c9PEDhS6SFi7"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Visegrád, Várhegy, 2025</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-26-398-101"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-26-398-101</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 9:00-18:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br />גילאים 0-6: חינם
גילאים 6-26: 850 פורינט
גילאים 26-70: 1700 פורינט
גילאי 70 ומעלה: חינם</div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://parkerdo.hu/turizmus/latnivalok/visegradi-fellegvar/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />אין<br /></div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="טירת וישגרד"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_visegradcas"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="פארק אתגרי בוישגרד (קארטינג)">
<h2>פארק אתגרי בוישגרד (קארטינג) - Gokart és Kalandpark</h2>
הפארק כולל קארטינג ופארק חבלים אתגרי.

<div class="youtube" id="vLTj5g5cOi4" style="width:100%;height:300px;"></div>


<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/Ld8pUrD3s1eHvrcn9"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Lepencevölgy 11, Visegrád 2025</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-509-8091"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-509-8091</div></a>
</div>
<div class="col2for">
<div class="navigatetolong"><i class="fa fa-clock"></i><br/>כל יום: 9:00-21:00</div>
<div class="navigatetolong" dir="ltr"><i class="fa fa-money"></i><br /></div>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="http://visegradgokart.hu/"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
<div class="navigateto"><i class="fa fa-metro"></i><br />קו אוטובוס 880<br />תחנת Visegrád, Lepencefürdő</div>
</div>
<div class="navigatetonohover"><input aria-label="סמנו אהבתי לשליחה" class="cb" type="checkbox" value="פארק אתגרי בוישגרד (קארטינג)"><br />אהבתם? סמנו כאן &#10004; בסוף העמוד תופיע הרשימה לשליחה במייל</div>
<div class="accordion"><?php $tablename="comments_karting"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="אסטרגום">
<h2>אסטרגום - Esztergom</h2><hr/><span class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/esztergom.jpg" alt="אסטרגום" /></span>
אסטרגום שוכנת לגבולה של סלובקיה ונחשבת לאחת הערים העתיקות בהונגריה, אשר עד למאה ה-13 היוותה גם את בירתה של הונגריה.
    
העיירה אסטרגום יפה מאוד ומלאת היסטוריה, האטרקציה המרכזית בה היא היא הטירה של המלך בלה השלישי שנבנתה בסוף המאה ה-12.

בנוסף לטירה מומלץ לבקר בבזיליקה של אסטרגום הנחשבת לכנסייה הגדולה ביותר בהונגריה.   


<div class="accordion"><?php $tablename="comments_estergum"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">את כל השאר אתם מכירים?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="pest05"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/vaci/1.jpg" alt="אטרקציות בבודפשט" /></span><p style="white-space:pre-wrap"><h4>אטרקציות ברובע 5</h4>בודפשט הקלאסית, משפת הדנובה ועד לרובע היהודי לרוחב ומהפרלמנט דרך הבזיליקה, ואצי אוצה, ועד לשוק המקורה.</p></a></div>
<div class="minheight"><a href="pest06"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/operettha.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>אטרקציות ברובע 6</h4>רובע 6 בבודפשט מכיל את כל שדרות אנדראשי, ממרכז העיר דרך אוקטגון, האופרה, המרכז לאמנויות הבמה ועד לכיכר הגיבורים</p></a></div>
<div class="minheight"><a href="pest07"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/synagoga.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>רובע 7 - הרובע היהודי</h4>הרובע היהודי מכיל כמובן את רוב ההיסטוריה היהודית של בודפשט אבל כיום מהווה גם את מרכז חיי הלילה.</p></a></div>
<div class="minheight"><a href="pest14"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/heroessquare.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>כיכר הגיבורים והפארק העירוני</h4>כיכר הגיבורים ממוקם בסוף שדרות אנדראשי ומהווה את שער הכניסה לפארק העירוני של בודפשט.</p></a></div>
<div class="minheight"><a href="buda"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fish.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>אטרקציות בבודה</h4>מעברו השני של נהר הדנובה נמצאת בודה, שתי נקודות העניין המרכיות הן טירת בודה ומצודת הדייגים.</p></a></div>
<div class="minheight"><a href="cruises"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/cruises.jpg" alt="שיט על הדנובה" /></span><p style="vertical-align:central;"><h4>שיט על הדנובה</h4>קיימות כמה חברות שיט המציעות הפלגות עם הדרכה בשפה העברית, המומלצות ביותר הן לג'נדה וסילבר ליין.</p></a></div>
<div class="minheight"><a href="margit"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/margaret.jpg" alt="האי מרגרט" /></span><p style="vertical-align:central;"><h4>האי מרגרט</h4>האי מרגרט בלב הדנובה עם גישה דרך גשר מרגיט הוא אי ירוק עם פארק מים משלו ומזרקה מנגנת.</p></a></div>
<div class="minheight"><a href="suburbs-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tropicarium.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>פרוורי בודפשט</h4>אטרקציות לא מעטות בבודפשט ממוקמות הרחק ממרכז העיר אבל בהחלט שווה להקדיש להן יום.</p></a></div>
<div class="minheight"><a href="families"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/aqua.jpg" alt="בודפשט עם ילדים" /></span><p style="vertical-align:central;"><h4>בודפשט עם ילדים</h4>לבודפשט יש שורה ארוכה של אטרקציות המתאימות לכל המשפחה, ריכזנו אותם עבורכם במקום אחד.</p></a></div>
<div class="minheight"><a href="winter"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/balnamallice.jpg" alt="החלקה על הקרח בבודפשט" /></span><p style="vertical-align:central;"><h4>החלקה על הקרח</h4>אטרקציה יחודית לחורף הינה החלקה על הקרח, בכל פינה נפתחים מגרשי החלקה, מדריך להחלקה על הקרח.</p></a></div>
<div class="minheight"><a href="bath"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/sechen.jpg" alt="מרחצאות בבודפשט" /></span><p style="vertical-align:central;"><h4>מרחצאות בבודפשט</h4>המרחצאות הרבים בבודפשט הם כמעט סימן ההיכר של העיר, ממרחצאות סצ'ני בכיכר הגיבורים ועד לגלרט, רודש וקירלי בבודה.</p></a></div>
<div class="minheight"><a href="balaton"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/balaton.jpg" alt="אגם בלטון" /></span><p style="vertical-align:central;"><h4>אגם בלטון</h4>אגם בלטון ממוקם במרחק של כשעה נסיעה מבודפשט גודלו פי עשרה מים כינרת והוא הפך לאיזור תיירות המושך מליוני מבקרים בשנה.</p></a></div>
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