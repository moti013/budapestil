<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/airport-transport" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>תחבורה משדה התעופה בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="בודפשט, budapestil, קו 100E, קו 200E, מטרו M3, תחבורה ציבורית בבודפשט, שדה התעופה בבודפשט, בודפשט, budapest">
<meta name="description" content="התחבורה הציבורית משדה התעופה בבודפשט כוללת שני קווים עיקריים קו 100E וקו 200E, מומלץ לבחור בקו הישיר משדה התעופה למרכז העיר">
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
<h1>תחבורה משדה התעופה בבודפשט: קווים 100E, 200E</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#קניית הכרטיסים" onclick="scrollTo(this)">קניית הכרטיסים</a>
<a href="#אפליקציית התחבורה הציבורית" onclick="scrollTo(this)">אפליקציית התחבורה הציבורית</a>
<a href="#מחירי הכרטיסים" onclick="scrollTo(this)">מחירי הכרטיסים</a>
<a href="#קווי האוטובוס" onclick="scrollTo(this)">קווי האוטובוס</a>
<a href="#לוח זמנים משדה התעופה" onclick="scrollTo(this)">לוח זמנים משדה התעופה</a>
<a href="#לוח זמנים ממרכז העיר" onclick="scrollTo(this)">לוח זמנים ממרכז העיר</a>
</div>
<?php $url="https://budapestil.co.il/airport-transport"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>
</div>


<div class="article" id="קניית הכרטיסים"><span class="image left"><img src="images/bkkairport.jpg" alt="קו 100E" />דוכן BKK בשדה התעופה בבודפשט</span>

<b>קניית הכרטיסים:</b><br/>מיד עם יציאתכם מאולם קבלת המזוודות בשדה התעופה בבודפשט, תוכלו להבחין משמאלכם בדלפק של חברת התחבורה הציבורית בבודפשט – BKK. (בתמונה למעלה)
ניתן לקנות כרטיסים לקווים משדה התעופה, כמו גם כרטיסים יומיים\שבועיים\חודשיים.

על הכרטיסים ניתן לשלם במזומן בפורינט בלבד או בכרטיס אשראי.
מתקבלים סוגי כרטיסי האשראי הבאים בלבד: ויזה, מאסטרקרד, אמריקן אקספרס.
</div>


<div class="article" id="אפליקציית התחבורה הציבורית">
<div style="color:darkblue;border:1px solid">פיילוט חדש לתשלום באמצעות אפליקציה נכנס לשימוש בקו 100E ומתוכנן בהמשך להכנס לשימוש בכל קווי התחבורה הציבורית בבודפשט.
ניתן להוריד את האפליקציה מחנויות האפליקציה השונות (<a rel="noopener noreferrer nofollow" target="_blank" href="https://play.google.com/store/apps/details?id=hu.nemzetimobilfizetes.mobiljegyapp">להורדה למכשירי אנדרואיד</a>, <a rel="noopener noreferrer nofollow" target="_blank" href="https://itunes.apple.com/app/id1340923156">להורדה למכשירי אפל</a>).
לאחר רכישת הכרטיס באמצעות האפליקציה תדרשו לסרוק את הקוד המופיע באוטובוס על מנת לתקף את הכרטיס הדיגיטלי שקניתם.</div>
</div>


<div class="article" id="מחירי הכרטיסים">
<b>מחירי הכרטיסים:</b><br/>900 פורינט עבור הקו הישיר 100E
530 פורינט לכרטיס מעבר עבור קו 200E
חשוב מאוד: לא לשכוח <a href="transport-tickets">לתקף את כרטיס המעבר פעמיים</a>, גם לאחר ההחלפה.
<b>ניתן לשלם על כל סוגי הכרטיסים בפורינט בלבד</b>
</div>


<div class="article" id="קווי האוטובוס">
<b>קווי האוטובוס:</b><br/><span class="image left"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/200e.jpg" alt="קו 200E" />תחנת קו 200E בקובניה קישפשט</span>
קיימים שני קווי אוטובוס משדה התעופה, קו 100E וקו 200E.

הקו המועדף הינו קו 100E המגיע משדה התעופה ישירות למרכז העיר, אולם הקו פועל רק בשעות היום. תדירות הקו הינה כ-20 דקות.
אם הנכם נדרשים להגיע לשדה התעופה ממרכז העיר, או בכיוון ההפוך בשעות הלילה, תוכלו להשתמש בקו 200E עם החלפה.

ההחלפה מתבצעת בתחנת קובניה קישפשט - Kőbánya-Kispest בתוך ה<a href="shopping-malls">קניון קוקי טרמינל</a>.

מתחנה זו תוכלו לקחת את <a href="metro">קו המטרו M3</a>  בשעות הפעילות שלו ולאחר מכן את אחד מהקווים 914A, 914, 950A, 950.
את פירוט השעות והקווים הפעילים באותן שעות תמצאו בטבלאות להלן.
בדקו את שעת הנחיתה או ההמראה שלכם, ובחרו לפי שעות הפעילות את המסלול האפשרי.
</div>


<div class="article" id="לוח זמנים משדה התעופה">
<b>לוח זמנים:</b><br/><h4>משדה התעופה למרכז העיר בודפשט:</h4><table class="newtable" style="font-size:80%">
<tbody>
<tr>
<th>מספר קו</th>
<th>שעות פעילות</th>
<th>החלפה בתחנת</th>
<th>תחנות יעד</th>
</tr>
<tr>
<td>100E</td>
<td>05:00-01:20</td>
<td>ללא החלפה</td>
<td><ul><li>קלווין טר - kalvin ter</li><li>אסטוריה - Astoria</li><li>דאק פרנץ - deak ferenc ter</li></ul></td>
</tr>
<tr>
<td>200E<br />&darr;<br />M3</td>
<td>04:00-23:00</td>
<td>קובניה קישפשט - kobanya kispest</td>
<td><ul><li>קלווין טר - kalvin ter</li><li>אסטוריה - Astoria</li><li>דאק פרנץ - deak ferenc ter</li></ul></td>
</tr>
<tr>
<td>200E<br />&darr;<br />914 /914A /950 /950A</td>
<td>23:00-03:20</td>
<td>קובניה קישפשט - kobanya kispest</td>
<td><ul><li>קלווין טר - kalvin ter</li><li>אסטוריה - Astoria</li><li>דאק פרנץ - deak ferenc ter</li></ul></td>
</tr>
</tbody>
</table>
</div>


<div class="article" id="לוח זמנים ממרכז העיר">
<h4>ממרכז העיר בודפשט לשדה התעופה:</h4><table class="newtable" style="font-size:80%">
<tbody>
<tr>
<th>מספר קו</th>
<th>שעות פעילות</th>
<th>החלפה בתחנת</th>
<th>תחנות מוצא</th>
</tr>
<tr>
<td>100E</td>
<td>03:40-00:40</td>
<td>ללא החלפה</td>
<td><ul><li>דאק פרנץ - deak ferenc ter<br/><a href="https://goo.gl/maps/nGBNeXKFCkG2">לניווט לתחנה לחצו כאן</a></li><li>אסטוריה - Astoria (בין השעות 3:42 ל-4:42 לפנות בוקר בלבד)</li><li>קלווין טר - kalvin ter</li></ul></td>
</tr>
<tr>
<td>914/914A/950<br />&darr;<br />200E</td>
<td>23:45-04:35</td>
<td>קובניה קישפשט - kobanya kispest</td>
<td><ul><li>דאק פרנץ - deak ferenc ter<br /><a href="https://goo.gl/maps/nGBNeXKFCkG2">לניווט לתחנה לחצו כאן</a></li><li>אסטוריה - Astoria</li><li>קלווין טר - kalvin ter</li></ul></td>
</tr>
<tr>
<td>M3<br />&darr;<br />200E</td>
<td>04:36-23:44</td>
<td>קובניה קישפשט - kobanya kispest</td>
<td><ul><li>דאק פרנץ - deak ferenc ter<br /><a href="https://goo.gl/maps/nGBNeXKFCkG2">לניווט לתחנה לחצו כאן</a></li><li>אסטוריה - Astoria</li><li>קלווין טר - kalvin ter</li></ul></td>
</tr>
</tbody>
</table>

<div class="accordion"><?php $tablename="comments_airporttrans"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
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