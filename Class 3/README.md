# السلام علیکم ورحمتہ اللہ وبرکاتہ
Hi,  
دوستو  

# Associated Links

* [YouTube Videos Playlist](https://www.youtube.com/playlist?list=PLuSlqiqQkM0wSHcgl7CjEYg51PxsCwMVd)
* [GitHub Repository](https://github.com/asakpke/Learn-PHP-Web-App-Development-using-MySQL)

# Class Intro (*brief*):
* GUI/UI/UX
* Sample Website
* Convert into PHP
* Bootstrap
* Sign Up Page
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

> Become my patron https://patreon.com/asakpke

# Instructor Intro (*brief*): Aamir Shahzad
* DCS, IDCS, IADCS, MCS
* Programming, Linux & Open Source
* RoshanTech, Attock City, Pakistan
* [www.eSite.pk](http://esite.pk/)

# Requested to Like Videos
> It's requested to like our videos because it helps us to reach more great people like you.

# Class
* GUI/UI/UX
* Sample Website
* Convert into PHP
* Bootstrap
* Sign Up Page
* Security Issues in Signup

# GUI/UI/UX
* GUI stands for Graphical User Interface
* UI stands for User Interface. It is the part of a computer program, website, or other electronic device that enables the user to interact with it
* UX stands for User Experience. It is the overall experience that a user has when interacting with a product or service
	* DigiSkills Chatbot Bad Example

# Sample Website
## 0.html
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sample Website</title>
</head>
<body>
	<h1>Sample Website</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora suscipit esse commodi dolor quibusdam officiis doloremque deleniti. Sint fugiat dolores, odit totam rerum aliquid quis doloremque dolor provident soluta nobis.</p>
</body>
</html>
```

## 1.css/2.html from [w3schools](https://www.w3schools.com/howto/howto_css_example_website.asp)
* Bit changed
* Separate CSS file

```css
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #666;
  color: white;
}

.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
```

```html
<!DOCTYPE html>
<html lang="en">
<head>
<title>Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
</head>
<body>
<div class="header">
  <h1>My Website</h1>
  <p>A <b>responsive</b> website created by me.</p>
</div>

<div class="navbar">
  <a href="2.html" class="active">Home</a>
  <a href="3.html">About</a>
  <a href="#">Link</a>
  <a href="#" class="right">Link</a>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>Main Page</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
```

## 3.html
```html
...
<title>About Page</title>
...
<h2>About Page</h2>
...
```

# Convert into PHP
## Header File
### 4.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="1.css">
</head>
<body>

<div class="header">
  <h1>My Website</h1>
  <p>A <b>responsive</b> website created by me.</p>
</div>

<div class="navbar">
  <a href="2.html">Home</a>
  <a href="3.html">About</a>
  <a href="#">Link</a>
  <a href="#" class="right">Link</a>
</div>
```

## Sidebar File
### 5.php
```php
<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
```

## Footer File
### 6.php
```php
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
```

## Content File
### 7.php
```php
<?php 
require '4.php'; // Header
require '5.php'; // Sidebar
?>

<h2>Main Page</h2>
<h5>Title description, Dec 7, 2017</h5>
<div class="fakeimg" style="height:200px;">Image</div>
<p>Some text..</p>
<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
<br>
<h2>TITLE HEADING</h2>
<h5>Title description, Sep 2, 2017</h5>
<div class="fakeimg" style="height:200px;">Image</div>
<p>Some text..</p>
<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<?php 
require '6.php' ; // Footer
?>
```

### 8.php
```php
<?php 
require '4.php'; // Header
require '5.php'; // Sidebar
?>

<h2>About Page</h2>
<h5>Title description, Dec 7, 2017</h5>
<div class="fakeimg" style="height:200px;">Image</div>
<p>Some text..</p>
<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
<br>
<h2>TITLE HEADING</h2>
<h5>Title description, Sep 2, 2017</h5>
<div class="fakeimg" style="height:200px;">Image</div>
<p>Some text..</p>
<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

<?php 
require '6.php' ; // Footer
?>
``` 

# Bootstrap
* Bootstrap is a free and open-source front-end framework for developing websites and web applications

## CDN
* A CDN, or content delivery network, is a system of servers that are distributed across the globe
* Improved performance
* Increased availability
* Reduced costs
* Improved security
* Scalability
* Global reach

### 9.html
```html
...
<head>
...
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
...
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
...
```

## Without CDN
* Control
* Offline use

### 10.html
```html
...
<head>
...
<link href="bootstrap-5.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
...
<script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.min.js"></script>
...
```

# Sign Up Page
## 11.html
```html
...
<form action="12.php">
	<img class="mb-4" src="bootstrap-5.3.1-examples/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
	<h1 class="h3 mb-3 fw-normal">Please sign up</h1>

	<div class="form-floating">
		<input name="name" type="text" class="form-control" id="floatingInputName" placeholder="YourFirstName YourLastName">
		<label for="floatingInputName">Your full name</label>
	</div>

	<div class="form-floating">
		<input name="email" type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
		<label for="floatingInputEmail">Email address</label>
	</div>
	<div class="form-floating">
		<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
		<label for="floatingPassword">Password</label>
	</div>

	<div class="form-check text-start my-3">
		<input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
		<label class="form-check-label" for="flexCheckDefault">
			Remember me
		</label>
	</div>
	<button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
	<p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
</form>
...
```

## 12.php
* Remind 0.php file from the last class

```php
...
$result = mysqli_query(
	$connection,
	'INSERT INTO users (name, email, password) VALUES ("'.$_GET['name'].'", "'.$_GET['email'].'", "'.$_GET['password'].'")'
);

if ($result === TRUE) {
  echo "<h1>Database record created.</h1>";  // optional
}
else {
	echo '<h1>Error in executing query:</h1>' . mysqli_error($connection);
}
...
```

# Security Issues in Signup


# Ending

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