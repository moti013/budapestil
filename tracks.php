<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/tracks" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>מפות ומסלולי טיול בבודפשט - בודפשט איי אל</title>
<meta name="keywords" content="budapestil, מסלול טיול בבודפשט, מסלולי טיול בבודפשט, מסלולים בבודפשט, לוז בודפשט, תוכנית טיול שבועית בבודפשט">
<meta name="description" content="תוכניות טיול יומיות לפי איזורים בבודפשט, הדרך הנוחה והקלה לסדר את הלוז שלכם כך שלא תפספסו את הדברים החשובים">
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
<div class="article"><div class="Breadcrumbs"><a href="/">בית</a> > <a href="budapest-attraction">אטרקציות בבודפשט</a> > מפות ומסלולי טיול בבודפשט</div>
<h1>מסלולי טיול עבור הרובעים השונים של העיר בודפשט</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#מסלול טיול ברובע החמישי" onclick="scrollTo(this)">מסלול טיול ברובע החמישי</a>
<a href="#מסלול טיול ברובע השישי" onclick="scrollTo(this)">מסלול טיול ברובע השישי</a>
<a href="#מסלול טיול ברובע היהודי" onclick="scrollTo(this)">מסלול טיול ברובע היהודי</a>
<a href="#מסלול טיול בפארק העירוני" onclick="scrollTo(this)">מסלול טיול בפארק העירוני</a>
<a href="#מסלול טיול בצד של בודה" onclick="scrollTo(this)">מסלול טיול בצד של בודה</a>
<a href="#מסלול רכבת הילדים ורכבל הכסאות" onclick="scrollTo(this)">מסלול רכבת הילדים ורכבל הכסאות</a>
</div>
<?php $url="https://budapestil.co.il/tracks"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>

תוכניות טיול יומיות לפי איזורים בבודפשט, הדרך הנוחה והקלה לסדר את הלו"ז שלכם כך שלא תפספסו את הדברים החשובים באמת שיש לראות בבודפשט.

שימו לב שגוגל מאפשרת לבנות מסלולים בעלי עד 10 נקודות עניין, כך שבחלק מהאיזורים המסלולים אינם כוללים את כל נקודות העניין באיזור ותצטרכו להוסיף אותם בעצמכם.

</div>

<div class="article" id="מסלול טיול ברובע החמישי">
<h2>מסלול טיול ברובע החמישי של בודפשט</h2>
<div class="image fit"><iframe style="height:700px;width:100%" src="https://www.google.com/maps/d/embed?mid=181YMr5bXuLodR_V6WbELdt89t3CTnwlz"></iframe></div>
<a href="pest05"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לפירוט המלא על רובע 5 בבודפשט</div></a>


</div>

<div class="article" id="מסלול טיול ברובע השישי">
<h2>מסלול טיול ברובע השישי של בודפשט</h2>
<div class="image fit"><iframe style="height:700px;width:100%" src="https://www.google.com/maps/d/embed?mid=1uJRWZstVouOWsyzVikSmGl83Ci29j7UB"></iframe></div>
<a href="pest06"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לפירוט המלא על הרובע השישי של בודפשט</div></a>


</div>

<div class="article" id="מסלול טיול ברובע היהודי">
<h2>מסלול טיול ברובע השביעי של בודפשט - הרובע היהודי</h2>
<div class="image fit"><iframe style="height:700px;width:100%" src="https://www.google.com/maps/d/embed?mid=1yZJL9SD3GC9MeRqT4jtlWtR3oxglYjD4"></iframe></div>
<a href="pest07"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לפירוט המלא על הרובע היהודי בבודפשט</div></a>


</div>

<div class="article" id="מסלול טיול בפארק העירוני">
<h2>מסלול טיול בפארק העירוני של בודפשט</h2>
<div class="image fit"><iframe style="height:700px;width:100%" src="https://www.google.com/maps/d/embed?mid=1ygkpZ5TJmV9vAwOB7Ip7YnzJ1p1jRwr7"></iframe></div>
<a href="pest14"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לפירוט המלא של הפארק העירוני בבודפשט</div></a>


</div>

<div class="article" id="מסלול טיול בצד של בודה">
<h2>מסלול טיול בצד של בודה</h2>
<div class="image fit"><iframe style="height:700px;width:100%" src="https://www.google.com/maps/d/embed?mid=1xO4xqUTXJfEX8oj-ESSucrDUscTA7WRl"></iframe></div>
<a href="buda"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לפירוט המלא על טיול בצד של בודה</div></a>


</div>

<div class="article" id="מסלול רכבת הילדים ורכבל הכסאות">
<h2>מסלול רכבת הילדים ורכבל הכסאות בבודפשט</h2>
<div class="image fit"><iframe style="height:700px;width:100%" src="https://www.google.com/maps/d/embed?mid=1I6M4LTKwTO8ttb5IXYC66cnzA9VehNbf"></iframe></div>
<a href="suburbs-budapest"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לפירוט המלא על רכבת הילדים ורכבל הכסאות בבודפשט</div></a>



<div class="accordion"><?php $tablename="comments_tracks"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
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
<div class="minheight"><a href="suburbs-budapest"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/tropicarium.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>פרוורי בודפשט</h4>אטרקציות לא מעטות בבודפשט ממוקמות הרחק ממרכז העיר אבל בהחלט שווה להקדיש להן יום.</p></a></div>
<div class="minheight"><a href="families"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/aqua.jpg" alt="בודפשט עם ילדים" /></span><p style="vertical-align:central;"><h4>בודפשט עם ילדים</h4>לבודפשט יש שורה ארוכה של אטרקציות המתאימות לכל המשפחה, ריכזנו אותם עבורכם במקום אחד.</p></a></div>
<div class="minheight"><a href="winter"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/balnamallice.jpg" alt="החלקה על הקרח בבודפשט" /></span><p style="vertical-align:central;"><h4>החלקה על הקרח</h4>אטרקציה יחודית לחורף הינה החלקה על הקרח, בכל פינה נפתחים מגרשי החלקה, מדריך להחלקה על הקרח.</p></a></div>
<div class="minheight"><a href="bath"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/sechen.jpg" alt="מרחצאות בבודפשט" /></span><p style="vertical-align:central;"><h4>מרחצאות בבודפשט</h4>המרחצאות הרבים בבודפשט הם כמעט סימן ההיכר של העיר, ממרחצאות סצ'ני בכיכר הגיבורים ועד לגלרט, רודש וקירלי בבודה.</p></a></div>
<div class="minheight"><a href="szentendre"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/szentendre.jpg" alt="סנטאנדרה" /></span><p style="vertical-align:central;"><h4>עיירות ברך הדנובה</h4>שלוש עיירות היושבות על שפת הדנובה במקטע הנקרא ברך הדנובה או עיקול הדנובה, חוויה אותנטית וצבעונית.</p></a></div>
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
</body>
</html>
<?php mysqli_close($con); ?>