# السلام علیکم ورحمتہ اللہ وبرکاتہ
Hi,  
دوستو  

# Associated Links

* [YouTube Videos Playlist](https://www.youtube.com/playlist?list=PLuSlqiqQkM0wSHcgl7CjEYg51PxsCwMVd)
* [GitHub Repository](https://github.com/asakpke/Learn-PHP-Web-App-Development-using-MySQL)

# Class Intro (*brief*):
* Login

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

> Become my patron https://patreon.com/asakpke

# Instructor Intro (*brief*): Aamir Shahzad
* DCS, IDCS, IADCS, MCS
* Programming, Linux & Open Source
* RoshanTech, Attock City, Pakistan
* [www.eSite.pk](http://esite.pk/)

# Requested to Like Videos
> It's requested to like our videos because it helps us to reach more great people like you.

# Class
* Login

# Login

## 1.html
```html
<main class="form-signin w-100 m-auto">
  <form action="2.php" method="post">
    <img class="mb-4" src="../Class 3/bootstrap-5.3.1-examples/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
      <label for="floatingInputEmail">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>
```

## 2.php
```php
$sql = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}'";
print_r($sql);

$result = mysqli_query(
	$connection,
	$sql
);

$row = mysqli_fetch_assoc($result);
print_r($row);
// var_dump($row);

if (empty($row)) {
    echo '<h1>Invalid email/password</h1>';
    exit;
}

echo '<h1>Valid email/password</h1>';
```

# Ending
Future classes topics
* Fix issues in Log In Page
* Session Management

# Signal/WhatsApp Groups for Q/A
▶️ YouTube.com/asakpke  
یہ گروپ مفت وائیڈ ڈویلپمنٹ سیکھانے کے لیے بنایا ہے۔ کیونکہ یہ گروپ اوپن ہے اسلیے کوئی بھی غیر معقول/متعلقہ شئیرنگ کر سکتا ہے جسے گروپ سے ممکنہ نکال دیا جائے گا۔ ہر ممبر کی ذمہ داری ہے کہ وہ اپنی طرف سے ایسی پوسٹ کو ڈیلیٹ کردیں۔

https://signal.group/#CjQKIIssIuNAzXUTNutw2TIOPso2Hw3W11Lc6nFELTzPQQHSEhD4buQi25ABWVuAyoZKfevd

https://chat.whatsapp.com/EhEIPA7HdKb6MnvlzwyqLa

https://whatsapp.com/channel/0029Va8Cf7842DciJsxV4p1E

آپ بےشک اس گروپ کو ہر جگہ شئیر کریں، شکریہ 🙏

عامر شہزاد  
RoshanTech  
www.eSite.pk  

[^1]: "<a href=https://www.pngall.com/web-development-png/download/12773 target="_blank">Web Development PNG Image</a>" by <a href="pngall">PNGAll</a>, used under <a href="http://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a> / Text & background added from original

#php #phptutorial #phpwebdevelopment #mysql #mysqltutorial #webdevelopment #webdeveloper #learnphp #learnmysql #phpforbeginners #mysqlforbeginners #phpprogramming #mysqlprogramming #phpmysql #phpmysqltutorial #phpmysqldevelopment