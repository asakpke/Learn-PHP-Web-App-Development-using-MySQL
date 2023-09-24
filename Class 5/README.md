# السلام علیکم ورحمتہ اللہ وبرکاتہ
Hi,  
دوستو  

# Associated Links

* [YouTube Videos Playlist](https://www.youtube.com/playlist?list=PLuSlqiqQkM0wSHcgl7CjEYg51PxsCwMVd)
* [GitHub Repository](https://github.com/asakpke/Learn-PHP-Web-App-Development-using-MySQL)

# Class Intro (*brief*):
* Security Issues in Signup

# Course Intro (*brief*): Learn PHP Web App Development using MySQL
![](img/Web-Development-PNG-Image.png) [^1]

* Course style: fast without basics
* Resources: My Learn Programming Course, My Paid Course, FWD Live Sessions, PHP Urdu Book, W3Schools, DigiSkills
* Course Fee!
	* Don't worry :slightly_smiling_face:, pay as you like!
	> Account Holder: Aamir Shahzad  
	> Account No: 52010100479581  
	> Bank Name: Meezan Bank  
	> City: Attock City  
	> Branch Code: 5201  
	> IBAN No: PK97MEZN0052010100479581  

You can pay fee whatever you can afford :innocent: Even if it's just a rupee/dollar, we appreciate it.

# Instructor Intro (*brief*): Aamir Shahzad
* DCS, IDCS, IADCS, MCS
* Programming, Linux & Open Source
* RoshanTech, Attock City, Pakistan
* [www.eSite.pk](http://esite.pk/)

# Requested to Like Videos
> It's requested to like our videos because it helps us to reach more great people like you.

# Class
* Security Issues in Signup

# Security Issues in Signup
## What's the issue
* Add few records
* Then SQL Injection

## Import Database
* Emails

## The issue in details
What if we put following in the password field
> `mypassword"); DELETE FROM users; #`

## How to Fix it?
```php
$stmt = mysqli_prepare($connection, 'INSERT INTO Table_Name VALUES (null, ?);');
mysqli_stmt_bind_param($stmt, "type string", $variables, ...);
mysqli_stmt_execute($stmt);
```

# Ending
Future classes topics
* Log In Page
* Session Management

# Signal/WhatsApp Groups for Q/A
▶️ YouTube.com/asakpke  
یہ گروپ مفت وائیڈ ڈویلپمنٹ سیکھانے کے لیے بنایا ہے۔ کیونکہ یہ گروپ اوپن ہے اسلیے کوئی بھی غیر معقول/متعلقہ شئیرنگ کر سکتا ہے جسے گروپ سے ممکنہ نکال دیا جائے گا۔ ہر ممبر کی ذمہ داری ہے کہ وہ اپنی طرف سے ایسی پوسٹ کو ڈیلیٹ کردیں۔

https://signal.group/#CjQKIIssIuNAzXUTNutw2TIOPso2Hw3W11Lc6nFELTzPQQHSEhD4buQi25ABWVuAyoZKfevd

https://chat.whatsapp.com/EhEIPA7HdKb6MnvlzwyqLa

آپ بےشک اس گروپ کو ہر جگہ شئیر کریں، شکریہ 🙏

عامر شہزاد  
RoshanTech  
www.eSite.pk  

[^1]: "<a href=https://www.pngall.com/web-development-png/download/12773 target="_blank">Web Development PNG Image</a>" by <a href="pngall">PNGAll</a>, used under <a href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a> / Text & background added from original

#php #phptutorial #phpwebdevelopment #mysql #mysqltutorial #webdevelopment #webdeveloper #learnphp #learnmysql #phpforbeginners #mysqlforbeginners #phpprogramming #mysqlprogramming #phpmysql #phpmysqltutorial #phpmysqldevelopment