<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/bicycle-rental" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>השכרת אופניים וקורקינטים חשמליים בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="budapestil, בודפשט השכרת אופניים ,ליים בודפשט , אופניים להשכרה בבודפשט, השכרת אופניים בבודפשט, השכרת קורקינטים חשמליים בבודפשט, קורקינט חשמלי בבודפשט, lime בודפשט">
<meta name="description" content="מדריך להשכרת אופניים וקורקינטים חשמליים בבודפשט, חברת התחבורה הציבורית מפעילה תחנות אוטומטיות להשכרת אופניים בכל רחבי העיר בודפשט, דרך נעימה במיוחד לטייל בעיר">
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
<h1>השכרת אופניים וקורקינטים חשמליים בבודפשט</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#חברת מול בובי" onclick="scrollTo(this)">חברת מול בובי</a>
<a href="#השכרת האופניים" onclick="scrollTo(this)">השכרת האופניים</a>
<a href="#מפת מיקומים אינטראקטיבית" onclick="scrollTo(this)">מפת מיקומים אינטראקטיבית</a>
<a href="#מחיר רכישת מנוי" onclick="scrollTo(this)">מחיר רכישת מנוי</a>
<a href="#הוצאה והחזרה של האופניים" onclick="scrollTo(this)">הוצאה והחזרה של האופניים</a>
<a href="#מחיר השכרה בפועל" onclick="scrollTo(this)">מחיר השכרה בפועל</a>
<a href="#טיפ חשוב לחסכון" onclick="scrollTo(this)">טיפ חשוב לחסכון</a>
<a href="#השכרת קורקינט חשמלי בבודפשט" onclick="scrollTo(this)">השכרת קורקינט חשמלי בבודפשט</a>
</div>
<?php $url="https://budapestil.co.il/bicycle-rental"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>
</div>

<div class="article" id="חברת מול בובי">
בבודפשט קיימות 126 תחנות להשכרת אופניים הנמצאות בבעלות חברת MOL Bubi ובהן כ-1526 זוגות אופניים.

<b>חשוב לדעת:</b><br/>על פי מדיניות החברה, ניתן לשכור אופניים מעל גיל 14 בלבד!
</div>

<div class="article" id="השכרת האופניים">
<h2>השכרת האופניים</h2><span class="image fit"><img src="images/bicycle.jpg" alt="מכונות אוטומטיות להשכרת אופניים בבודפשט" />מכונה אוטומטית לקניית כרטיסים</span>
<b>1. רכישת המנוי</b><br/>רכישת המנוי יכולה להתבצע באחת מתחנות ההשכרה האוטומטיות המופיעות במפה, או באמצעות האפליקציה.
להורדת האפליקציה: <a href="https://play.google.com/store/apps/details?id=net.nextbike.bkk.molbubi&hl=hu" target="_blank" rel="noopener noreferrer nofollow">למכשירי אנדרואיד</a>, <a href="https://itunes.apple.com/hu/app/mol-bubi/id916249357?mt=8" target="_blank" rel="noopener noreferrer nofollow">למכשירי אפל</a>, <a href="https://www.microsoft.com/hu-hu/store/apps/mol-bubi/9wzdncrdm4hp" target="_blank" rel="noopener noreferrer nofollow">לווינדוס פון</a>.

בעת רכישת המנוי תזדקקו לכרטיס אשראי בינלאומי (ויזה, מאסטר קארד, אמריקן אקספרס) ומספר טלפון הונגרי בעל קידומת <span dir="ltr">+36</span>.
</div>

<div class="article" id="מפת מיקומים אינטראקטיבית">
<b>מפת מיקומים - תחנות להשכרת אופניים בבודפשט</b><br/><iframe src="https://bubi.nextbike.net/reservation/?domains=mb&lat=47.496&lng=19.0445&zoom=13&height=350&maponly=1&language=hu" style="width:100%; height:350px;"></iframe>
</div>

<div class="article" id="מחיר רכישת מנוי">
<b>טבלת מחירים עבור רכישת המנוי:</b><br/><table class="newtable">
<tbody>
<tr>
<th>תוקף המנוי</th>
<th>מחיר בפורינט</th>
 </tr>
<tr>
<td>24 שעות</td>
<td>500</td>
</tr>
<tr>
<td>72 שעות</td>
<td>1000</td>
</tr>
<tr>
<td>כרטיס שבועי</td>
<td>2000</td>
</tr>
<tr>
<td>בכל רכישת מנוי תתבקשו בנוסף להשאיר פקדון<br />באשראי ע"ס של 25,000 פורינט (כ-330 ש"ח)</td>
</tr>
</tbody>
</table>
</div>

<div class="article" id="הוצאה והחזרה של האופניים">
<b>2. הוצאה והחזרה של האופניים מתחנת העגינה</b><br/>לאחר שיש ברשותכם מנוי, ניתן לגשת אל כל אחת מתחנות העגינה ולהקיש את מספר הטלפון אותו הזנתם בעת ההרשמה.

לאחר הזנת הטלפון ישלח אליכם במסרון-SMS קוד, אותו תתבקשו להזין במכונת הרכישה.

בשלב האחרון תתבקשו לבחור את האופניים הרצויות.

הבחירה מתבצעת באמצעות הקשת המספר המופיע על מנגנון העגינה של כל זוג אופניים.

מומלץ לפני תחילת התהליך לוודא איזה אופניים אתם מתכוונים להוציא, לבדוק את המספר שלהן, והכי חשוב לבדוק שהן נראות תקינות ומוכנות לנסיעה, זאת בכדי שלא תצטרכו להחזיר והתחיל מחדש.
</div>

<div class="article" id="מחיר השכרה בפועל">
<b>טבלת המחירים עבור זמן ההשכרה בפועל:</b><br/><table class="newtable">
<tbody>
<tr>
<th>משך ההשכרה</th>
<th>מחיר בפורינט</th>
 </tr>
<tr>
<td>30 דקות</td>
<td>חינם</td>
 </tr>
<tr>
<td>שעה</td>
<td>500</td>
 </tr>
<tr>
<td>שעה וחצי</td>
<td>1000</td>
 </tr>
<tr>
<td>שעתיים</td>
<td>1500</td>
</tr>
<tr>
<td>שעתיים וחצי</td>
<td>2000</td>
 </tr>
<tr>
<td>3 שעות</td>
<td>2500</td>
 </tr>
<tr>
<td>3 שעות וחצי</td>
<td>3500</td>
 </tr>
<tr>
<td>4 שעות</td>
<td>4500</td>
</tr>
<tr>
<td>4 שעות וחצי</td>
<td>5500</td>
 </tr>
<tr>
<td>5 שעות</td>
<td>6500</td>
 </tr>
<tr>
<td>5 שעות וחצי</td>
<td>7500</td>
<tr>
<td>6 שעות</td>
<td>8500</td>
 </tr>
</tbody>
</table>
שימו לב: מחיר ההשכרה בפועל, עולה ככל שמשך הזמן שהאופניים ברשותכם ארוך יותר.
</div>

<div class="article" id="טיפ חשוב לחסכון">
אם תרצו לחסוך את עלות זמן ההשכרה בפועל, תוכלו להחזיר את האופניים לאחת מתחנות העגינה הרבות בבודפשט ולשכור שוב ללא עלות, מכיוון שכך מתאפס מונה זמן ההשכרה.

<div class="accordion"><?php $tablename="comments_bicycle"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="השכרת קורקינט חשמלי בבודפשט">
<h2>השכרת קורקינט חשמלי בבודפשט</h2><hr/><span class="image fit"><img src="images/lime.jpg" alt="סקוטר חשמלי של חברת ליים" /></span>
בשנת 2019 נכנסה לשוק התחבורה בבודפשט גם חברת LIME הבינלאומית הפועלת בערים רבות ברחבי בהעולם.

החברה משכירה קורקינטים על בסיס שיתופי, ללא תחנות עגינה ובאמצעות אפליקציה.

התהליך כולל רישום קצר באפליקציה של חברת ליים, זאת כמובן אחרי שהורדתם אותה <a target="_blank" rel="noopener noreferrer nofollow" href="https://play.google.com/store/apps/details?id=com.limebike&hl=iw">מכאן</a> - לבעלי מכשיר אנדרואיד, <a target="_blank" rel="noopener noreferrer nofollow" href="https://apps.apple.com/us/app/lime-your-ride-anytime/id1199780189">או מכאן</a> - לבעלי מכשיר אפל, לאחר הרישום פעלו לפי ההוראות באפליקציה.

ההוצאה וההחזרה של הקורקינטים אינן תלויות מיקום, הקורקינטים הממונעים של החברה פזורים בכל רחבי העיר, תוכלו לפתוח באמצעות האפליקציה כל מכשיר פנוי שתתקלו בו, ולסיים את השימוש בכל נקודה בה תרצו ברחבי העיר.

שימו לב שצריך להתרגל לשימוש בקורקינטים, קחו לעצמכם כמה דקות ללמוד את הכלי לפני שתפתחו בנסיעות ארוכות ברחבי העיר.

הטענת הקורקינטים החשמליים של ליים, נעשית גם היא על ידי המשתמשים אשר נרשמים לכך ומקבלים תשלום לכל טעינה. אם תרצו לחסוך קצת תוכלו להרשם לשירות כטוענים.

<div class="accordion"><?php $tablename="comments_lime"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">אולי יעניין אתכם גם?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="transport-tickets"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/tickets.jpg" alt="תיקוף כרטיסים" /></span><p style="white-space:pre-wrap"><h4>קניה ותיקוף כרטיסים</h4>מדי יום מקבלים התיירים הישראלים דוחות על אי תיקוף כרטיסים בתחבורה הציבורית, קראו איך להמנע מכך</p></a></div>
<div class="minheight"><a href="metro"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/metro.jpg" alt="מטרו בבודפשט" /></span><p style="vertical-align:central;"><h4>מטרו בבודפשט</h4>באמצעות הבנת מפת קווי המטרו של בודפשט, תוכלו לחסוך לעצמכם הרבה מאוד זמן וכסף, ניתן להגיע מנקודה לנקודה תוך דקות ספורות</p></a></div>
<div class="minheight"><a href="taxis"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/taxi.jpg" alt="מוניות בבודפשט" /></span><p style="vertical-align:central;"><h4>מוניות בבודפשט</h4>לרוב אין צורך במוניות בבודפשט, אולם אם כן החלטתם להשתמש בשירותיהם של נהגי המוניות בעיר, חשוב שתדעו כמה דברים</p></a></div>
<div class="minheight"><a href="cruises"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/cruises.jpg" alt="שיט על הדנובה" /></span><p style="vertical-align:central;"><h4>שיט על הדנובה</h4>קיימות כמה חברות שיט המציעות הפלגות עם הדרכה בשפה העברית, המומלצות ביותר הן לג'נדה וסילבר ליין.</p></a></div>
<div class="minheight"><a href="driving-in-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/carental.jpg" alt="נהיגה והשכרת רכב" /></span><p style="vertical-align:central;"><h4>נהיגה והשכרת רכב</h4>נהיגה בארץ זרה דורשת מכם קצת יותר ריכוז ועבודת הכנה קלה, שלא יפתיעו אתכם בכביש בזמן אמת, קראו את המדריך שלנו לנהיגה בטוחה בהונגריה</p></a></div>
<div class="minheight"><a href="offline-navigate"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/here.jpg" alt="ניווט אופליין" /></span><p style="vertical-align:central;"><h4>ניווט אופליין</h4>החלטתם להתנתק לגמרי מהרשת וטרדות היומיום ולא לקנות סים מקומי? אבל איך תנווטו?! חברת נוקיה יחד כם מייקרוסופט הביאו לכם פתרון מושלם</p></a></div>
<div class="minheight"><a href="hop-on-hop-off"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/giraffe.jpg" alt="אוטובוס תיירים" /></span><p style="vertical-align:central;"><h4>אוטובוס תיירים</h4>גם זו דרך להכיר את העיר, אוטובוסי התיירים המפורסמים בעלי שתי הקומות והגג הפתוח מהווים חוויה בפני עצמם, במיוחד עבור ילדים</p></a></div>
<div class="minheight"><a href="airport-transport"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/200e.jpg" alt="תחבורה משדה התעופה" /></span><p style="vertical-align:central;"><h4>תח"צ משדה התעופה</h4>אל רוב המלונות בהם תשהו בבודפשט ניתן להגיע משדה התעופה בקלות ובמהירות באמצעות התחבורה הציבורית, בדקו את המסלול והשעות</p></a></div>
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