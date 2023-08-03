# السلام علیکم ورحمتہ اللہ وبرکاتہ
Hi  
دوستو  

# Class Intro (*brief*): 
* Our Digital Product:
* Domain Knowledge
* Database Design
* CRUD Operation

# Course Intro (*brief*): Learn PHP Web App Development using MySQL
![](https://i.pinimg.com/originals/59/86/e6/5986e6c412706db74e73e2c01934f937.png)
* Course style 
	* Direct
	* No Basics
* Have you checked basics (or advanced) resources from last class? 
	* Programming on phone course
	* My Paid Course: HTML
	* FWD Live Sessions
	* PHP Urdu Book 
	* W3Schools
		* HTML
		* CSS
		* JS
		* PHP
		* SQL
	* DigiSkills
* Course Fee!
	* Don't worry :slightly_smiling_face:
	* Pay as you like!
	> Account Holder: Aamir Shahzad  
	> Account No: 52010100479581  
	> Bank Name: Meezan Bank  
	> City: Attock City  
	> Branch Code: 5201  
	> IBAN No: PK97MEZN0052010100479581  

# Instructor Intro (*brief*): Aamir Shahzad
* DCS, IDCS, IADCS, MCS
* Programming, Linux & Open Source
* RoshanTech
* Attock City
* [eSite.pk](http://esite.pk/)

# Class
* Our Digital Product
	* Social Media Post Sharing Project
* Domain Knowledge
	* How social media works
	* Posts, comments, sharing, etc
* Database Design, in PhpMyAdmin, or other software
	* Create Database: social
	* Create Table: user with fields 
		* id
		* name 
			* maybe first name
			* last name
		* email
		* password
		* etc but it's enough for now
* Database CRUD Operation in PHP
	1. *C*reate Record
	2. *R*ead Record
	3. *U*pdate Record
	4. *D*elete Record
* Our Existing Knowledge?

## Our Existing Knowledge
* echo/print/other function, what's function?
* both can have ()

## Assumed Knowledge
* Variable
* Comments, //, /* Multi lines ... */
* if/elseif/else/switch statements
* loops for/while/do...while/foreach

## New Knowledge
* die statement/function

## 1. CRUD Operation: Create Record
* mysqli_connect(), return obj or false
* mysqli_query(), return result or false
* mysqli_close

```php
$connection = mysqli_connect(
	'localhost', // servername/IP, it's comment
	'root', // username
	'', // password
	'social' // Database name, notice no ","
);

mysqli_query(
	$connection,
	'INSERT INTO user (name, email, password) VALUES ("Aamir Shahzad", "Aamir@eSite.pk", "Hmmm, Why I told you?")'
);

echo "<h1>Database record created successfully.</h1>";

mysqli_close($connection);
```


## 2. CRUD Operation: Read Record


## 3. CRUD Operation: Update Record


## 4. CRUD Operation: Delete Record

## Skipped Functions
* mysqli_connect_error()
	```php
	if (!$connection) {
  	die('Could not connect with the database due to the following error: ' . mysqli_connect_error());
	}
	```
* mysqli_error()
	```php
	echo 'Error in executing query: ' . mysqli_error($connection);
	```



# Install WAMP/LAMP/MAMP/XAMPP
* LAN IP

# Ending
How to download repo with code
https://github.com/asakpke/Learn-PHP-Web-App-Development-using-MySQL