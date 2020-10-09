<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/metro" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>מטרו בבודפשט, הרכבת התחתית של בודפשט - בודפשט איי אל</title>
<meta name="keywords" content="budapestil, budapest, מטרו בבודפשט, בודפשט מטרו, תחבורה ציבורית בודפשט, בודפשט תחבורה ציבורית, מפת המטרו בבודפשט בעברית, הרכבת התחתית של בודפשט">
<meta name="description" content="מדריך המטרו בבודפשט בעברית, מפת הקווים המלאה עם ארבעת הקווים: M1 M2 M3 M4 ותחנות חשובות בכל אחד מן הקווים, אל תצאו לדרך בלי המפה.">
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
<h1>הרכבת התחתית של בודפשט: קווים M1 M2 M3 M4</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#מפת קווי המטרו של בודפשט" onclick="scrollTo(this)">מפת קווי המטרו של בודפשט</a>
<a href="#קו מטרו M1" onclick="scrollTo(this)">קו מטרו M1</a>
<a href="#קו מטרו M2" onclick="scrollTo(this)">קו מטרו M2</a>
<a href="#קו מטרו M3" onclick="scrollTo(this)">קו מטרו M3</a>
<a href="#קו מטרו M4" onclick="scrollTo(this)">קו מטרו M4</a>
</div>
<?php $url="https://budapestil.co.il/metro"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>

את מרכז העיר של בודפשט מרשתים שלושת קוי המטרו העתיקים באירופה M1, M2, M3 וקו רביעי M4 שנפתח בשנת 2014.
</div>


<div class="article" id="מפת קווי המטרו של בודפשט"><h2>מפת קווי המטרו של בודפשט בעברית</h2><span class="image fit" style="background-color:ActiveCaption"><img src="images/metromap.svg" alt="מפת קווי המטרו בבודפשט בעברית" /></span>
</div>


<div class="article" id="קו מטרו M1">
<h2>קו מטרו M1</h2><hr/><span class="image left-tiny"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/m1.jpg" alt="מטרו M1 בודפשט" /></span>קו המטרו M1, נקרא גם הקו הצהוב, הינו הקו העתיק ביותר בבודפשט ולמעשה גם ביבשת אירופה כולה.

הקו נבנה בשנת 1896, בירידה לתחנות המטרו M1 תרגישו שחזרתם מאה שנה אחורה, מה שלא משפיע על התפקוד התקין והמלא של הקו.

הקו מחבר בין מרכז העיר (<a href="pest05">תחילת ואצי אוצה</a>), עובר לכל אורך <a href="pest06">שדרות אנדראשי</a>, עד ל<a href="pest14">פארק העירוני של בודפשט (כיכר הגיבורים)</a>.

שני כיווני הנסיעה של הקו מסומנים כמו תמיד לפי התחנות הסופיות בשני הצדדים: תחנת מקסיקו- Mexikói út ותחנת כיכר וורושמרטי- Vörösmarty tér.

להגעה למרכז העיר חפשו את השלט לכיוון Vörösmarty tér.
להגעה לכיכר הגיבורים, גן חיות, מרחצאות סצ'ני וכו', חפשו את השלט לכיוון Mexikói út.


<b>ימי ושעות פעילות:</b><br/>כל יום: 4:45-23:45

<b>תדירות:</b><br/>2-10 דקות

<b>תחנות בקו המטרו M1 ונקודות עניין:</b><br/><table class="newtable">
<tbody>
<tr>
<th>שם התחנה</th>
<th>נקודות עניין קרובות</th>
</tr>
<tr>
<td>Vörösmarty tér</td>
<td>&#9673; ואצי אוצה<br />&#9673; קפה (קונדיטוריית) ז'רבו<br />&#9673; קזינו לאס וגאס</td>
</tr>
<tr>
<td>Deák Ferenc tér</td>
<td>&#9673; הגלגל הענק<br />&#9673; <a href="pest07">הרובע היהודי</a><br />&#9673; בית כנסת הגדול<br />&#9673; בית חבד<br />&#9673; מלון קמפינסקי </td>
</tr>
<tr>
<td>Bajcsy-Zsilinszky út</td>
<td>&#9673; הבזיליקה<br />&#9673; <a href="families">מוזיאון תלת מימד</a></td>
</tr>
<tr>
<td>Opera</td>
<td>&#9673; בית האופרה</td>
</tr>
<tr>
<td>Oktogon</td>
<td>&#9673; מרכז שדרות אנדראשי</td>
</tr>
<tr>
<td>Vörösmarty utca</td>
<td>&#9673; מוזיאון הטרור</td>
</tr>
<tr>
<td>Kodály körönd</td>
<td>-</td>
</tr>
<tr>
<td>Bajza utca</td>
<td>-</td>
</tr>
<tr>
<td>Hősök tere</td>
<td>&#9673; <a href="pest14">כיכר הגיבורים</a><br />&#9673; טירת ויידהוניאד<br />&#9673; המוזיאון לאמנות יפה<br />&#9673; החלקה על הקרח<br />&#9673; הגלריה הלאומית לאמנות (מוצ'ארנוק)</td>
</tr>
<tr>
<td>Széchenyi Fürdő</td>
<td>&#9673; <a href="pest14">מרחצאות סצ'ני</a><br />&#9673; גן החיות והגן הבוטני</td>
</tr>
<tr>
<td>Mexikói út</td>
<td>-</td>
</tr>
 </tbody>
</table> 
</div>


<div class="article" id="קו מטרו M2">
<h2>קו מטרו M2</h2><hr/><span class="image left-tiny"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/m2.jpg" alt="מטרו M2 בודפשט" /></span>קו M2 - נקרא גם הקו האדום, חוצה את נהר הדנובה ומחבר בין בודה לפשט.

שני כיווני הנסיעה של הקו מסומנים לפי התחנות הסופיות בשני הצדדים: תחנת הרכבת דלי- Déli pályaudvar אשר נמצאת בבודה מצד אחד, ותחנת Örs vezér tere בפשט.

להגעה לבודה חפשו את השלט לכיוון Déli pályaudvar (להגעה לרכבת הילדים, להחליף לקו 56A בתחנת כיכר קלמן- Széll Kálmán tér).

להגעה לקניון ארנה חפשו את השלט לכיוון Örs vezér tere (לרדת בתחנת הרכבת קלטי- Keleti pályaudvar).

<b>ימי ושעות פעילות:</b><br/>ראשון-חמישי: 4:33-23:33
שישי-שבת: 4:33-00:33

<b>תדירות:</b><br/>2-10 דקות

<b>תחנות בקו המטרו M2 ונקודות עניין:</b><br/><table class="newtable" dir="rtl">
<tbody>
<tr>
<th>שם התחנה</th>
<th>נקודות עניין קרובות</th>
</tr>
<tr>
<td>Örs vezér tere</td>
<td>&#9673; קניון ארקד</td>
</tr>
<tr>
<td>Pillangó utca</td>
<td>-</td>
</tr>
<tr>
<td>Puskás Ferenc Stadion</td>
<td>-</td>
</tr>
<tr>
<td>Keleti Pályaudvar</td>
<td>&#9673; קניון ארנה<br />&#9673; תחנת הצטלבות עם המטרו החדש M4 לבודה</td>
</tr>
<tr>
<td>Blaha Lujza tér</td>
<td>&#9673; קפה ניו יורק<br />&#9673; צידו הדרום מזרחי של הרובע היהודי</td>
</tr>
<tr>
<td>Astoria</td>
<td>&#9673; בית כנסת הגדול<br />&#9673; המוזיאון הלאומי של הונגריה</td>
</tr>
<tr>
<td>Deák Ferenc tér</td>
<td>&#9673; הגלגל הענק<br />&#9673; הרובע היהודי<br />&#9673; בית כנסת הגדול<br />&#9673; בית חבד<br />&#9673; מלון קמפינסקי</td>
</tr>
<tr>
<td>Kossuth Lajos tér</td>
<td>&#9673; בנין הפרלמנט<br />&#9673; המוזיאון האתנוגרפי<br />&#9673; אנדרטת הנעליים</td>
</tr>
<tr>
<td>Batthyány tér</td>
<td>&#9673; תחנת רכבת H5 פרברית לסנטאנדרה<br />&#9673; 10 דקות הליכה למצודת הדייגים</td>
</tr>
<tr>
<td>Széll Kálmán tér</td>
<td>&#9673; תחנת אוטובוס קו 56A או קו 61 לרכבת הילדים</td>
</tr>
<tr>
<td>Déli Pályaudvar</td>
<td>&#9673; תחנת הרכבת המערבית של בודפשט</td>
</tr>
</tbody>
</table>
</div>


<div class="article" id="קו מטרו M3">
<h2>קו מטרו M3</h2><hr/><span class="image left-tiny"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/m3.jpg" alt="מטרו M3 בודפשט" /></span>הקו הכחול: בשיפוצים כבר תקופה ארוכה, יש שינויים בלוחות הזמנים, בסופי שבוע ובערבים הקו מוחלף על ידי קו אוטובוס. הקו מחבר בין שכונת קישפשט הקרובה לשדה התעופה דרך רחוב Üllői, מרכז העיר, עד לתחנת Lehel tér.

<b>ימי ושעות פעילות:</b><br/>ראשון: 8:06-20:30
שני-שישי: 4:26-20:30
שבת: לא פעיל
בשבתות ובימי השבוע החל מהשעה 20:30 מוחלף המטרו על ידי אוטובוסים M3 עד תום שיפוץ הקו.

<b>תדירות:</b><br/>3-5 דקות

<b>תחנות בקו המטרו M3 ונקודות עניין:</b><br/>(הקו בשיפוצים, זו היא רשימת התחנות הפעילות בלבד):<table class="newtable" dir="rtl"><tbody>
<tr>
<th>שם התחנה</th>
<th>נקודות עניין קרובות</th>
</tr>
<tr>
<td>Lehel tér</td>
<td>&#9673; שוק להל</td>
</tr>
<tr>
<td>Nyugati pályaudvar</td>
<td>&#9673; קניון ווסט אנד</td>
</tr>
<tr>
<td>Arany János utca</td>
<td>&#9673; הבזיליקה</td>
</tr>
<tr>
<td>Deák Ferenc tér</td>
<td>&#9673; הגלגל הענק<br />&#9673; הרובע היהודי<br />&#9673; בית כנסת הגדול<br />&#9673; בית חבד<br />&#9673; מלון קמפינסקי</td>
</tr>
<tr>
<td>Ferenciek tere</td>
<td>&#9673; מקביל למרכז ואצי אוצה</td>
</tr>
<tr>
<td>Kálvin tér</td>
<td>-</td>
</tr>
<tr>
<td>Corvin-negyed</td>
<td>&#9673; קורבין פלאז'ה (קניון)</td>
</tr>
<tr>
<td>Klinikák</td>
<td>-</td>
</tr>
<tr>
<td>Nagyvárad tér</td>
<td>-</td>
</tr>
<tr>
<td>Népliget</td>
<td>&#9673; תחנה מרכזית עבור קווי פליקסבאס לרחבי אירופה</td>
</tr>
<tr>
<td>Ecseri út</td>
<td>-</td>
</tr>
<tr>
<td>Pöttyös utca</td>
<td>-</td>
</tr>
<tr>
<td>Határ út</td>
<td>-</td>
</tr>
<tr>
<td>Kőbánya-Kispest</td>
<td>&#9673; תחנת החלפה לקו 200E לשדה התעופה</td>
</tr>
</tbody>
</table>
</div>


<div class="article" id="קו מטרו M4">
<h2>קו מטרו M4</h2><hr/><span class="image left-tiny"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/m4.jpg" alt="מטרו M4 בודפשט" /></span>הקו הירוק: מחבר גם הוא בין פשט לבודה בצד המערבי שלה.

<b>ימי ושעות פעילות:</b><br/>ראשון-חמישי: 4:27-23:27
שישי-שבת: 4:27-00:27

<b>תדירות:</b><br/>2-10 דקות

<b>תחנות בקו המטרו M4 ונקודות עניין:</b><br/><table class="newtable" dir="rtl">
<tbody>
<tr>
<th>שם התחנה</th>
<th>נקודות עניין קרובות</th>
</tr>
<tr>
<td>Keleti Pályaudvar</td>
<td>&#9673; קניון ארנה<br />&#9673; תחנת הצטלבות עם קו המטרו M2</td>
</tr>
<tr>
<td>II. János Pál pápa tér</td>
<td>&#9673; תיאטרון ארקל</td>
</tr>
<tr>
<td>Rákóczi tér</td>
<td>-</td>
</tr>
<tr>
<td>Kálvin tér</td>
<td>&#9673; תחנת הצטלבות עם קו המטרו M3</td>
</tr>
<tr>
<td>Fővám tér</td>
<td>&#9673; מסעדת פור סייל<br />&#9673; השוק המקורה</td>
</tr>
<tr>
<td>Szent Gellért tér</td>
<td>&#9673; גבעת גלרט<br />&#9673; מרחצאות גלרט</td>
</tr>
<tr>
<td>Móricz Zsigmond körtér</td>
<td>&#9673; קניון אלי (ALLEE)</td>
</tr>
<tr>
<td>Újbuda központ</td>
<td>-</td>
</tr>
<tr>
<td>Bikás park</td>
<td>-</td>
</tr>
<tr>
<td>Kelenföldi pályaudvar</td>
<td>&#9673; תחנת הרכבת הדרומית של בודפשט</td>
</tr>
 </tbody>
</table>

<div class="accordion"><?php $tablename="comments_metro"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">אולי יעניין אתכם גם?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="transport-tickets"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/moretransport/tickets.jpg" alt="תיקוף כרטיסים" /></span><p style="white-space:pre-wrap"><h4>קניה ותיקוף כרטיסים</h4>מדי יום מקבלים התיירים הישראלים דוחות על אי תיקוף כרטיסים בתחבורה הציבורית, קראו איך להמנע מכך</p></a></div>
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
</body>
</html>
<?php mysqli_close($con); ?>