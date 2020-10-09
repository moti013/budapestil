<?php include 'dbconfig.php'; $con = mysqli_connect("localhost", $dbname, $dbpassword, $dbcode); ?>
<!DOCTYPE html><html lang="HE">
<head>
<meta charset="UTF-8" /><link rel="canonical" href="https://budapestil.co.il/debrecen" />
<link rel="stylesheet" href="assets/css/main11.css"/><link rel="preload" as="font" type="font/woff2" crossorigin href="assets/fonts/fontawesome-webfont.woff2?v=4.7.0" /><link rel="preload" href="assets/js/main11.js" as="script"><link rel="preload" href="assets/css/main11.css" as="style">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"><meta name="theme-color" content="#292C2F"><link rel="manifest" href="manifest.json"><link rel="apple-touch-icon" href="images/favicon1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<title>סיכום טיול לדברצן - בודפשט איי אל</title>
<meta name="keywords" content="בודפשט, budapestil, דברצן, טיול לדברצן, מה עושים בדברצן, טיול בהונגריה, טיול מחוץ לבודפשט">
<meta name="description" content="Wizz עלו עלי שאני יום שלם חורשת על טיסה מסויימת שמההתחלה לא היתה זולה ולא חיפשתי באינקוגינטו טעות אבל התרגשתי והם הקפיצו את המחיר אז החלטתי לרדת מבודפשט ואמרתי לעצמי תנסי בסקייסקנר לכל מקום ויצא - דברצן">
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
<div class="article"><div class="Breadcrumbs"><a href="/">בית</a> > <a href="budapest-attraction">אטרקציות בבודפשט</a> > טיול לדברצן</div>
<h1>טיול לדברצן: הסיכום של ורד לטיול משפחתי בעיר דברצן</h1><div class="fastnav"><span class="bfastnav">ניווט מהיר בדף</span><br/>
<a href="#הזמנת הטיסה לדברצן" onclick="scrollTo(this)">הזמנת הטיסה לדברצן</a>
<a href="#היעד: דברצן" onclick="scrollTo(this)">היעד: דברצן</a>
<a href="#מלון אקווטיקום בדברצן" onclick="scrollTo(this)">מלון אקווטיקום בדברצן</a>
<a href="#מרכז העיר" onclick="scrollTo(this)">מרכז העיר</a>
<a href="#קניות קניונים ואוכל" onclick="scrollTo(this)">קניות קניונים ואוכל</a>
<a href="#חזרה הביתה" onclick="scrollTo(this)">חזרה הביתה</a>
<a href="#גלריית תמונות" onclick="scrollTo(this)">גלריית תמונות</a>
</div>
<?php $url="https://budapestil.co.il/debrecen"; $tarrel="rel='noopener noreferrer nofollow' target='_blank'"; ?><div class="sharebar"><a class="face" <?php echo $tarrel; ?> href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a><a class="mail" <?php echo $tarrel; ?> href="mailto:?subject=שיתוף&body=<?php echo $url; ?>"><i class="fa fa-envelope"></i></a><a class="whatsapp" <?php echo $tarrel; ?> href="whatsapp://send?text=<?php echo $url; ?>"><i class="fa fa-whatsapp"></i></a><a class="twitter" <?php echo $tarrel; ?> href="http://www.twitter.com/share?url=<?php echo $url; ?>"><i class="fa fa-twitter"></i></a></div><hr/>

אני רוצה לספר לכם על חופשת הקיץ שלי בדברצן, חופשה ספונטנית לחלוטין שקרמה עור וגידים רק כשבוע וחצי לפני שטסנו.
</div>


<div class="article" id="הזמנת הטיסה לדברצן">
<h2>שלב הזמנת הטיסה לדברצן</h2>החלטתי לקחת את הקטנים שלי - בן 13 ובת 12 לבד לחופשה ארוכה יותר מסופ"ש, ואמרתי מה טוב יותר מלחזור לבודפשט אהובתי ולעשות את כל הדברים שלא הספקנו בפעם הקודמת. 
אבל מחשבות לחוד ומציאות לחוד, בחברת וויזאייר "עלו עלי" שאני יום שלם חורשת על טיסה מסוימת שמלכתחילה לא הייתה זולה במיוחד. 
בדרך כלל אני מחפשת בחלון גלישה בסתר, הפעם שכחתי משום מה, אולי מהתרגשות לקראת הטיול הספונטני, הטעות הזאת התבררה כיקרה, הם הקפיצו את המחיר לרמה שהחלטתי לרדת מבודפשט.

אם לא בודפשט אז עוברים לסקייסקאנר, חיפושים אחרי טיסה זולה ליעד אחר, לאחר חיפוש די קצר קפצה דברצן, במחיר סביר לגמרי של 77 דולר לאדם עם תיק גב.
</div>


<div class="article" id="היעד: דברצן">
<h2>היעד: דברצן</h2>כל מה שידעתי על דברצן זה שהיא נמצאת בהונגריה, וכמו שכולנו עושים כשלא יודעים, שואלים את גוגל. גוגל ברוב חוכמתו, כנראה מכיר אותנו, רק אמרתי לו דברצן וישר שלף את מלון אקווטיקום - פארק מים מקורה עם ברכות טרמה, עכשיו כבר היה ברור, זה היעד שלנו!

<b>ד ב ר צ ן</b> - העיר השניה בגודלה בהונגריה, סגרתי את הטיסות בסקייסקאנר, המחיר היה סך הכל 704 שח לשלושתנו בתיקי גב, לקחתי תיקים מתקפלים בתוך תיקי הגב לקניות מתוך מחשבה להוסיף מזוודה בחזור, אם הקניות יהיו שוות כמובן:)

את המלון אקווטיקום הזמנתי ישירות דרך האתר, מסתבר שרק דרך האתר שלהם זה כולל את הפארק מים והטרמה, הזמנתי 5 לילות במלון לשלושתנו על בסיס חצי פנסיון, כולל פארק המים וארוחת בוקר וערב. 
רצינו לחלק את השהות גם למרכז העיר, אז הזמנו 4 לילות נוספים בדירת אייר בי אנד בי במרכז דברצן.

הטיסה עברה בשלום ונחתנו בצהרי היום, משדה התעופה לקחנו מונית ישירות לפארק המים, המחיר הוא 4000 פורינט, מחיר קבוע.
</div>


<div class="article" id="מלון אקווטיקום בדברצן">
<h2>מלון אקווטיקום בדברצן</h2><div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/aquaticum1.jpg" alt="מלון אקווטיקום דברצן" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/aquaticum2.jpg" alt="מלון אקווטיקום דברצן" /></div>

המלון התברר כמלון מדהים, ואפילו האוכל בו היה ממש טוב, פארק המים המקורה גם הוא היה בול בזמן, כי במהלך השהות שלנו ירד גשם.
ברכות הטרמה! וואו וואו ועוד פעם וואו! לא מבינה איך ויתרתי על זה בבודפשט, במיוחד בריכת הטרמה הפתוחה שנמצאת בחוץ, פשוט תענוג. דמיינו שיורד גשם ואתם בבריכה החמה, זו היתה חוויה.

המלון עצמו ממוקם בתוך פארק גדול מאוד, מימינו יש שני אגמים קטנים, עם ברבורים ודגים, מזרקות, והמון ירוק. כן, נשמע כמו תיאור מתוך סצנה בסרט, כך בדיוק זה נראה.

<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/26.jpg" alt="ברבורים באגם ליד מלון אקווטיקום דברצן" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/13.jpg" alt="שני אגמים קטנים ליד מלון אקווטיקום" /></div>

משמאל למלון ישנה מזרקה שאפשר ללכת בתוכה על אבני בטון, היא משפריצה עליכם קצת מים אבל ממש לא נורא, כל ערב בשעות 20:00 21:00 22:00 23:00 יש מופע הולוגרמה יפה מאוד במזרקה.

<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/18.jpg" alt="מזרקת הולוגרמה בדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/mizraka.jpg" alt="מזרקת הולוגרמה בדברצן" /></div>

מיד ביציאה מהפארק יש אוניברסיטה יפה ומרשימה מאוד, בקרבת מקום יש גם את מגדל המים ומתחתיו פאב נחמד, המגדל בלילה מואר באורות צבעוניים, בנוסף יש את אצטדיון הכדורגל וגן חיות קטן.

<div class="gallery"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/24.jpg" alt="מגדל מים עם אורות צבעוניים בדברצן" /><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/17.jpg" alt="מגדל מים עם אורות צבעוניים בדברצן" /></div>

בצהריים אפשר לקנות אוכל, שתיה וגלידות בפארק המים, הקניה היא באמצעות צמיד אלקטרוני שמקבלים ביום הראשון, הוא משמש סוג של כרטיס אשראי בתוך המלון, התשלום מתבצע בצ'ק אאוט.
דרך אגב, אם אתם הורים לקטנטנים, במלון יש גם משחקייה נחמדה המתאימה לכל הגילאים.

פרטי מלון אקווטיקום
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="https://goo.gl/maps/iGT2W5DXnFNzjaco7"><div class="navigateto"><span style="color:yellowgreen">לחצו <i class="fa fa-address"></i> לניווט</span><br />Nagyerdei park 1, Debrecen 4032</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="tel:+36-30-123-4567"><div class="navigateto" dir="ltr"><i class="fa fa-phone"></i><br />+36-30-123-4567</div></a>
</div>
<div class="col2for">
<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:hotel@aquaticum.hu"><div class="navigateto"><i class="fa fa-envelope"></i><br />שלחו מייל למלון</div></a>
<a rel="noopener noreferrer nofollow" target="_blank" href="https://hotel.aquaticum.hu/en"><div class="navigateto"><i class="fa fa-website"></i><br />עברו לאתר האינטרנט</div></a>
</div>
</div>


<div class="article" id="מרכז העיר">
<h2>עוברים למרכז העיר</h2>את המעבר מהמלון לדירה עשינו בחשמלית, את הכרטיסים אפשר לקנות במכולת והמחיר הוא 330 פורינט לכרטיס, אפשר גם לרכוש כרטיסים בחשמלית עצמה מהנהג/ת ואז המחיר יקר יותר, 400 פורינט לכרטיס.

הגענו לעיר, הדירה התבררה כמוצלחת במיוחד, היא הייתה ממוקמת בדיוק על הציר של מרכז העיר דברצן. הכל מסביב היה כל כך יפה! מזרקות מכל הכיוונים, בניינים יפים, בתי קפה ומסעדות.
</div>


<div class="article" id="קניות קניונים ואוכל">
<h2>קניות קניונים ואוכל בין לבין</h2>לא שכחנו את המטרה המשנית של הטיסה, קניות כמובן!! הורדנו את התיקים וחדורי מטרה הלכנו ישר לקניון - Debrecen Fórum, מסע הקניות התחיל.

קניתי לילדים הרבה מהכל, הכל ממש ממש זול, צהריים אכלנו ב-kfc, הכי פשוט הכי קל, משם חזרה לדירה להניח את כל הקניות, אבל לא סיימנו בזה.

את החנות sport direct זכרנו לטובה מבודפשט, ביררנו כמובן מבעוד מועד שהיא נמצאת גם שם ויצאנו לפשוט עליה, המחירים גם שם היו ממש זולים! נייק, אדידס, בגדים, נעליים, כל מה שרצינו.

בזאת פחות או יותר סיימנו את היום הזה, חזרנו לדירה ויצאנו עוד פעם אחת בערב, הסתובבנו קצת ליד Drink Bar Mokka, שם גם יש מזרקות בצבעים שיוצאות מצד לצד ויוצרות גשר שאפשר לעבור דרכו.

למחרת בבוקר הלכנו לאכול ב the box, לא מבינה איך לא נכנסתי למקום הזה בבודפשט, דונטס מעולה, מילקשייק נוטלה מעולה, סנדוויץ גבינת קממבר טעים בטירוף, טוסט עם 3 סוגי גבינה וחרדל דיז’ון וואו,
לימונדה מעולה ,מילקשייק אוכמניות מעולה
ומקרוניס ענקי בטעם עוגת גבינה מעולההההה, ואם נמאס לכם לשמוע מעולה אתם צודקים אבל אל תוותרו על the box, אם חשבתי שמיסטר פאנק ומיס בייגל זה וואו אז זה כפול.

ממשיכים במשימת הקניות, הלכנו לנסות את קניון השני Debrecen Plaza, אמ;לק: מיושן - לא המקום לקניות.
הייתה חנות ספורט שקנינו נעלי אולסטר גבוהות במחיר של 9999 פורינט, פפקו, וזהו בערך.

מה שכן מצאנו שם וזאת הייתה גולת הכותרת של הקניון הזה, זה הבאולינג, שעת משחק בצהריים לשלושתינו יחד עלתה 3500 פורינט - כלום כסף ביחס לארץ, אנחנו ממש אהבנו ואפילו חזרנו ביום האחרון לטיול אחה"צ לשעת משחק נוספת.

<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/bouling.jpg" alt="מגרש באולינג בקניון דברצן פלאזה בדברצן" /></div>

משם המשכנו חזרה לפורום להשלים עוד קצת קניות ולהתגבר על האכזבה מדברצן פלאז'ה, קנינו עוד כמה דברים וחזרנו לדירה בערב הילדים רצו פיצה ומצאנו את Pizza Via, הזמנו 2 מגשים ויחד עם הטיפ הנזק היה 2750 פורינט.

למחרת קמנו והתפנקנו בכמה משקאות בסטרבאקס, משם ישר לפארק האתגרי Round Forest Adventure Park, בכדי להגיע לפארק צריך לקחת את קו 45, אנחנו גאונים שכמותנו טעינו בכיווון 🤪 לא קרה כלום, חוויה בפני עצמה 😆. ירדנו, לקחנו את הקו מהצד השני, כמובן שהיינו צריכים גם לקנות כרטיסים מחדש, וסוף סוף הגענו לפארק. 

בילינו בערך חמש שעות נחמדות וחזרנו למרכז.
בדרך קרץ לנו שוב השלט של הקניון, אז פשוט ירדנו והלכנו לאכול בבורגר קינג, עוד קצת מתנות לאלה שנשארו בארץ וחזרה לדירה.

למחרת היה היום האחרון לטיול שלנו וניסינו להספיק את כל מה שנשאר לנו ברשימה, הלכנו לראות את הכנסיה האדומה, Ady park, Reformed Great Church of Debrecen, בניין העירייה, הסתובבנו גם סתם ככה ברחובות וגילינו כמה כנסיות יפות שלא מוזכרות בשום אתר למטיילים, אפילו מבנה המשטרה יפה שם, הלכנו לראות את המוזיאון Déri Museum, אחרי הצהריים הלכנו לשחק באולינג קניות אחרונות כי איך אפשר אחרת וארוחת ערב.

בלילה יצאנו שוב לסיבוב מזרקות בחושך, משקה סטארבקס אחרון, ולדירה לישון. הטיסה בשעה 6:10 בבוקר.
</div>


<div class="article" id="חזרה הביתה">
<h2>חזרה הביתה</h2>את המונית לשדה הזמנתי דרך המייל מחברת fonixtai, המייל שלהם הוא Fonixtaxi@fonixtaxi.hu, הם היו אדיבים ומסודרים, קבעו איתנו את נקודת האיסוף, המונית חיכתה לנו בדיוק בשעה 4:00 לפנות בוקר, הנסיעה עלתה 3500 פורינט.

בגלל כל הקניות הוספתי פריורטי לשלושתנו כך שלכל אחד מאיתנו היה מותר לקחת גם טרולי לתא הנוסעים, דילגנו על שלב שליחת המזוודות בצ'ק אין והגענו ישר לבידוק הביטחוני, שם בדקו אותנו טוב טוב.

הדיוטי פרי של שדה התעופה בדברצן ממש קטנטן ואין בו כמעט כלום, למזלנו אוכל וחטיפים קניתי מראש, בדיוטי פרי קניתי רק מים ב-430 פורינט לעומת 99 פורינט במרכז העיר דברצן, מה שנותן קצת מושג על הבדלי המחירים.

זהו, בזאת הסתיימה לה חופשת הקיץ הספונטנית שלנו, הילדים נהנו מעל ומעבר, אני נהנתי, הבאנו מתנות לכל מי שהשארנו בארץ, וחזרנו עם מלא חוויות וטעם של עוד.


<div class="accordion"><?php $tablename="comments_debrecen"; $counter = 0; $result = mysqli_query($con,"SELECT * FROM $tablename");while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {if ($row['name']=='') continue; $counter++;} print "<div class='counter'>$counter תגובות התפרסמו | יש לכם מה להוסיף?</div>";?></div><div class="panel">
<?php $result = mysqli_query($con,"SELECT * FROM $tablename"); $first_row = false; $i=0; $x="&nbsp;"; while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {$i++; if ($row['name']=='') continue; print "<div class='title'>$i.$x$row[title]</div>"; print "<div class='dateandname'>$row[name] || $row[datetime]</div>"; print "<div class='comments'>$row[comment]</div>"; echo '<br>';} ?><hr/><div class="align-c"><b>הוסיפו תגובה לכתבה</b></div><br/><form action="/assets/comments/comments" method="post"><input type="hidden" name="verible" value="<?php echo $tablename; ?>"><div class="col2"><input type="text" name="name" placeholder="שם מלא" required><input type="text" name="title" placeholder="כותרת" required></div>
<textarea type="text" name="comment" placeholder="תגובה" required></textarea><br />
<input type="submit" value="שלח" class="align-l">
</form></div>
</div>

<div class="article" id="גלריית תמונות">
<h3>גלריית תמונות</h3>
<div class="col2d-col1m">
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/1.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/2.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/3.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/4.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/5.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/6.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/7.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/8.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/9.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/10.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/11.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/12.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/13.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/14.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/15.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/16.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/17.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/18.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/19.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/20.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/21.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/22.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/23.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/24.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/25.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/26.jpg" alt="יוני ניר- טיול לדברצן" /></div>
<div class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/debrecen/27.jpg" alt="יוני ניר- טיול לדברצן" /></div>
</div>
</div>
<br/><br/><br/>
<h4 class="aligncenter">את כל השאר אתם מכירים?</h4><hr/>
<div class="article" style=" -webkit-column-count: 2 !important;-moz-column-count: 2 !important;column-count: 2 !important;"><div class="minheight"><a href="pest05"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/vaci/1.jpg" alt="אטרקציות בבודפשט" /></span><p style="white-space:pre-wrap"><h4>אטרקציות ברובע 5</h4>בודפשט הקלאסית, משפת הדנובה ועד לרובע היהודי לרוחב ומהפרלמנט דרך הבזיליקה, ואצי אוצה, ועד לשוק המקורה.</p></a></div>
<div class="minheight"><a href="pest06"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/operettha.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>אטרקציות ברובע 6</h4>רובע 6 בבודפשט מכיל את כל שדרות אנדראשי, ממרכז העיר דרך אוקטגון, האופרה, המרכז לאמנויות הבמה ועד לכיכר הגיבורים</p></a></div>
<div class="minheight"><a href="pest07"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/synagoga.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>רובע 7 - הרובע היהודי</h4>הרובע היהודי מכיל כמובן את רוב ההיסטוריה היהודית של בודפשט אבל כיום מהווה גם את מרכז חיי הלילה.</p></a></div>
<div class="minheight"><a href="buda"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/fish.jpg" alt="אטרקציות בבודפשט" /></span><p style="vertical-align:central;"><h4>אטרקציות בבודה</h4>מעברו השני של נהר הדנובה נמצאת בודה, שתי נקודות העניין המרכיות הן טירת בודה ומצודת הדייגים.</p></a></div>
<div class="minheight"><a href="cruises"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/cruises.jpg" alt="שיט על הדנובה" /></span><p style="vertical-align:central;"><h4>שיט על הדנובה</h4>קיימות כמה חברות שיט המציעות הפלגות עם הדרכה בשפה העברית, המומלצות ביותר הן לג'נדה וסילבר ליין.</p></a></div>
<div class="minheight"><a href="margit"><span style="margin:0;" class="image fit"><img class="lazy" src="preimg.png" data-src="preimg.png" data-srcset="images/margaret.jpg" alt="האי מרגרט" /></span><p style="vertical-align:central;"><h4>האי מרגרט</h4>האי מרגרט בלב הדנובה עם גישה דרך גשר מרגיט הוא אי ירוק עם פארק מים משלו ומזרקה מנגנת.</p></a></div>
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
<script async src="assets/js/youtube.js"></script>
</body>
</html>
<?php mysqli_close($con); ?>