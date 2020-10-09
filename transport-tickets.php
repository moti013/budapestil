<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/transport-tickets" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>תחבורה ציבורית בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="בודפשט, budapestil, רכבות בבודפשט, חשמליות בבודפשט, תחבורה ציבורית בבודפשט, כרטיס שבועי בודפשט , בודפשט תחבורה ציבורית, אוטובוסים בבודפשט">
<meta name="description" content="התחבורה הציבורית בבודפשט נוחה מאוד וידידותית מאוד אם יודעים איך להשתמש בה במדריך זה התמקדנו בקניית כרטיסים לאוטובוסים בבודפשט, תיקוף הכרטיסים, מחירים">
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
<h1>רכישת כרטיסים לתחבורה הציבורית בבודפשט</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#דרכי רכישת הכרטיסים" onclick="scrollTo(this)">דרכי רכישת הכרטיסים</a>
<a href="#תיקוף כרטיסים" onclick="scrollTo(this)">תיקוף כרטיסים</a>
<a href="#מחירי הכרטיסים" onclick="scrollTo(this)">מחירי הכרטיסים</a>
<a href="#תוקף הכרטיסים" onclick="scrollTo(this)">תוקף הכרטיסים</a>
<a href="#שעות פעילות התחבורה בבודפשט" onclick="scrollTo(this)">שעות פעילות התחבורה בבודפשט</a>
<a href="#קווי טראם עיקריים" onclick="scrollTo(this)">קווי טראם עיקריים</a>
<a href="#קווי אוטובוס עיקריים לתיירים" onclick="scrollTo(this)">קווי אוטובוס עיקריים לתיירים</a>
<a href="#אזהרה על רכישה במכונות" onclick="scrollTo(this)">אזהרה על רכישה במכונות</a>
</div>
<?php $url="https://budapestil.co.il/transport-tickets"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>
</div>

<div class="article" id="דרכי רכישת הכרטיסים">
<h2>רכישת הכרטיסים</h2><hr/><ol><li><b>חדש:</b> רכישת כרטיסים באמצעות אפליקציית BKK, ניתן כעת לרכוש כרטיסים לקו 100E משדה התעופה ואליו, כרטיסים שבועיים, כרטיסים ל-72 שעות וכרטיסים יומיים.
לרכישת הכרטיסים הורידו את האפליקציה מחנויות האפליקציה השונות ועקבו אחר ההוראות.
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://play.google.com/store/apps/details?id=hu.nemzetimobilfizetes.mobiljegyapp"><div class="navigateto"><i class="fa fa-android"></i><br />אפליקציה לאנדרואיד<br /></div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="https://itunes.apple.com/app/id1340923156"><div class="navigateto"><i class="fa fa-apple"></i><br />אפליקציה למכשירי אפל<br /></div></a>
</div></li>
<li>במכונות האוטומטיות הממוקמות בכל <a href="metro">תחנות המטרו</a> בבודפשט וגם בחלק מתחנות הטראם.
צפו במדריך הוידאו (באנגלית) על תהליך רכישת הכרטיסים באמצעות המכונות האוטומטיות<div class="youtube" id="MoGq1wWhznc" style="width:100%;height:300px;"></div>
</li>
<li>בדלפקים של חברת BKK הנמצאים גם הם בכל תחנות המטרו.</li>
<li>אצל נהגי האוטובוסים.
שימו לב שברכישה אצל הנהג המחירים יקרים יותר ב-100 פורינט וניתן לקנות רק אם יש ברשותכם את הסכום המדויק, לנהגים אין אפשרות להחזיר עודף</li></ol>
</div>

<div class="article" id="תיקוף כרטיסים">
<h2>תיקוף כרטיסים</h2><hr /><ul>
<li><h3>תיקוף כרטיסים דיגיטליים באמצעות האפליקציה</h3>
לתיקוף כרטיסים דיגיטליים תדרשו לסרוק את הקוד המופיע על גבי מכונות התיקוף בכניסה למטרו או את הקוד המופיע באוטובוסים ובחשמליות בסמוך לדלת הכניסה.
לצפיה <a target="_blank" rel="noopener noreferrer nofollow" href="https://bkk.hu/mobileticket/video/v3-video_en.mp4">במדריך הוידאו של החברה לתיקוף כרטיסים דיגיטליים</a></li>

<li><h3>תיקוף כרטיסי נייר</h3>
צפו במדריך הוידאו (באנגלית) של חברת התחבורה הציבורית BKK לתיקוף כרטיסי הנסיעה<div class="youtube" id="Ax7MvPDKot8" style="width:100%;height:300px;"></div>


<b>סוגי הכרטיסים אותם אתם נדרשים לתקף</b><br/>כרטיס לנסיעה בודדת או כרטיס מעבר, נדרש לתקף. כרטיסים יומיים, 72 שעות, שבועיים, קבוצתיים, אין צורך לתקף.<div style="-webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><span class="image fit minheight1"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/singelticket.jpg" alt="בודפשט תיקוף כרטיס מטרו" />כרטיס בודד - צריך לתקף</span><span class="image fit minheight1"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/dailyticket.jpg" alt="תיקוף כרטיס מטרו בודפשט" />כרטיס יומי - אין צורך לתקף</span></div>


<b>אופן התיקוף במטרו</b><br/>מכונות התיקוף נמצאות לפני הדרגנוע באמצעותו יורדים לתחנת המטרו.
שימו לב: שורת מכונות התיקוף במטרו נחשבת לקו גבול שאם חציתם אותו מבלי לתקף את הכרטיס, תוכלו לקבל קנס!
ברוב התחנות קיים קו בצבע לבן המסמל את הגבול החוקי.

מכונות התיקוף במטרו
<span class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikufm1.jpg" alt="בודפשט תיקוף כרטיס מטרו" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikufm2.jpg" alt="תיקוף כרטיס מטרו בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikufm3.jpg" alt=" בודפשט תיקוף כרטיס מטרו" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikufm4.jpg" alt="תיקוף כרטיס מטרו בודפשט" /></span>


<b>אופן התיקוף באוטובוס או בטראם</b><br/>מכונות התיקוף נמצאות על גבי העמודים.
פעולת תיקוף הכרטיס משאירה חתימה או חור מרובע על גבי הכרטיס.

מכונות התיקוף באוטובוסים ובטראם
<span class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikuftram.jpg" alt="תיקוף כרטיס אוטובוס בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikuftram1.jpg" alt="תיקוף כרטיס אוטובוס בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikuftram2.jpg" alt="תיקוף כרטיס אוטובוס בודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tikuftram3.jpg" alt="תיקוף כרטיס אוטובוס בודפשט" /></span>
</li></ul>
</div>

<div class="article" id="מחירי הכרטיסים">
<h2>מחירי הכרטיסים</h2><hr /><table class="newtable">
<tbody>
<tr>
<td style="width:50%">ילדים מתחת לגיל 6, אזרחים אירופאים מעל גיל 65 (בהצגת תעודה)</td>
<td>חינם</td>
</tr>
<tr>
<td>כרטיס לנסיעה בודדת</td>
<td>350 פורינט</td>
</tr>
<tr>
<td>כרטיס מעבר</td>
<td>530 פורינט</td>
</tr>
<tr>
<td>כרטיסיה-עשר נסיעות</td>
<td>3000 פורינט</td>
</tr>
<tr>
<td>כרטיס יומי (<a href="cruises">שיט כלול. רק בימים שני עד שישי)</a></td>
<td>1650 פורינט</td>
</tr>
<tr>
<td>כרטיס ל-72 שעות (<a href="cruises">שיט כלול. רק בימים שני עד שישי)</a></td>
<td>4150 פורינט</td>
</tr>
<tr>
<td>כרטיס שבועי (<a href="cruises">שיט כלול. רק בימים שני עד שישי)</a></td>
<td>4950 פורינט</td>
</tr>
<tr>
<td>כרטיס לקו 100E משדה התעופה למרכז העיר</td>
<td>900 פורינט</td>
</tr>
<tr>
<td>כרטיס קבוצתי יומי (עד לחמישה נוסעים)</td>
<td>3300 פורינט</td>
</tr>
 </tbody>
</table>
</div>

<div class="article" id="תוקף הכרטיסים">
<h2>תוקף הכרטיסים</h2><hr /><ul>
<li><b>תוקף כרטיס בודד</b><br/>כרטיס נסיעה רגיל תקף ל-80 דקות בקווי היום (הפעילים בין השעות 4:30-23:50) ו-120 דקות בקווי הלילה (הפעילים בין השעות 23:50-4:30).
<b>שימו לב:</b> כרטיס בודד מאפשר מעבר <b>רק</b> בין קו מטרו אחד לשני, 80 דקות מרגע התיקוף ביום ו-120 דקות מרגע התיקוף בלילה.</li>

<li><b>תוקף כרטיס מעבר</b><br/>במידה ואתם נדרשים לנסיעה הכוללת שני קווים שאינם רק קווי מטרו, תוכלו לקנות כרטיס מעבר.
כרטיס המעבר כולל שני כרטיסים המסומנים בספרות 1 ו-2.
<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/transfer1.jpg" alt="תחבורה ציבורית בבודפשט" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/transfer2.jpg" alt="תחבורה ציבורית בבודפשט" /></div>
אתם נדרשים להשתמש תחילה בכרטיס הראשון ולתקף אותו, לאחר מכן בעת המעבר להשתמש בכרטיס השני ולתקף גם אותו.
טווח הזמן בין תיקוף הכרטיס הראשון ועד לתיקוף הכרטיס השני לא יעלה על 100 דקות ביום ו-120 דקות בלילה.
לאחר תיקוף הכרטיס השני תוכלו להמשיך לנסוע כמו בכרטיס רגיל (כולל מעברים נוספים רק בין קווי המטרו), למשך 80 דקות ביום ו-120 דקות בלילה.
</li></ul>
</div>

<div class="article" id="שעות פעילות התחבורה בבודפשט">
<h2>שעות פעילות התחבורה הציבורית בבודפשט</h2><hr /><ul>
<li><b>שעות פעילות המטרו בבודפשט</b><br /><u>קו M1:</u>
כל יום: 4:45-23:45
<u>קו M2:</u>
ראשון-חמישי: 4:33-23:33
שישי-שבת: 4:33-00:33
<u>קו M3:</u>
ראשון: 8:06-20:30
שני-שישי: 4:26-20:30
שבת: לא פעיל
בשבתות ובימי השבוע החל מהשעה 20:30 מוחלף המטרו על ידי אוטובוסים M3 עד תום שיפוץ הקו.
<u>קו M4:</u>
ראשון-חמישי: 4:27-23:27
שישי-שבת: 4:27-00:27
</li>

<li><b>שעות פעילות הטראם בבודפשט</b><br />4:30-23:50
(קווים מסויימים חורגים בכמה דקות)
</li>

<li><b>שעות פעילות האוטובוסים בבודפשט</b><br/>קווי האוטובוס פעילים 24 שעות ביממה ומחולקים לקווים רגילים וקווי לילה.
החלוקה לקווי יום/לילה הינה לפי השעות להלן:
יום: 4:30-23:50
לילה: 23:50-4:30
</li></ul>
</div>

<h2>קווי אוטובוסים וטראם שימושיים עבור התיירים</h2><hr /><div class="article" id="קווי טראם עיקריים"><b>קווי טראם עיקריים</b>
<b>קו 2</b> - נוסע לאורך הדנובה בצד של פשט.
<b>קווים 4/6</b> - פועלים 24 שעות, נוסעים על השדרה הראשית ומחברים בין בודה לפשט.
<b>קווים 47/48/49</b> - חוצים את גשר החירות.
<b>קווים 19 ו-41</b> - נוסעים לאורך הדנובה בצד של בודה.
</div>

<div class="article" id="קווי אוטובוס עיקריים לתיירים">
<b>קווי אוטובוס עיקריים לתיירים</b>
<b>קו 16</b> - מדיאק פרנץ לאיזור מצודת הדייגים וטירת בודה
<b>קו 27</b> - ממוריץ ז'יגמונד לכיוון גבעת גלרט
</div>

<div class="article" id="אזהרה על רכישה במכונות">
<b>הערה חשובה</b><br/>תרגיל ידוע לגניבת כמה פורינטים מתיירים בבודפשט, היא להדביק חתיכת דבק על פתח העודף במכונות האוטומטיות לרכישת כרטיסי נסיעה, אם ברצונכם להמנע מזה, נסו לראות לפני הרכישה אם מודבק משהו, ובכל מקרה המנעו מלהשתמש בשטרות גדולים.


<div class="accordion"><?php $tablename="comments_transticket"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">אולי יעניין אתכם גם?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="metro"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/metro.jpg" alt="מטרו בבודפשט" /></span><p style="vertical-align:central;"><h4>מטרו בבודפשט</h4>באמצעות הבנת מפת קווי המטרו של בודפשט, תוכלו לחסוך לעצמכם הרבה מאוד זמן וכסף, ניתן להגיע מנקודה לנקודה תוך דקות ספורות</p></a></div>
<div class="minheight"><a href="airport-transport"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/200e.jpg" alt="תחבורה משדה התעופה" /></span><p style="vertical-align:central;"><h4>תח"צ משדה התעופה</h4>אל רוב המלונות בהם תשהו בבודפשט ניתן להגיע משדה התעופה בקלות ובמהירות באמצעות התחבורה הציבורית, בדקו את המסלול והשעות</p></a></div>
<div class="minheight"><a href="taxis"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/taxi.jpg" alt="מוניות בבודפשט" /></span><p style="vertical-align:central;"><h4>מוניות בבודפשט</h4>לרוב אין צורך במוניות בבודפשט, אולם אם כן החלטתם להשתמש בשירותיהם של נהגי המוניות בעיר, חשוב שתדעו כמה דברים</p></a></div>
<div class="minheight"><a href="cruises"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/cruises.jpg" alt="שיט על הדנובה" /></span><p style="vertical-align:central;"><h4>שיט על הדנובה</h4>קיימות כמה חברות שיט המציעות הפלגות עם הדרכה בשפה העברית, המומלצות ביותר הן לג'נדה וסילבר ליין.</p></a></div>
<div class="minheight"><a href="bicycle-rental"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/bicycle.jpg" alt="השכרת אופניים" /></span><p style="vertical-align:central;"><h4>השכרת אופניים</h4>כחלק ממערך התחבורה הציבורית בעיר מפעילה חברת BKK ההונגרית את מערך השכרת האופניים בבודפשט. זה יעיל, קל ומומלץ במיוחד בחודשי הקיץ</p></a></div>
<div class="minheight"><a href="offline-navigate"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/here.jpg" alt="ניווט אופליין" /></span><p style="vertical-align:central;"><h4>ניווט אופליין</h4>החלטתם להתנתק לגמרי מהרשת וטרדות היומיום ולא לקנות סים מקומי? אבל איך תנווטו?! חברת נוקיה יחד כם מייקרוסופט הביאו לכם פתרון מושלם</p></a></div>
<div class="minheight"><a href="driving-in-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/carental.jpg" alt="נהיגה והשכרת רכב" /></span><p style="vertical-align:central;"><h4>נהיגה והשכרת רכב</h4>נהיגה בארץ זרה דורשת מכם קצת יותר ריכוז ועבודת הכנה קלה, שלא יפתיעו אתכם בכביש בזמן אמת, קראו את המדריך שלנו לנהיגה בטוחה בהונגריה</p></a></div>
<div class="minheight"><a href="hop-on-hop-off"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/giraffe.jpg" alt="אוטובוס תיירים" /></span><p style="vertical-align:central;"><h4>אוטובוס תיירים</h4>גם זו דרך להכיר את העיר, אוטובוסי התיירים המפורסמים בעלי שתי הקומות והגג הפתוח מהווים חוויה בפני עצמם, במיוחד עבור ילדים</p></a></div>
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